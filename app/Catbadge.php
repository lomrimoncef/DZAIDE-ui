<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catbadge extends Model
{
    protected $fillable = [
        'categorie',
    ];


    public function badges(){

        return $this->hasMany('App\Badge');
    }

}
