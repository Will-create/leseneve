<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tvcat extends Model
{
    use HasFactory;

    protected $table = 'tvcategories';


    public function videos(){
        return $this->belongsToMany('App\Models\Video','tvcategorie_video','tvcat_id','video_id','id');
    }


}
