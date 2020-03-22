<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{

    protected $fillable = [
        'profession',
    ];



    public function users(){

        return $this->hasMany('App\User');

    }


}
