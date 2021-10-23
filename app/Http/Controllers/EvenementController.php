<?php

namespace App\Http\Controllers;
use App\Models\Evenement;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Presentation;
use App\Models\Comment;


class EvenementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    public function indexDash(){
        $evenements = Evenement::all();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.Evenements.index', compact('evenements', 'messagesRecu', 'commentC'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $evenements=Evenement::all();
        $presentation = Presentation::all();
        return view('pages.Evenements.index',compact('evenements','AllSecteurs','AllPoles','presentation'));
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
        return view('dashboard.pages.Evenements.create', compact('AllSecteurs','AllPoles','presentation'));
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
            'titre'=>'required  ',
            'description'=>'required ',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $evenement = new Evenement();
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        
        
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $evenement->Image = '/uploads/photo/'.$file_name;
        

        //Flash session
        $request->session()->flash('titreAjt',$request->titre);

        $evenement->save();
        return redirect('evenementsDash');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $evenement=Evenement::findOrFail($id);
        $evenements = Evenement::orderBy('created_at','DESC')->limit(5)->get();
        $articles = Article::orderBy('created_at','DESC')->limit(5)->get();
        $presentation = Presentation::all();
        return view('pages.Evenements.show',compact('evenement','AllSecteurs','AllPoles', 'evenements', 'articles','presentation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.Evenements.edit', compact('evenement', 'AllPoles', 'AllSecteurs', 'presentation'));
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
        $request->validate([
            'titre'=>'required  ',
            'description'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $evenement = Evenement::find($id);
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        
        if($request->hasFile('image') == null && $evenement->Image != null){
            $evenement->Image == $evenement->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $evenement->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('titreMdf',$request->titre);
        $evenement->save();
        return redirect('evenementsDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $evenement = Evenement::find($id);
        $evenement->delete();
        //Flash session
        session()->flash('titreSupp',$evenement);
        return redirect('evenementsDash');
    }
}
