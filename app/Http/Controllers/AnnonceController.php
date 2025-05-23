<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Catannonce;
use App\Urgence;
use App\Ville;
use App\Commune;


use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::with(['user', 'catannonce','urgence'])->get();//->toarray();
        $categories = Catannonce::all();
        $urgences = Urgence::all();
        $villes = Ville::all();
        
        return view('front-end.annonces.demandes_annonces',compact('annonces','categories','urgences','villes'));
  
        
    }



    public function filtre(Request $request)
    {

        if (!$request->commune) {
            $ville= $request->ville;
            $annonces= Annonce::join('communes', function ($join) use($ville){$join->on('annonces.commune_id', '=', 'communes.id')->where('communes.ville_id', '=', $ville);})->get();
          

             return response()->json($annonces);
      
        
       
        }
        else{
            $annonces=Annonce::where('commune_id',$request->commune)->get();
            return response()->json($annonces);
        }
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
