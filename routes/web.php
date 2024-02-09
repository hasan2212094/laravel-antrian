<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAntrian;

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

Route::get('/', [ControllerAntrian::class, 'index'])->name('index');
Route::get('/antri_dpt/{id}/{id1}/{id2}',[ControllerAntrian::class,'antri_dpt'])->name('antri_dpt');
Route::get('/antri_dpttb/{id}/{id1}/{id2}',[ControllerAntrian::class,'antri_dpttb'])->name('antri_dpttb');
Route::get('/antri_dpk/{id}/{id1}/{id2}',[ControllerAntrian::class,'antri_dpk'])->name('antri_dpk');
