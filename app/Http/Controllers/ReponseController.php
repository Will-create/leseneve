<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use App\Models\Commentaire;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
   
    public function store(Request $request)
    {

        $data = $request->validate([
            'auteur' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'contenu' => ['required', 'string', 'min:3'],
            'article_id' => ['required', 'integer'],
        ]);
        $commentaire = Commentaire::where('id', $request->commentaire_id)->with('article')->first();
        $article = $commentaire->article;
        $reponse = new Reponse();
        $reponse->uuid = Str::uuid();
        $reponse->auteur = $data['auteur'];
        $reponse->email = $data['email'];
        $reponse->contenu = $data['contenu'];
        $reponse->commentaire_id = $commentaire->id;
        $reponse->save();
        return redirect()->route('article',$article->slug)->with('status','commentaire soumis avec succès!');

    }
   
}
