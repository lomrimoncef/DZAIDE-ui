<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catannonce extends Model
{

    protected $fillable = [
        'categorie',
    ];

    public function annonces(){

        return $this->hasMany('App\Annonce');
            }






}
