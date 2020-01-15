<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Pro extends Model
{
    protected $fillable = [
        'service',
    ];



    public function pros(){

        return $this->hasMany('App\Pro');




    }
}
