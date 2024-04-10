<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function showLogin(){
        return view("pages.login");
    }

    function login(Request $request){
        $request->validate([
            "email"=>"required|email",
            "pwd"=>"required|min:8",
        ], [
            "email.required"=>"E-posti aadress on kohustuslik",
        ]);

        return redirect()->route("home");
    }
}
