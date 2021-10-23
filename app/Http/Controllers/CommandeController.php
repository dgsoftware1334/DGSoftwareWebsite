<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Visiteur;
use App\Models\Developpement;
use App\Models\Article;
use App\Models\Evenement;
use App\Models\Video;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Presentation;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\InfographieService;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','createe']);
    }

    public function indexDash(){
        
        $commandes = Commande::orderBy('created_at', 'DESC')->get();
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        $services = InfographieService::all();
        return view('dashboard.pages.commandes.index', compact('services','commandes', 'messagesRecu', 'commentC'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        $services = InfographieService::all();
        return view('dashboard.pages.commandes.create'
        ,compact('AllSecteurs','AllPoles','presentation', 'services'));
    }

    public function createe(int $id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        $service = InfographieService::find($id);
        $services = InfographieService::all();
        return view('pages.commandes.create'
        ,compact('AllSecteurs','AllPoles','presentation', 'service', 'services'));
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'email'=>'required|email',
        ]);

        $client = new Visiteur();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->activite = $request->activite;
        $client->reseau_sociaux = $request->reseau_sociaux;
        $client->save();

        $commande = new Commande();
        $commande->infographie_service_id = $request->type;
        $commande->visiteur_id = $client->id;
        $commande->save();

        //Flash session
        $request->session()->flash('commandeAjt',$request->nom);

        return redirect('infographie/'.$request->type.'/produits');
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
