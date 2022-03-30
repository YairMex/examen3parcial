<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fortniteController;

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


Route::get('/', [fortniteController::class, 'datosApi'])->name('inicio');
Route::get('/categorias', [fortniteController::class, 'categorias'])->name('categorias');
Route::get('/objeto/{id}', [fortniteController::class, 'verObjeto'])->name('objeto');
Route::get('/marvel', [fortniteController::class, 'marvel'])->name('marvel');
Route::get('/dc', [fortniteController::class, 'dc'])->name('dc');
Route::get('/icon', [fortniteController::class, 'icon'])->name('icon');
Route::get('/legendary', [fortniteController::class, 'legendary'])->name('legendary');
Route::get('/epic', [fortniteController::class, 'epic'])->name('epic');
Route::get('/gaming', [fortniteController::class, 'gaming'])->name('gaming');
Route::get('/mapa', [fortniteController::class, 'mapa'])->name('mapa');
Route::get('/contacto', [fortniteController::class, 'contacto'])->name('contacto');
Route::get('/mochilas', [fortniteController::class, 'mochilas'])->name('mochilas');
Route::get('/picos', [fortniteController::class, 'picos'])->name('picos');
Route::get('/emotes', [fortniteController::class, 'emotes'])->name('emotes');
Route::get('/aladelta', [fortniteController::class, 'aladelta'])->name('aladelta');
Route::get('/banners', [fortniteController::class, 'banners'])->name('banners');

