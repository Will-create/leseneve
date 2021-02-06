<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class CommentaireController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate([
            'auteur' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'contenu' => ['required', 'string', 'min:3'],
            'article_id' => ['required', 'integer'],

        ]);
        $article = Article::where('id', $request->article_id)->with('categories')->first();
        $categorie = $article->categories[0];
        $commentaire = new Commentaire();
        $commentaire->uuid = Str::uuid();
        $commentaire->auteur = $data['auteur'];
        $commentaire->email = $data['email'];
        $commentaire->contenu = $data['contenu'];
        $commentaire->article_id = $article->id;
        $commentaire->save();

        return redirect()->route('article',['categorie' => $categorie->slug,'article'=>$article->slug])->with('status','commentaire soumis avec succès!');

    }
}
