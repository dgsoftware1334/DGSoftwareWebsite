<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\User;
use App\Models\Offre;
use App\Http\Requests\DemandeRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Mail\accountCreated;
use App\Mail\demandeNonValide;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $x = Demande::orderByRaw('etat DESC,created_at DESC')->get();

        return view('demandes.index',['demandes' => $x]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
           
         $x = Offre::get();
           
        } catch (ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    
        }

        return view('inscription',['offres' => $x]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DemandeRequest $request)
    {
         try {
              $x = new Demande();
            $x->ID_offre = $request->input('IDoffre');
            $x->nom = $request->input('nom');
            $x->prenom = $request->input('prenom');
            $x->email = $request->input('email');
            $x->pays = $request->input('pays');
            $x->ville = $request->input('ville');
            if($request->file('recuCCP')){
                $user= $request->input('nom').'_'. $request->input('prenom').'.'.
                $request->file('recuCCP')->getClientOriginalExtension();
                //Storage::put($user, $x->recuCCP);
               $x->recuCCP = $request->file('recuCCP')->storeAs('receipts',$user);
            }
        $x->save();

    }catch (ModelNotFoundException $exception) {
        return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    }
     return back()->with('success', "Merci pour votre demande, votre inscription a été soumise avec succès! 
        Vous recevrez un e-mail de votre compte d'accès une fois votre reçu CCP validé par l'administrateur");
    
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
        try{
            $x =Demande::find($id);
            Mail::to($x->email)->send(new demandeNonValide($x));
            $x->delete();

        }catch(Exception $e){
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return back()->with('success', "La demande a été suprrimée avec succès.");
    }

    

    public function confirmer($id)
    {
        try{
            $x =Demande::find($id);

                $abonné = new User();
                $abonné->name= $x->nom.'  '.$x->prenom;
                $abonné->email = $x->email;
                $abonné->status ='Offre'.' '.$x->ID_offre;
                  $motDepasse = str_random(8);
                $abonné->password = $hashed_random_password = Hash::make($motDepasse);
                Mail::to($abonné->email)->send(new accountCreated($abonné,$motDepasse));
                $abonné->save();
           
                        
            $x->etat = "confirmé";
            $x->save();

        }catch(Exception $e){
            return back()->with('error','Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return back()->with('success', "Un compte pour : ".$abonné->email."  avec le mot de passe : ".$motDepasse." a été créer!");
    
    }

    public function fileViewer($recu)
    {
        try {
             $file = Demande::find($recu)->recuCCP;
            if (Storage::disk('local')->exists($file)) {
                return response()->file('storage/' . $file);
            } 

        }catch(Exception $e) {

            return back()->with('error','Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        
    }

}
