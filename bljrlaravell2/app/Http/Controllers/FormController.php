<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function daftar () {
        return view('register');
    }

    public function home(Request $request){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $bio = $request->input('bio');
        $gender = $request->input('gender');
        $negara = $request->input('negara');
        $bahasa = $request->input('bahasa');



        return view('page.home', ['firstname' => $firstname, 'lastname' => $lastname, "bio" => $bio]);
    }
}


