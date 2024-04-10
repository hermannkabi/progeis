<?php

use Illuminate\Support\Facades\Route;


Route::middleware(["auth"])->group(function (){
    // Dashboard view (show available tests & results)
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name("dashboard");

    Route::get("/logout", function (){
        Auth::logout();

        return redirect()->route("dashboard");
    })->name("logout");
    
});

Route::controller(App\Http\Controllers\LoginController::class)->group(function (){
    Route::get("/login", "showLogin")->name("login");
    Route::post("/login", "login")->name("loginPost");

    Route::get("/register", "showRegister")->name("register");
    Route::post("/register", "register")->name("registerPost"); 
});