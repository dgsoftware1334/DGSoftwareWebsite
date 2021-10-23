<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Article;
use App\Models\Evenement;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Presentation;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function indexDash(){
        $services = Service::all();
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
       return view('dashboard.pages.services.index', compact('services', 'messagesRecu', 'commentC'));
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
        $services=Service::all();
        $presentation = Presentation::all();
        return view('pages.services.index',compact('services','AllSecteurs','AllPoles','presentation'));
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
        return view('dashboard.pages.services.create',compact('AllSecteurs','AllPoles','presentation'));
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

        $service = new Service();
        $service->nom = $request->nom;
        $service->details = $request->details;

        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $service->image = '/uploads/photo/'.$file_name;

        //Flash session
        $request->session()->flash('titreAjt',$request->nom);
        $service->save();
        return redirect('servicesDash');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $service = Service::find($id);
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.services.edit', compact('service','AllPoles','AllSecteurs','presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nom'=>'required  ',
            'details'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service = Service::find($id);
        $service->nom = $request->nom;
        $service->details = $request->details;

        if($request->hasFile('image') == null && $service->image != null){
            $service->image == $service->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $service->image = '/uploads/photo/'.$file_name;
        }
        //Flash session
        $request->session()->flash('titreMdf',$request->nom);
        $service->save();
        return redirect('servicesDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $service = Service::find($id);
        $service->delete();
        //Flash session
        session()->flash('titreSupp',$service);
        
        return redirect('servicesDash');
    }
}
