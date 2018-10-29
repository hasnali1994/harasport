<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    public function parent(){
        return $this->belongsTo('App\Categorie', 'parent_id');
    }
}
