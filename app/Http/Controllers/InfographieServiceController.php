<?php

namespace App\Http\Controllers;

use App\Models\InfographieService;
use App\Models\Developpement;
use App\Models\Article;
use App\Models\Evenement;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Presentation;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Service;
use Illuminate\Http\Request;

class InfographieServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function indexDash(){
        
        $infographieServices = InfographieService::all();
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        return view('dashboard.pages.infographieServices.index', compact('infographieServices', 'messagesRecu', 'commentC'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $services_info=InfographieService::all();
        $presentation = Presentation::all();
        return view('pages.infographieServices.index',compact('services_info','AllSecteurs','AllPoles','presentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.infographieServices.create'
        ,compact('AllSecteurs','AllPoles','presentation'));
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
            'nom'=>'required  ',
            'details'=>'required ',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service_info = new InfographieService();
        $service_info->nom = $request->nom;
        $service_info->details = $request->details;

        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $service_info->image = '/uploads/photo/'.$file_name;

        //Flash session
        $request->session()->flash('titreAjt',$request->nom);
        $service_info->save();
        return redirect('infographieDash');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfographieService  $infographieService
     * @return \Illuminate\Http\Response
     */
    public function show(InfographieService $infographieService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfographieService  $infographieService
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $infographieService = InfographieService::find($id);
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.infographieServices.edit', compact('infographieService','AllPoles','AllSecteurs','presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfographieService  $infographieService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nom'=>'required  ',
            'details'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service_info = InfographieService::find($id);
        $service_info->nom = $request->nom;
        $service_info->details = $request->details;

        if($request->hasFile('image') == null && $service_info->image != null){
            $service_info->image == $service_info->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $service_info->image = '/uploads/photo/'.$file_name;
        }
        //Flash session
        $request->session()->flash('titreMdf',$request->nom);
        $service_info->save();
        return redirect('infographieDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfographieService  $infographieService
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $service_info = InfographieService::find($id);
        $service_info->delete();
        //Flash session
        session()->flash('titreSupp',$service_info);
        
        return redirect('infographieDash');
    }
}
