<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ActivationCode extends Model
{
    //


    protected $fillable = ['code'];





    public function user(){


        return $this->belongsTo(User::class);


    }


    public function getRouteKeyName()
    {
        return 'code';
    }








}
