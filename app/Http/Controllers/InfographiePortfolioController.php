<?php

namespace App\Http\Controllers;

use App\Models\InfographiePortfolio;
use App\Models\Portfolio;
use App\Models\Developpement;
use App\Models\Article;
use App\Models\Evenement;
use App\Models\Video;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Presentation;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Service;
use App\Models\InfographieService;
use Illuminate\Http\Request;

class InfographiePortfolioController extends Controller
{


    public function showDash(int $id)
    {
        $images = InfographieService::find($id)->images;
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        $service = InfographieService::find($id);
        return view('dashboard.pages.portfoliosInfo.show', compact('service', 'images','messagesRecu', 'commentC'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        $service = InfographieService::find($id);
        return view('dashboard.pages.portfoliosInfo.create'
        ,compact('AllSecteurs','AllPoles','presentation', 'service'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = new InfographiePortfolio();

        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/portfolio/infographie'),$file_name);
        $image->image = '/uploads/portfolio/infographie/'.$file_name;

        $image->infographie_service_id = $request->service;

        $image->save();

        //Flash session
        $request->session()->flash('titreAjt',$request->service);

        return redirect('dashboard/'.$image->infographie_service_id.'/portfolio_info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfographiePortfolio  $infographiePortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(InfographiePortfolio $infographiePortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfographiePortfolio  $infographiePortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(InfographiePortfolio $infographiePortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfographiePortfolio  $infographiePortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfographiePortfolio $infographiePortfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfographiePortfolio  $infographiePortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $image = InfographiePortfolio::find($id);
        $image->delete();
        return redirect('dashboard/'.$image->infographie_service_id.'/portfolio_info');
    }
}
