<?php

namespace App\Http\Controllers;

use App\Models\InfographieWork;
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

class InfographieWorkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function indexDash(int $id){
        
        $info_works = InfographieWork::where('infographie_service_id', $id)->orderBy('created_at', 'DESC')->get();
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        $info_service = InfographieService::find($id);
        return view('dashboard.pages.infographieWorks.index', compact('info_service','info_works', 'messagesRecu', 'commentC'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $info_works = InfographieWork::where('infographie_service_id', $id)->orderBy('created_at', 'DESC')->get();
        $presentation = Presentation::all();
        $info_service = InfographieService::find($id);
        $services = InfographieService::all();

        return view('pages.infographieWorks.index',compact('services', 'info_service','info_works','AllSecteurs','AllPoles','presentation'));
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
        $info_service = InfographieService::find($id);
        return view('dashboard.pages.infographieWorks.create'
        ,compact('AllSecteurs','AllPoles','presentation', 'info_service'));
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
            'infoService'=>'required ',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $info_work = new InfographieWork();
        $info_work->nom = $request->nom;
        $info_work->details = $request->details;
        $info_work->infographie_service_id = $request->infoService;

        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $info_work->image = '/uploads/photo/'.$file_name;

        $info_work->save();

        //Flash session
        $request->session()->flash('titreAjt',$request->nom);
        return redirect('dashboard/'.$info_work->infographie_service_id.'/infographieWork');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfographieWork  $infographieWork
     * @return \Illuminate\Http\Response
     */
    public function show(InfographieWork $infographieWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfographieWork  $infographieWork
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $info_work = InfographieWork::find($id);
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $info_services = InfographieService::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.infographieWorks.edit',
         compact('info_services','info_work','AllPoles','AllSecteurs','presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfographieWork  $infographieWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nom'=>'required  ',
            'details'=>'required ',
            'infoService'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $info_work = InfographieWork::find($id);
        $info_work->nom = $request->nom;
        $info_work->details = $request->details;
        $info_work->infographie_service_id = $request->infoService;

        if($request->hasFile('image') == null && $info_work->image != null){
            $info_work->image == $info_work->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $info_work->image = '/uploads/photo/'.$file_name;
        }

        $info_work->save();

        //Flash session
        $request->session()->flash('titreMdf',$request->nom);
        return redirect('dashboard/'.$info_work->infographie_service_id.'/infographieWork');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfographieWork  $infographieWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $info_work = InfographieWork::find($id);
        $info_work->delete();
        //Flash session
        session()->flash('titreSupp',$info_work);
        
        return redirect('dashboard/'.$info_work->infographie_service_id.'/infographieWork');
    }
}
