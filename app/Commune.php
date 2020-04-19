<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable =['code_postal','nom','ville_id'];

    public function ville(){        
        return $this->belongsTo('App\Ville');
             
    }

    
    public function annonce()
    {
        return $this->hasMany('App\Annonce');
    }
    
}
