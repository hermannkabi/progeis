<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function showLogin(){
        if(Auth::check()){
            return redirect()->route("dashboard");
        }
        return view("pages.auth.login");
    }

    function login(Request $request){
        $credentials = $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8",
        ], [
            "email.required"=>"E-posti aadress on kohustuslik",
            "password.min"=>"Parool peab olema vähemalt 8 tähemärki pikk"
        ]);

        if(Auth::attempt($request->only(["email", "password"]), $request->remember ?? false)){
            $request->session()->regenerate();

            return redirect()->intended("dashboard");
        }


        return redirect()->route("register");
    }


    function showRegister(){
        if(Auth::check()){
            return redirect()->route("dashboard");
        }
        return view("pages.auth.register");
    }

    function register(Request $request){
        $credentials = $request->validate([
            "name"=>"required|min:3",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:8|confirmed",
        ], [
            "name.required"=>"Nimi on kohustuslik",
            "email.required"=>"E-posti aadress on kohustuslik",
            "password.min"=>"Parool peab olema vähemalt 8 tähemärki pikk",
        ]);

        $user = User::create(["name"=>$request->name, "email"=>$request->email, "password"=>Hash::make($request->password)]);

        Auth::login($user);

        return redirect()->route("dashboard");
    }
}
