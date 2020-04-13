<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeact extends Model
{
    protected $fillable = [
        'typeact',
    ];

    public function activites(){

        return $this->hasMany('App\Activite');
    }









}
