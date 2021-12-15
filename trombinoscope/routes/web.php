<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('etna');
});

Route::get('profile/{id}', function ($id) {

    $data = DB::table('profiles')->where('id', "=", $id)->get();

    return view('profile', ['data' => $data]);
});

Route::get('service', function () {

    $data = DB::table('profiles')->get();

    return view('service', ['data' => $data]);
})->name("service.profile");
