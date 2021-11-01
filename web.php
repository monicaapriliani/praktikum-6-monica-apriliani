<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MenuController;

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
    return view('welcome');
});

route::get('/formulir', [GuruController::class, 'formulir']);
route::post('/formulir/proses', [GuruController::class, 'formulir_proses']);

route::get('/pesan', [MenuController::class, 'menu']);
route::post('/menu/proses', [MenuController::class, 'menu_proses']);