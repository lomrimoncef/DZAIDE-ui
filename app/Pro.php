<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    protected $fillable = [
        'user_id', 'nom_pro','details','service__pro_id', 'profession_id',
    ];










}
