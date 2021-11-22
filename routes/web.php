<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/lang/{lang}" ,function($lang){
    if ($lang =="ar")
        session()->put("lang" , "ar");
    else
        session()->put("lang" , "en");
        return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});
