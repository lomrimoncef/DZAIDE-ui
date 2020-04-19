<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catannonce extends Model
{

    protected $fillable = [
        'categorie',
    ];

    public function annonce(){

        return $this->hasMany('App\Annonce');
            }






}
