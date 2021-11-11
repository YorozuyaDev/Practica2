<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaControlador;

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

Route::get('/', [VistaControlador::class, 'index'])->name('index');
Route::resource('resource', VistaControlador::class);
Route::get('/resource/all/flush', [VistaControlador::class, 'flush'])->name('flush');



//Route::get('create', [VistaControlador::class, 'create'])->name('create');
