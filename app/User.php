<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','prenom','email', 'password','phone_number','active','provider', 'provider_id','ville_id','sex', 'adresse','date_naissance','profession_id','servicep_id','nom_association','domaine_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];





    public function userActivationCode(){


        return $this->hasOne(ActivationCode::class);

    }



    public function userIsActivated(){


        if($this->active){

            return true;

        }


        return false;

    }




    public function activites(){

        return $this->hasMany('App\Activite');
    }


    public function ville(){

        return $this->belongsTo('App\Ville');
    }

    public function profession(){

        return $this->belongsTo('App\Profession');

    }

    public function servicep(){

        return $this->belongsTo('App\Servicep');

    }

    public function domaine(){

        return $this->belongsTo('App\Domaine');

    }

    public function interesser(){

        return $this->belongsToMany('App\Activite')   ->withPivot('like')
            ->withPivot('commentaire')
            ->withPivot('date_commentaire')
            ->withTimestamps();

    }


    public function repondre(){

        return $this->belongsToMany('App\Annonce')
        ->withPivot('note')
            ->withTimestamps();
    }







}
