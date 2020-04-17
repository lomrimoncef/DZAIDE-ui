<?php

namespace App\Http\Controllers;

use App\Activite;
use Illuminate\Http\Request;


class ActivitesController extends Controller
{
    public function index()
    {
        $activites = Activite::paginate(9);;
        return view('/association.index2', compact('activites'));


    }

}
