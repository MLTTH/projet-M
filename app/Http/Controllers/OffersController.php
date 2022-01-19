<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    //Fetch all offers available
    public function index(){
        $offers = Offer::all();
        return view('offers')->with('offers', $offers); 
    }


    //Store offer information on the database_path
    public function store(Request $request){
        //validate the inputs https://laravel.com/docs/8.x/validation#available-validation-rules
        $request->validate([
            'title'=>'required',
            'people'=>'required|numeric',
            'rent'=>'required|numeric',
            'squaremeter'=>'required|numeric',
            'desc-full'=>'required',
            'img'=>'required',
        ], [
            'title.required' => 'Merci de renseigner le titre',
            'people.required' => 'Sélectionnez le nombre de colocataires',
            'rent.required' => 'Entrez un loyer',
            'squaremeter.required' => 'Renseignez le taille du logement',
            'desc-full.required' => 'Décrivez la colocation',
            'img.required' => 'Enregistrez une image',
        ], 
        [
            'title'=>'titre',
            'people'=>'nombre de colocataire',
            'rent'=>'loyer mensuel HC',
            'squaremeter'=>'taille du logement en m2',
            'desc-full'=>'description de la colocation',
            'img'=>'image',
        ]);


        //Upload the image
        $path = $request->file('img')->store('offer_images');

        //Insert data into the offers table
        $offer = new Offer();
        $offer->title=$request->input('title');
        $offer->people=$request->input('people');
        $offer->rent=$request->input('rent');
        $offer->long_desc=$request->input('desc-full');
        $offer->squaremeter=$request->input('squaremeter');
        $offer->image_url=$path;
        $offer->user_id=Auth::id();

        //save into the table
        $offer->save();

        //redirect to the offer
        return redirect('/offer/' .$offer->id);
        
    }
}
