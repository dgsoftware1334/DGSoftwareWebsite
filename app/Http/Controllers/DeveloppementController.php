<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;

class DeveloppementController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function indexDash(int $id){

        $developpements = Developpement::where('service_id', $id)
                            ->orderBy('created_at', 'DESC')->get();
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
        $service = Service::find($id);
       return view('dashboard.pages.developpements.index', compact('service','developpements', 'messagesRecu', 'commentC'));
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
        $developpements=Developpement::where('service_id', $id)
                        ->orderBy('created_at', 'DESC')->get();
        $presentation = Presentation::all();
        $service = Service::find($id);
        return view('pages.developpements.index',compact('service','developpements','AllSecteurs','AllPoles','presentation'));
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
        return view('dashboard.pages.developpements.create'
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
        $i = 0 ;
        $request->validate([
            'nom'=>'required  ',
            'details'=>'required ',
            'service'=>'required ',
            'videos'=>'required|video|mimes:mp4',
            'images'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048 ',
        ]);

        $developpement = new Developpement();
        $developpement->nom = $request->nom;
        $developpement->details = $request->details;
        $developpement->service_id = $request->service;

        if($request->file('executable')){
            $exe = $request->file('executable');
            $exe_name = time().'.'.$exe->getClientOriginalExtension();
            $exe->move(public_path('/uploads/executables'),$exe_name);
            $developpement->file = '/uploads/executables/'.$exe_name;
        }

        $developpement->save();

        $files = $request->file('videos');

        if($request->hasFile('videos') && $request->hasFile('images')){

            while($i < count($files)){
                $video = new Video();
                $file = $request->file("videos")[$i];
                $file_name =$file->getClientOriginalName().".".$file->getClientOriginalExtension();
                $file->move(public_path('/uploads/video'),$file_name);
                $video->video = '/uploads/video/'.$file_name;

                $file = $request->file("images")[$i];
                $file_name = $file->getClientOriginalName().".".$file->getClientOriginalExtension();
                $file->move(public_path('/uploads/photo'),$file_name);
                $video->image = '/uploads/photo/'.$file_name;

                $video->developpement_id = $developpement->id;

                $video->save();
                $i++;
            }
        }
        //Flash session
        $request->session()->flash('titreAjt',$request->nom);

        return redirect('dashboard/'.$developpement->service->id.'/developpements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Developpement  $developpement
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        $developpement=Developpement::findOrFail($id);
        $videos = Developpement::find($id)->videos;
        return view('pages.developpements.show',compact('videos', 'developpement','AllSecteurs','AllPoles','presentation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Developpement  $developpement
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $developpement = Developpement::find($id);
        $videos = Developpement::find($id)->videos;
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $services = Service::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.developpements.edit', compact('videos', 'services','developpement','AllPoles','AllSecteurs','presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Developpement  $developpement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nom'=>'required  ',
            'details'=>'required ',
            'service'=>'required ',
            'image' => 'file|mimetypes:video/mp4',
        ]);

        $developpement = Developpement::find($id);
        $developpement->nom = $request->nom;
        $developpement->details = $request->details;
        $developpement->service_id = $request->service;

        if($request->file('executable')){
            $exe = $request->file('executable');
            $exe_name = time().'.'.$exe->getClientOriginalExtension();
            $exe->move(public_path('/uploads/executables'),$exe_name);
            $developpement->file = '/uploads/executables/'.$exe_name;
        }

        $developpement->save();

        $files = $request->file('videos');

        $i = 0;

        if($request->hasFile('videos') && $request->hasFile('images')){

            while($i < count($files)){
                $video = new Video();
                $file = $request->file("videos")[$i];
                $file_name =$file->getClientOriginalName().".".$file->getClientOriginalExtension();
                $file->move(public_path('/uploads/video'),$file_name);
                $video->video = '/uploads/video/'.$file_name;

                $file = $request->file("images")[$i];
                $file_name = $file->getClientOriginalName().".".$file->getClientOriginalExtension();
                $file->move(public_path('/uploads/photo'),$file_name);
                $video->image = '/uploads/photo/'.$file_name;

                $video->developpement_id = $developpement->id;

                $video->save();
                $i++;
            }
        }

        //Flash session
        $request->session()->flash('titreMdf',$request->nom);

        return redirect('dashboard/'.$developpement->service->id.'/developpements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Developpement  $developpement
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $developpement = Developpement::find($id);
        $developpement->delete();
        //Flash session
        session()->flash('titreSupp',$developpement);

        return redirect('dashboard/'.$developpement->service->id.'/developpements');
    }
}
