<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urgence extends Model
{
    protected $fillable = [
        'libele', 'nbr_jr'];

    
    public function annonce()
    {
        return $this->hasMany('App\Annonce');
    }
    
}
