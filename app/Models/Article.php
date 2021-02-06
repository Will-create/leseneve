<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function commentaires(){
        return $this->hasMany('App\Models\Commentaire','article_id','id');
    }
    public function categories(){
        return $this->belongsToMany('App\Models\Categorie','article_categorie','article_id','categorie_id','id');
    }
    public function auteurs(){
        return $this->belongsToMany('App\Models\Auteur','article_auteur','article_id','auteur_id','id');
    }

    public function articles(){
        return $this->hasMany('App\Models\Article');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
