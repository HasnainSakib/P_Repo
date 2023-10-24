<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view("Frontend.index");
    }

    public function registration(){
        return view("Frontend.partials.registration");
    }
    
    public function login(){
        return view("Frontend.partials.login");
    }
    
}
