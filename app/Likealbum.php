<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likealbum extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function albums(){
        return $this->belongsToMany('App\Album','likealbum_album');
    }

}
