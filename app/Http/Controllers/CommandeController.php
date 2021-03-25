<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\Galerie;
use App\Models\Service;
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
    public function create($s,$modele)
    {   
        $service = Service::find($s);

        if($service->id == '1'){
            $modele = Galerie::find($modele);
            return view('FrontEnd.commandes.commandeCartes',[ 'service' => $service,'modele' => $modele]);
        }
        elseif($service->id == '2'){

            return view('FrontEnd.commandes.commandeLogo',['service' => $service]);
        }

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
            $validator = $request->validate([ 
                'nom' => 'required|string|max:255',
                'prenom' =>'required|string|max:255',
                'telephone' =>'required|numeric|min:10',
                'email' =>'required|string|email|max:255',
                'adresse' =>'string|nullable',
                'quantité' =>'required|numeric',
                'recu'=>'mimes:jpeg,bmp,png,jpg,svg|image|filled|max:2048',
                'logo'=>'mimes:jpeg,bmp,png,jpg,svg|image|filled|max:2048|nullable',
                'details' =>'string|nullable',
            ],[
                'nom.required' => 'Votre nom est requis',
                'prenom.required' => 'Votre prenom est requis',
                'nom.max' => 'votre nom ne doit pas dépasser 255 caractères', 
                'prenom.max' => 'votre prenom ne doit pas dépasser 255 caractères',
                'telephone.required' => 'Un numéro de téléphone valide est requis pour pouvoir vous contacter a propos de votre commande',
                'telephone.numeric' => 'Votre numéro de téléphone ne doit contenir que des chiffres',
                'telephone.min' => 'Numéro de téléphone invalide',
                'email.required' => 'Une adresse email valide est exigée', 
                'email.email' => "Votre adresse mail n'est pas valide", 
                'recu.mimes' => "Format d'image non prise en charge",
                'recu.max' => "Taille d'image volumieuse",
                'logo.mimes' => "Format du logo non prise en charge",
                'logo.max' => "Taille d'image volumieuse",
            ]); 
            
            $c = new Commande();
            $c->service = $request->input('service');
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
                $c->recu = $request->file('recu')->storeAs('recus',$image_name);
            }
            if($request->hasFile('logo')){ 
                $image_name = $request->input('nom').' '.$request->input('prenom').$request->file('logo')->getClientOriginalExtension();
                $c->logo = $request->file('logo')->storeAs('commandes/logos',$image_name);
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
