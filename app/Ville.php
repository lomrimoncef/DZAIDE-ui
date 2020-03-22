<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //

    protected $fillable = [
        'ville',
    ];




    public function users(){

        return $this->hasMany('App\User');
    }




}
