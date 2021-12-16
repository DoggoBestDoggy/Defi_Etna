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
    return view('trombi');
});

Route::get('/etna', function () {
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

Route::get('/blu', function () {
    $data = DB::table('profiles')->get();

    return view('le-blu', ['data' => $data]);
});

Route::get('/studio', function () {
    return view('le-studio');
});

Route::get('/serviceadmi', function () {
    return view('service-com-admissions');
});

Route::get('/service-com-admissions', function () {
    return view('service-com-admissions');
});

Route::get('/service-pedagogique', function () {
    return view('service-pedagogique');
});

Route::get('/service-relations-ecole-entreprise', function () {
    return view('service-relations-ecole-entreprise');
});

Route::get('/service-rh', function () {
    return view('service-rh');
});
