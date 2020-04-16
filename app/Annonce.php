<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{    protected $fillable = [
    'titre', 'details', 'date_annonce', 'date_publication', 'publier', 'traiter', 'date_traitement','valider_par','catannonce_id','user_id','urgence_id',
];


public function catannonces(){
        return $this->belongsTo('App\Catannonce');
    }
    



public function users() 
{
    return $this->belongsTo('App\User');
}

public function urgences()
{
    return $this->belongsTo('App\Urgence');
}


}
