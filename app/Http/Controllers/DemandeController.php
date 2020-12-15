<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Storage;


class DemandeController extends Controller
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
     public function shortCut($offreID)
    {
        $x = DB::table('offres')
            ->select('offres.*')
            ->where('offres.id','=','$offreID')
            ->first();

        return view('inscription', ['offres' => $x]);
  
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
           $x = new Demande();
            $x->IDoffre = $request->input('IDoffre');
            $x->nom = $request->input('nom');
            $x->prenom = $request->input('prenom');
            $x->email = $request->input('email');
            $x->num = $request->input('num');
            $x->pays = $request->input('pays');
            $x->ville = $request->input('ville');
            if($request->file('recuCCP')){
                $user= $request->input('nom').'_'. $request->input('prenom').'.'.
                $request->file('recuCCP')->getClientOriginalExtension();
                //Storage::put($user, $x->recuCCP);
               $x->recuCCP = $request->file('recuCCP')->storeAs('receipts',$user);
            }
        $x->save();
         return back()->with('success', "Demande d'incription ajoutée avec succés!");
    
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
