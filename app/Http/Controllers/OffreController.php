<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Offre;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

         $x = Offre::get();
            
        } catch (ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
            
        return back()->with(['offres' => $x]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
             $x = new Offer();
            $x->titre = $request->input('nom');
            $x->prix = $request->input('tel');
            $x->durée = $request->input('email');
            $x->description = $request->input('message');
            $x->save();
            
        } catch (ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
       
         return back()->with('success', 'Offre ajoutée avec succés!');
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
