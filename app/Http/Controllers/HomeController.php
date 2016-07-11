<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function landing(){
        return view('guest.welcome');
    }

    public function login(){
        return view('guest.login');
    }
}
