<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Evenement;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Presentation;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;


class ArticleController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function indexDash(){
        $articles = Article::all();
        $commentC = Comment::where('verified', false)->count();
        $messagesRecu = Contact::where('verified', false);
       return view('dashboard.pages.articles.index', compact('articles', 'messagesRecu', 'commentC'));
    }

    public function index( )
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $articles=Article::all();
        $presentation = Presentation::all();
        return view('pages.articles.index',compact('articles','AllSecteurs','AllPoles','presentation'));
    }


    public function create()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.articles.create',compact('AllSecteurs','AllPoles','presentation'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'titre'=>'required  ',
            'sous_titre'=>'required ',
            'chapeau'=>'required',
            'corp'=>'required | min:10',
            'chute'=>'required | min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $article = new Article;
        $article->Titre = $request->titre;
        $article->SousTitre = $request->sous_titre;
        $article->Chapeau = $request->chapeau;
        $article->Corp = $request->corp;
        $article->Chute = $request->chute;

        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $article->Image = '/uploads/photo/'.$file_name;

        //Flash session
        $request->session()->flash('titreAjt',$request->titre);
        $article->save();
        return redirect('articlesDash');
    }


    public function show($id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $article=Article::findOrFail($id);
        $articles = Article::orderBy('created_at','DESC')->limit(5)->get();
        $evenements = Evenement::orderBy('created_at','DESC')->limit(5)->get();
        $presentation = Presentation::all();
        return view('pages.articles.show',compact('article','AllSecteurs','AllPoles', 'articles', 'evenements', 'presentation'));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.articles.edit', compact('article','AllPoles','AllSecteurs','presentation'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'titre'=>'required  ',
            'sous_titre'=>'required ',
            'chapeau'=>'required',
            'corp'=>'required | min:10',
            'chute'=>'required | min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $article = Article::find($id);
        $article->Titre = $request->titre;
        $article->SousTitre = $request->sous_titre;
        $article->Chapeau = $request->chapeau;
        $article->Corp = $request->corp;
        $article->Chute = $request->chute;

        if($request->hasFile('image') == null && $article->Image != null){
            $article->Image == $article->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $article->Image = '/uploads/photo/'.$file_name;
        }
        //Flash session
        $request->session()->flash('titreMdf',$request->titre);
        $article->save();
        return redirect('articlesDash');

    }


    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        //Flash session
        session()->flash('titreSupp',$article);
        
        return redirect('articlesDash');
    }
}
