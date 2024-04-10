<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
})->name("home");


Route::controller(App\Http\Controllers\LoginController::class)->group(function (){

    Route::get("/login", "showLogin")->name("login");
    Route::post("/login", "login")->name("loginPost");
});