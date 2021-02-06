<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::all();
        $categories = Categorie::orderBy('nom', 'asc')->get();
        $titrePage = 'Amassur blo';
        $actif = '';
        return view('pages.articles.index', compact('categories', 'articles', 'professionnels', 'particuliers', 'titrePage'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function parCategorie(Categorie $categorie)
    {
        $articles = Article::where('categorie_id', $categorie->id)->paginate(4);
        $actif = $categorie->id;
        $categories = Categorie::orderBy('nom', 'asc')->skip(3)->take(4)->get();
        $titrePage = 'Amassur Blog: Articles de catégorie: ' . $categorie->nom;
        return view('pages.articles.index', compact('articles', 'actif', 'categories', 'professionnels', 'particuliers', 'titrePage'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($categorie, Article $article)
    {
        $articles = Article::orderBy('updated_at', 'asc')->take(4)->get();
        $categories = Categorie::orderBy('nom', 'asc')->skip(3)->take(4)->get();
        $article->increment('count');
        $titrePage = 'Amassur Blog: ' . $article->titre;
        $actif = '';
        return view('pages.articles.show', compact('categories', 'actif', 'article', 'articles', 'professionnels', 'particuliers', 'titrePage'));
    }
}
