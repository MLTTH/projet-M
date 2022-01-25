<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\House;
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
            'house.people'=>'required|numeric',
            'rent'=>'required|numeric',
            'house.squaremeter'=>'required|numeric',
            'squaremeter'=>'required|numeric',
            'desc-full'=>'required',
            'checkin_date'=>'required|date|after:today',
            'img'=>'required',
        ], [
            'title.required' => 'Merci de renseigner le titre',
            'area.required' => 'Merci de renseigner un arrondissement',
            'house.people.required' => 'Sélectionnez le nombre de colocataires',
            'rent.required' => 'Entrez un loyer',
            'squaremeter.required' => 'Renseignez le taille de la chambre',
            'house.squaremeter.required' => 'Renseignez le taille du logement',
            'desc-full.required' => 'Décrivez la colocation',
            'checkin_date' => 'Merci de renseigner la date à laquelle la chambre est libre',
            'img.required' => 'Enregistrez une image',
        ], 
        [
            'title'=>'titre',
            'area'=>'arrondissement',
            'house.people'=>'nombre de colocataire',
            'rent'=>'loyer mensuel HC',
            'squaremeter'=>'taille du logement en m2',
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
        $offer->rent=$request->input('rent');
        $offer->long_desc=$request->input('desc-full');
        $offer->squaremeter=$request->input('squaremeter');
        $offer->checkin_date=$request->input('checkin_date');
        $offer->is_furnished=$request->has('is_furnished');
        $offer->image_url=$path;
        $offer->user_id=Auth::id();

        $house = new House();
        $house->people=$request->input('house.people');
        $house->squaremeter=$request->input('house.squaremeter');

       
        //save into the table
        
        $offer->house()->associate($house);
        $offer->save();

        //redirect to the offer
        return redirect('/offer/' .$offer->id);


    }

    // EDIT own adds
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

    $offer->save();
    return redirect('/offer/'.$offer->id);
}

    // DELETE an add
    public function destroy($id){
        $offer=Offer::find($id);
        $offer->delete();
        return redirect()->action([OffersController::class, 'showOwnOffers']);
    }
}
