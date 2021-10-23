<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecteurActivite;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Evenement;
use App\Models\Fondateur;
use App\Models\PoleActivite;
use App\Models\Presentation;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllSecteurs=SecteurActivite::all();
        $articles=Article::all();
        $contacts=Contact::all();
        $events=Evenement::all();
        $fondateurs=Fondateur::all();
        $AllPoles=PoleActivite::all();
        $presentations=Presentation::all();

        return view('home',
        compact(
            'AllSecteurs',
            'articles',
            'contacts',
            'events',
            'fondateurs',
            'AllPoles',
            'presentations')
    
              );
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
