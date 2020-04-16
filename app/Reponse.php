<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $fillable =['user_id','annonce_id','date_reponse','avis','note' ];

    public function users(){
        $this->belongsTo('App/User');
    }

    public function annonces(){
        $this->belongsTo('App/Annonce');
    }
}
