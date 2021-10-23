<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\InfographiePortfolio;
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

class PortfolioController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function indexDash(){

        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        $services = Service::all();
        $services_info = InfographieService::all();
        return view('dashboard.pages.portfolios.index', compact('services_info','services','messagesRecu', 'commentC'));
    }

    public function showDash(int $id)
    {
        $images = Service::find($id)->images;
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        $service = Service::find($id);
        return view('dashboard.pages.portfolios.show', compact('service','id','images','messagesRecu', 'commentC'));
    }
    


    public function index()
    {
        
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        $services = Service::all();
        $services_info = InfographieService::all();

        return view('pages.portfolio.index',compact('services','services_info','AllSecteurs','AllPoles','presentation'));
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
        $service = Service::find($id);
        return view('dashboard.pages.portfolios.create'
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

        $image = new Portfolio();

        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/portfolio/developpements'),$file_name);
        $image->image = '/uploads/portfolio/developpements/'.$file_name;

        $image->service_id = $request->service;
        $image->save();

        //Flash session
        $request->session()->flash('titreAjt',$request->service); 

        return redirect('dashboard/'.$image->service_id.'/portfolio_dev');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $image = Portfolio::find($id);
        $image->delete();
        return redirect('dashboard/'.$image->service_id.'/portfolio_dev');
    }
}
