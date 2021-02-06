<?php

namespace App\Http\Controllers;

use App\Models\Tvcat;
use App\Models\Video;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $banieres = Article::where('publie',1)->with('categories', 'auteurs')->orderBy('titre', 'asc')->get();
        $populaires = Article::orderBy('id', 'desc')->orderBy('compteur', 'desc')->get();
        $politiques = [];
        $business = [];
        $sports = [];
        $techs = [];
        $international = [];
        $health = [];
        $cultures = [];
        // $recents = Article::latest()->skip(4)->get();
        $topvideos = Video::latest()->get();
        $buzz = Article::withCount('commentaires')->orderBy('commentaires_count', 'DESC')->latest()->first();
        $categories = Categorie::where('rubrique', 1)->with('articles')->orderBy('id', 'asc')->get();
        $tvcategories = Tvcat::all();
        $titrePage = 'Ips Actu || Votre site d\'actualité';
        $actif = 0;
        $tvactif = '';
        // dd($banieres);
        $items = Article::with('categories')->get();
        foreach ($items as $item) {
            foreach ($item->categories as $cat) {
                switch ($cat->slug) {
                    case 'politique':
                        $politiques[] = $item;
                        break;
                    case 'technologie':
                        $techs[] = $item;
                        break;
                    case 'sport':
                        $sports[] = $item;
                        break;
                    case 'economie':
                        $business[] = $item;
                        break;
                    case 'sante':
                        $health[] = $item;
                        break;
                    case 'culture':
                        $cultures[] = $item;
                        break;
                    case 'internationnal':
                        $international[] = $item;
                        break;
                }
            }
        }
        // return response()->json([
        //     'populaires' =>$populaires,
        // ]);
        // dd($politiques);
        return view('welcome', compact(
            'categories',
            'tvcategories',
            'banieres',
            'populaires',
            'titrePage',
            'topvideos',
            'buzz',
            'politiques',
            'techs',
            'sports',
            'business',
            'health',
            'international',
            'cultures',
            'actif',
            'tvactif'
        ));
    }
    public function tvCategorie($slug)
    {
        $tvcat = Tvcat::with(['videos' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->where('slug', $slug)->first();
        $videos = $tvcat->videos()->paginate(2);
        $categories = Categorie::where('rubrique', 1)->with('articles')->orderBy('id', 'asc')->get();
        $tvcategories = Tvcat::all();
        $titrePage = 'Ips Actu || Votre site d\'actualité';
        $actif = '';
        $tvactif = $tvcat->id;
        return view('tvcategorie', compact(
            'categories',
            'tvcat',
            'tvcategories',
            'actif',
            'tvactif'
        ));
    }
    public function parCategorie($slug)
    {
        $cat = Categorie::with(['articles' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->where('slug', $slug)->first();
        // dd($cat);
        $articles = $cat->articles()->paginate(7);
        $videos = [];
        $categories = Categorie::where('rubrique', 1)->with('articles')->orderBy('id', 'asc')->get();
        $tvcategories = Tvcat::all();
        $titrePage = 'Ips Actu || Votre site d\'actualité';
        $actif = $cat->id;
        $tvactif =  '';
        return view('categorie', compact(
            'categories',
            'cat',
            'tvcategories',
            'articles',
            'videos',
            'actif',
            'tvactif'
        ));
    }
    public function articles($activeCat, $slug)
    {
        $cat = Categorie::where('slug', $activeCat)->first();
        $article = Article::with(['categories' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->where('slug', $slug)->first();
        $commentaires = Commentaire::with(['reponses' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->where('article_id', $article->id)->orderBy('id', 'desc')->get();
        $categories = Categorie::where('rubrique', 1)->with('articles')->orderBy('id', 'asc')->get();
        $tvcategories = Tvcat::all();
        $titrePage = 'Ips Actu || Votre site d\'actualité';
        $actif = $article->categories[0]->id;
        $tvactif = '';
        if ($article->compteur){
            $article->compteur++;
            $article->save();
        }else{
            $article->compteur = 1;
            $article->save();
        }
        return view('article', compact(
            'categories',
            'cat',
            'tvcategories',
            'commentaires',
            'article',
            'actif',
            'tvactif'
        ));
    }
    // public function video($activeCat, $slug)
    // {
    //     $tvcat = Tvcat::where('slug', $activeCat)->first();
    //     $video = Video::with(['categories' => function ($query) {
    //         $query->orderBy('id', 'desc');
    //     }])->where('slug', $slug)->first();
    //     // $commentaires = Tvcommentaire::with(['reponses' => function ($query) {
    //     //     $query->orderBy('id', 'desc');
    //     // }])->where('id', $article->id)->orderBy('id', 'desc')->get();
    //     $categories = Categorie::where('rubrique', 1)->with('articles')->orderBy('id', 'asc')->get();
    //     $tvcategories = Tvcat::all();
    //     $titrePage = 'Ips Actu || Votre site d\'actualité';
    //     $actif = '';
    //     $tvactif = '';
    //     return view('article', compact(
    //         'categories',
    //         'tvcat',
    //         'tvcategories',
    //         'video',
    //         'article',
    //         'actif',
    //         'tvactif',
    //         'titrePage'
    //     ));
    // }

}
