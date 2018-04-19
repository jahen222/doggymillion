<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Race;

class DogsController extends Controller
{
    public function Register()
    {
        $races = Race::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        return view('dogs.register', compact('id', 'countries'), compact('id', 'races'));
    }

    public function Store()
    {

        return view('index');
    }
}
