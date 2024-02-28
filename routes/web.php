<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProxyController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    return view('welcome');
});
Route::get('SPC', function() {return view('SPC/supervicionCorte');});
Route::get('SPAR', function(){return view('SPAR/supervicionReparto');});
Route::get('/proxy', [ProxyController::class, 'proxy']);












//Rutas Finaliza linea 40
//inicia lineas de Codigo Miguel Linea 41
Route::get('Home', function () {
    return view('Dashboard');
<<<<<<< HEAD
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
=======
>>>>>>> c95d8263f81060ac7b9984fbaf64985be55c429a
});