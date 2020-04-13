<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicep extends Model
{
    protected $fillable = [
        'service',
    ];



    public function users()
    {

        return $this->hasMany('App\User');
    }



    }
