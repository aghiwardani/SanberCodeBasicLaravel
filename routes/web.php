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
Route::get('/p1h1', function () {return view('Week1/index_week1_day1');});
Route::get('/p1h2', function () {return view('Week1/index_week1_day2');});
Route::get('/p1h3', function () {return view('Week1/index_week1_day3');});
Route::get('/p1h4', function () {return view('Week1/index_week1_day4');});
Route::get('/p1h5', function () {return view('Week1/index_week1_day5');});

Route::get('/p2h1', function () {return view('Week2/index_week2_day1');});

Route::get('Week1/form', function () {return view('Week1/form');});
Route::post('Week1/welcome', function () {return view('Week1/welcome');});

Route::get('Week1/string', function () {
    return view('string');
});
Route::get('Week1/function', function () {
    return view('function');
});
Route::get('Week1/conditional', function () {
    return view('conditional');
});
Route::get('Week1/looping', function () {
    return view('looping');
});
Route::get('Week1/array', function () {
    return view('array');
});

//Route Tugas Pekan 2 hari 1
Route::get('/p2h1/string', function () {return view('Week2/string');});
Route::get('/p2h1/array', function () {return view('Week2/array');});