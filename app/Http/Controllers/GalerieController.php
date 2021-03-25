<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = $request->validate([
            'files' =>'required|max:2000',
            'files.*'=>'mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]); 
              $photo = new Galerie();
                $photo->service_id = $request->input('boutique_id');
                $photo->titre = $request->input('nomProduit');
                $photo->disponibilité = 1;
                $photo->prix = $request->input('prix');
                $photo->description= $request->input('description');
                if($request->hasfile('photo')){
                  $photo->photo = $request->file('photo')->storeAs('galerie',$request->file('photo')->getClientOriginalName());
                }
              $photo->save();
         

         if(!is_null($photo)) {
            return back()->with('success', "Produit ajouter avec succés");
         }

         else {
             return back()->with('failed', 'Erreur! Veuillez réessayer');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
