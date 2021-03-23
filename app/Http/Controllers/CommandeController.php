<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\Galerie;
class CommandeController extends Controller
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
        return view('FrontEnd.commandes.commandeCartes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function commanderCarte($modele)
    {
        $modele = Galerie::find($modele);
        
        return view('FrontEnd.commandes.commandeCartes',['modele' => $modele]);
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
            $c = new Commande();
            $c->nom = $request->input('nom');
            $c->prenom = $request->input('prenom');
            $c->telephone = $request->input('telephone');
            $c->email = $request->input('email');
            $c->adresse = $request->input('adresse');
            $c->produit = $request->input('produit');
            $c->quantité = $request->input('quantité');
            $c->details = $request->input('details'); 
            if($request->hasFile('recu')){ 
                $image_name = $request->file('recu')->getClientOriginalName();
                $c->recu = $request->file('recu')->storeAs('recus/',$image_name);
            }
            $c->save();
        
            return back()->with('success', 'Votre commande a été envoyé avec succès!');   
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
