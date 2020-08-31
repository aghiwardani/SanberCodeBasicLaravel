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

Route::get('/', function () {
    return view('index');
});
//Index Tugas Pekan Hari
Route::get('/p1h1', function () {return view('index');});
Route::get('/p1h2', function () {return view('index');});
Route::get('/p1h3', function () {return view('index');});
Route::get('/p1h4', function () {return view('index');});
Route::get('/p1h5', function () {return view('index');});

Route::get('/p2h1', function () {return view('index_week2_day1');});

Route::get('/form', function () {
    return view('form');
});
Route::post('/welcome', function () {
    return view('welcome');
    // $test = 0;
    // return view('welcome',compact("test"));
});

Route::get('/string', function () {
    return view('string');
});
Route::get('/function', function () {
    return view('function');
});
Route::get('/conditional', function () {
    return view('conditional');
});
Route::get('/looping', function () {
    return view('looping');
});
Route::get('/array', function () {
    return view('array');
});

//Route Tugas Pekan 2 hari 1
Route::get('/p2h1/string', function () {return view('Week2/string');});
Route::get('/p2h1/array', function () {return view('Week2/array');});