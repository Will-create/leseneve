<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function articles(){
        return $this->belongsToMany('App\Models\Article','article_categorie','categorie_id','article_id','id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
