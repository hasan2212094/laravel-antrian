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

Route::get('/antri_dpt',[ControllerAntrian::class,'antri_dpt'])->name('antri_dpt');
Route::get('/antri_dpt_perempuan/{id}/{id1}/{id2}/{id3}/{id4}/{id5}',[ControllerAntrian::class,'antri_dpt_perempuan'])->name('antri_dpt_perempuan');
Route::get('/antri_dpt_laki/{id}/{id1}/{id2}/{id3}/{id4}/{id5}',[ControllerAntrian::class,'antri_dpt_laki'])->name('antri_dpt_laki');

Route::get('/antri_dpttb',[ControllerAntrian::class,'antri_dpttb'])->name('antri_dpttb');
Route::get('/antri_dpttb_perempuan/{id}/{id1}/{id2}/{id3}/{id4}/{id5}',[ControllerAntrian::class,'antri_dpttb_perempuan'])->name('antri_dpttb_perempuan');
Route::get('/antri_dpttb_laki/{id}/{id1}/{id2}/{id3}/{id4}/{id5}',[ControllerAntrian::class,'antri_dpttb_laki'])->name('antri_dpttb_laki');

Route::get('/antri_dpk',[ControllerAntrian::class,'antri_dpk'])->name('antri_dpk');
Route::get('/antri_dpk_perempuan/{id}/{id1}/{id2}/{id3}/{id4}/{id5}',[ControllerAntrian::class,'antri_dpk_perempuan'])->name('antri_dpk_perempuan');
Route::get('/antri_dpk_laki/{id}/{id1}/{id2}/{id3}/{id4}/{id5}',[ControllerAntrian::class,'antri_dpk_laki'])->name('antri_dpk_laki');
