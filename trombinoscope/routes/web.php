<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\trombi;

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

Route::post('/etna', [trombi::class, "add_profile"])->name('add_profile');

Route::get('profile/{id}', function ($id) {

    $data = DB::table('profiles')->where('id', "=", $id)->get();

    return view('profile', ['data' => $data]);
});

Route::get('/blu', function () {
    $data = DB::table('profiles')->get();

    return view('le-blu', ['data' => $data]);
});

Route::get('/studio', function () {
    $data = DB::table('profiles')->get();

    return view('le-studio', ['data' => $data]);
});


Route::get('/service-com-admissions', function () {
    $data = DB::table('profiles')->get();

    return view('service-com-admissions', ['data' => $data]);
});

Route::get('/service-pedagogique', function () {
    $data = DB::table('profiles')->get();

    return view('service-pedagogique', ['data' => $data]);
});

Route::get('/service-relations-ecole-entreprise', function () {
    $data = DB::table('profiles')->get();

    return view('service-relations-ecole-entreprise', ['data' => $data]);
});

Route::get('/service-rh', function () {
    $data = DB::table('profiles')->get();

    return view('service-rh', ['data' => $data]);
});
