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

use App\Domaine;
use App\Pro;
use App\Profession;
use App\Service_Pro;
use App\User;
use App\Ville;

Route::get('/', function () {
    return view('layouts.cadre');
});




Route::get('/register2', function () {
    return view('auth.multiple_register');
});










Route::get('/3', function () {

    $serv= Service_Pro::findOrFail('1');
    $profession= Profession::findOrFail('1');
    $pro_user=new Pro(['user_id'=>'1','nom_pro'=>'dr moncef','details'=>'izi baby']);

    $serv->pros()->save( $pro_user);
    $profession->pros()->save( $pro_user);


})->name('3');


Route::get('/register3', function () {


    $ville = Ville::pluck('ville', 'id');
    $service = Service_Pro::pluck('service', 'id');
    $profession = Profession::pluck('profession', 'id');
    $domaine = Domaine::pluck('domaine', 'id');
    return view('auth.multiple_register', compact('ville','service','profession','domaine'));


})->name('register3');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/activate/{code}', 'ActivationController@activation')->name('user.activation');
Route::get('/resend/code', 'ActivationController@coderesend')->name('code.resend');




Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');



















