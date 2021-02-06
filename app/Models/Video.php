<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany('App\Models\Tvcat','tvcategorie_video','video_id','tvcat_id','id');
    }
}
