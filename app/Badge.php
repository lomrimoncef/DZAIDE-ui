<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $fillable = [
        'avatar','lib_badge','catbadge_id',
    ];


    public function users(){

        return $this->hasMany('App\User');

    }




}
