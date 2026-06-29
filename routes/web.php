<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\OfficeController;      
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

Route::get('/hello',[HelloController::class,'index']);



Route::get('/offices/create', [OfficeController::class, 'create'])->name('office.create');
Route::post('/offices', [OfficeController::class, 'store'])->name('office.store');
Route::get('/offices/{office_id}/edit', [OfficeController::class,'edit'])->name('office.edit');
Route::post('/offices/{office_id}/update', [OfficeController::class, 'update'])->name('office.update');
Route::get('/offices', [OfficeController::class,'index'])->name('office.index');
Route::get('/', function () {
    return view('welcome');
});
