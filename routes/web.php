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
