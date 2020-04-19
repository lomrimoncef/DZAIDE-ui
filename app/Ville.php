<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //

    protected $fillable = [
        'ville','code_ville'
    ];




    public function user(){

        return $this->hasMany('App\User');
    }

    public function commune(){

        return $this->hasMany('App\Commune');
    }




}
