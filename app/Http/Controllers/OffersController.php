<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    //Fetch all offers items
    public function index(){
        $offers = Offer::orderBy('created_at', 'desc')->paginate(16);
        return view('offers')->with('offers', $offers); 
    }


    //Fetch own offers to display on own dashboard
    public function showOwnOffers(){
        $offers = Offer::where('user_id',Auth::id())->orderBy('created_at','desc')->get(); //user & id of the user logged in are matching
        return view('dashboard')->with('offers',$offers);
    }

    //Fetch a product by id reset
    public function show($id){
        $offer = Offer::find($id);
        return view('offer')->with('offer', $offer);
    }

    //Store offer information on the database_path
    public function store(Request $request){
        //validate the inputs https://laravel.com/docs/8.x/validation#available-validation-rules
        $request->validate([
            'title'=>'required',
            'area'=>'required',
            'people'=>'required|numeric',
            'rent'=>'required|numeric',
            'squaremeter'=>'required|numeric',
            'desc-full'=>'required',
            // 'movein'=>'required',
            'img'=>'required',
        ], [
            'title.required' => 'Merci de renseigner le titre',
            'area.required' => 'Merci de renseigner un arrondissement',
            'people.required' => 'Sélectionnez le nombre de colocataires',
            'rent.required' => 'Entrez un loyer',
            'squaremeter.required' => 'Renseignez le taille du logement',
            'desc-full.required' => 'Décrivez la colocation',
            // 'movein' => 'Merci de renseigner la date à laquelle la chambre est libre',
            'img.required' => 'Enregistrez une image',
        ], 
        [
            'title'=>'titre',
            'area'=>'arrondissement',
            'people'=>'nombre de colocataire',
            'rent'=>'loyer mensuel HC',
            'squaremeter'=>'taille du logement en m2',
            'desc-full'=>'description de la colocation',
            // 'movin'=>'date à laquelle la chambre est libre',
            'img'=>'image',
        ]);


        //Upload the image
        $path = $request->file('img')->store('offer_images');

        //Insert data into the offers table
        $offer = new Offer();
        $offer->title=$request->input('title');
        $offer->area=$request->input('area');
        $offer->people=$request->input('people');
        $offer->rent=$request->input('rent');
        $offer->long_desc=$request->input('desc-full');
        $offer->squaremeter=$request->input('squaremeter');
        // $offer->date=$request->input('date');
        $offer->image_url=$path;
        $offer->user_id=Auth::id();

        //save into the table
        $offer->save();

        //redirect to the offer
        return redirect('/offer/' .$offer->id);

    }

    // edit own adds
    public function edit($id){
    $offer=Offer::find($id); //call find fct of the Model
    return view('edit')->with('offer',$offer);
    }

    public function update(Request $request,$id){
    $request->validate([
        'rent'=>'numeric',
        'squaremeter' => 'numeric',
        'people'=>'numeric'
    ]); 

    $offer = Offer::find($id);
    if($request->hasFile('img')) {
        $path=$request->file('img')->store('offer_images');
    }
    //make sure inputs are not empty and replace old value
    if(!empty($request->input('title')))
    {
        $offer->title=$request->input('title');
    }
    if(!empty($request->input('area')))
    {
        $offer->area=$request->input('area');
    }

    if(!empty($request->input('people')))
    {
        $offer->people=$request->input('people');
    }

    if(!empty($request->input('rent')))
    {
        $offer->rent=$request->input('rent');
    }

    if(!empty($request->input('desc-full')))
    {
        $offer->long_desc=$request->input('desc-full');
    }

    if(!empty($request->input('squaremeter')))
    {
        $offer->squaremeter=$request->input('squaremeter');
    }

    // if(!empty($request->input('date')))
    // {
    //     $offer->title=$request->input('date');
    // }

    $offer->save();
    return redirect('/offer/'.$offer->id);
}

    // Delete an add
    public function destroy($id){
        $offer=Offer::find($id);
        $offer->delete();
        return redirect()->action([OffersController::class, 'showOwnOffers']);
    }
}
