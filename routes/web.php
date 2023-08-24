<?php

use App\Models\DataBmi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBmiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data',[DataBmiController::class,'index'])->name('index');
Route::get('/create',[DataBmiController::class,'create'])->name('create');
Route::get('/show/{id}',[DataBmiController::class,'show'])->name('show');
Route::post('/store',[DataBmiController::class,'store'])->name('store');
Route::post('/update/{id}',[DataBmiController::class,'update'])->name('update');

Route::get('/edit/{id}',[DataBmiController::class,'edit'])->name('edit');
