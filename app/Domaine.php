<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{

    protected $fillable = [
        'domaine',
    ];







    public function users(){

        return $this->hasMany('App\User');




    }
}
