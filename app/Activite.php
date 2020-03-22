<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = [
        'titre_activite', 'details', 'date_debut', 'date_fin', 'publier','date_publication','valider_par','type_act_id',
    ];





    public function typeact(){

        return $this->belongsTo('App\Typeact');


    }





}
