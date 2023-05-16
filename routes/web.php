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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/praktikum-laravel', function () {
    return view('praktikum2.index');
});
Route::get('events/{location}/{name}', 
[App\Http\Controllers\EventsController::class,'show']);

Route::get('events', [App\Http\Controllers\EventsController::class, 'index']);

Route::get('events/validate',[App\Http\Controllers\EventsController::class,
'showValidateForm'])->name('validateform.event');
Route::post('events/validate',[App\Http\Controllers\EventsController::class,
'validateForm'])->name('validate.event');
