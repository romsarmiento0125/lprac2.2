<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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
// header('Access-Control-Allow-Origin:  http://localhost:4200');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
// header('Access-Control-Allow-Methods:  POST, PUT');

//Route::get();
Route::get('/', function () {
  return view('home');
});

Route::resource('acrud', myController::class);