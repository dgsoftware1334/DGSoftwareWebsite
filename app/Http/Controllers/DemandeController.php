<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        try {
            if($id == 0)
         $x = DB::table('offres')
            ->select('offres.*')
            ->get();
            else{
             $x = DB::table('offres')
            ->select('offres.*')
            ->where('offres.id','=',$id)
            ->get();
            }
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
    public function store(Request $request)
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
        //
    }

     
}
