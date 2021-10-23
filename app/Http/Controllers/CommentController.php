<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }

    public function indexDash(){
        $comments = Comment::all();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.comments.index', compact('comments', 'messagesRecu', 'commentC'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required  ',
            'commentaire'=>'required|max:255',
        ]);

        $comment = new Comment();
        $comment->nom = $request->nom;
        $comment->commentaire = $request->commentaire;
        $comment->save();

        //Flash session
        $request->session()->flash('commentAjt',$request->nom);

        return redirect('/');
    }


    public function show(int $id)
    {
        $comment = Comment::find($id);
        $comment->verified = true;
        $comment->save();
        //Flash session
        session()->flash('commentVerified',$comment);
        return redirect('commentsDash');

    }

    public function destroy(int $id)
    {
        
        $comment = Comment::find($id);
        $comment->delete();
        //Flash session
        session()->flash('commentDelete',$comment);
        return redirect('commentsDash');
    }
}
