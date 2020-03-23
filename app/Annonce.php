<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{    protected $fillable = [
    'titre', 'details', 'date_annonce', 'date_publication', 'publier', 'traiter', 'date_traitement','valider_par','catannonce_id',
];

}
