<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{    protected $fillable = [
    'titre', 'details', 'date_annonce', 'date_publication', 'publier', 'traiter', 'date_traitement','valider_par','catannonce_id','user_id','urgence_id','commune_id'
];


public function catannonce(){
        return $this->belongsTo('App\Catannonce');
    }
    



public function user() 
{
    return $this->belongsTo('App\User');
}

public function urgence()
{
    return $this->belongsTo('App\Urgence');
}

public function commune()
{
    return $this->belongsTo('App\Commune');
}


}
