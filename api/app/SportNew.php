<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportNew extends Model
{
    //
    public function category(){
        {
            return $this->belongsTo('App\Categorie', 'category_id', 'id');
        }
    }
}
