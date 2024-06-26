<?php

use Illuminate\Support\Facades\Route;
use App\Models\Test;
use Illuminate\Http\Request;

Route::middleware(["auth"])->group(function (){
    // Dashboard view (show available tests & results)
    Route::get('/', function () {
        return view('pages.dashboard', ["tests"=>app("App\Http\Controllers\TestController")->getTests()]);
    })->name("dashboard");

    Route::get("/logout", function (){
        Auth::logout();

        return redirect()->route("dashboard");
    })->name("logout");

    Route::get("/test/{id}/{quest_nr}", function ($id, $quest_nr){
        return view('pages.test', ["question"=>app("App\Http\Controllers\TestController")->getQuestion($id, $quest_nr), "test_name"=>Test::where("id", $id)->first()->name]);
    });

    Route::post("/test/{id}/{quest_nr}", function (Request $request, $id, $quest_nr){
        return app("App\Http\Controllers\TestController")->answerQuestion($request, $id, $quest_nr);
    });
    
});

Route::controller(App\Http\Controllers\LoginController::class)->group(function (){
    Route::get("/login", "showLogin")->name("login");
    Route::post("/login", "login")->name("loginPost");

    Route::get("/register", "showRegister")->name("register");
    Route::post("/register", "register")->name("registerPost"); 
});