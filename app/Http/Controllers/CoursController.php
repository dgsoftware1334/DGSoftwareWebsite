<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Cours;
use  App\Models\Offre;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $x = Cours::all();

        } catch (Exception $e) {
          return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    
        }
        return view('cours.index', ['cours' => $x]);
    }

    public function freeCourses()
    {
        try {
            $x = Cours::all()->where('offre','=','Gratuit');
            
        } catch (Exception $e) {
          return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    
        }
        return view('cours', ['cours' => $x]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $offres = Offre::get();
    
        return view('cours.create', ['offres' => $offres]);
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
         try {
            $x = new Cours();
            $x->offre= $request->input('offre');
            $x->cours= $request->input('cours');
            $x->description = $request->input('description');
            $x->durée = $request->input('durée');
            $x->catégories = $request->input('catégories');
            if($request->hasFile('thumbnail')){
              $thumbnail= $request->input('cours').'_'. $request->input('catégories').'.'.$request->thumbnail->getClientOriginalExtenSion();
               $x->thumbnail = $request->thumbnail->storeAs('thumbnails',$thumbnail);
            }

            $x->save();
            
        } catch(ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return back()->withStatus(__("Le cours a été ajouté avec succès."));
    
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
