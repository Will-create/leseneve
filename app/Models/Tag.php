<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany('App\Models\Categorie','article_categorie','article_id','categorie_id','id');
    }
}
