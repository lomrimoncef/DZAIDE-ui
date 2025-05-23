<?php

namespace App\Http\Controllers\Auth;

use App\Events\ActivationCodeEvent;
use App\Mail\ActivationEmail;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Http\Controllers\Controller;

use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
















    protected function create(array $data)
    {

        if ( isset($data['service']))  { return User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],

            'adresse' => $data['adresse'],
            'sex' => $data['sex'],
            'date_naissance' => $data['date_naissance'],
            'ville_id' => $data['ville'],
            'profession_id'=> $data['profession'],
            'service__pros_id'=> $data['service'],

        ]);}

        if ( isset($data['nom_association']))  { return User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],

            'adresse' => $data['adresse'],
            'sex' => $data['sex'],
            'date_naissance' => $data['date_naissance'],
            'ville_id' => $data['ville'],
            'nom_association'=> $data['nom_association'],
            'domaine_id'=> $data['domaine'],

        ]);}










        else { return User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],

            'adresse' => $data['adresse'],
            'sex' => $data['sex'],
            'date_naissance' => $data['date_naissance'],
            'ville_id' => $data['ville'],

        ]);}









    }




















    protected function registered(Request $request, $user)
    {
        //

        // Insert code into table

     $code=$user->userActivationCode()->create([

            'code'=> str_random(128)

        ]);

        // logout the user


        $this->guard()->logout();

        // email the user
     // Mail::to($user)->queue(new ActivationEmail($code));

//        event(new EventName(gfhjgfh))


        event(new ActivationCodeEvent($user));


        // redirect user

        return redirect('/login')->withSuccess('We sent an email to activate your account, please check within a couple minutes');

    }











}
