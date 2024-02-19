<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





//Rutas Roberto Inicia linea 20
Route::get('/', function () {return view('welcome');});
Route::get('Home', function () {return view('Dashboard');});
Route::get('SPC', function() {return view('SPC/supervicionCorte');});
Route::get('SPAR', function(){return view('SPAR/supervicionReparto');});










//Rutas Finaliza linea 40