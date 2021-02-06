<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    public function reponses(){
        return $this->hasMany('App\Models\Reponse','commentaire_id','id');
    }
}
