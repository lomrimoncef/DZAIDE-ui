<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Activite;
use App\Annonce;
use App\Domaine;
use App\Pro;
use App\Profession;
use App\Service_Pro;
use App\Servicep;
use App\User;
use App\Ville;

Route::get('/', function () {
    return view('layouts.cadre');
});




Route::get('/register2', function () {
    return view('auth.multiple_register');
});

/*Route::get('/index', function () {
    return view('front-end.acceuil');

})->name('index');*/

//Route::get('/demandes_annonces', function () { return view('front-end.annonces.demandes_annonces'); })->name('demandes_annonces');
Route::get('/propositions_annonces', function () {
    return view('front-end.annonces.propositions_annonces');
})->name('propositions_annonces');

// ANNONCES ROUTE
Route::get('demandes_annonces', 'AnnonceController@index')->name('demandes_annonces');





Route::get('/3', function () {

    $serv= Servicep::findOrFail('1');
    $profession= Profession::findOrFail('1');
    $pro_user=new Pro(['user_id'=>'1','nom_pro'=>'dr moncef','details'=>'izi baby']);

    $serv->pros()->save( $pro_user);
    $profession->pros()->save( $pro_user);


})->name('3');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Email verification Routes
|--------------------------------------------------------------------------
*/



Route::get('/activate/{code}', 'ActivationController@activation')->name('user.activation');
Route::get('/resend/code', 'ActivationController@coderesend')->name('code.resend');


/*
|--------------------------------------------------------------------------
| Social Media connexion Routes
|--------------------------------------------------------------------------
*/


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');





/*
|--------------------------------------------------------------------------
| Multiple Register Routes
|--------------------------------------------------------------------------
*/





Route::get('/register3', function () {


    $ville = Ville::pluck('ville', 'id');
    $service = Servicep::pluck('service', 'id');
    $profession = Profession::pluck('profession', 'id');
    $domaine = Domaine::pluck('domaine', 'id');
    return view('auth.multiple_register', compact('ville','service','profession','domaine'));


})->name('register3');





/*
|--------------------------------------------------------------------------
|Activite Association Routes
|--------------------------------------------------------------------------
*/

Route::get('/activite', function () {
    return view('association.index');
})->name('activite');


Route::get('/activite2', function () {
    return view('association.index2');
})->name('activite2');



Route::get('list', 'ActivitesController@index')->name('list');;





/*
|--------------------------------------------------------------------------
|Page home
|--------------------------------------------------------------------------
*/


Route::get('/index', function () {
    return view('front-end.acceuil');
})->name('index');

//test relation any to many ***************************************

Route::get('/act', function () {
    $user=User::find(1);
    $act= Activite::find(1);
    $user->interesser()->save($act,['like' => '1','commentaire' => 'izi','date_commentaire' => '2020-03-23']);

})->name('act');


Route::get('/ann', function () {
    $user=User::find(1);
    $act=Annonce::find(1);
    $user->repondre()->save($act,['note' => '100']) ;

})->name('ann');





// fin test ********************************************************