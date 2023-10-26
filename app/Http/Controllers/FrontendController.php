<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;



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
    
    public function submitLogin(Request $request){
        //  return $request;
        $credentials  = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($credentials)) { //login attempt
            $request->session()->regenerate();
    
            if ($request->has('rememberMe')) {
                Cookie::queue('backendcookieNameEmail', $request->email, 1440); /* 1440 means cookie will clear after 24 hours*/
                Cookie::queue('backendcookieNamePassword', $request->password, 1440);
            }
    
            return redirect()->route('index')->with('message', 'Login successful!');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
}
