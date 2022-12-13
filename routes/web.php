<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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


Route::get('events',  [EventController::class, 'index'])->name('events.index');
Route::post('events', [EventController::class, 'addEvent'])->name('events.add');



Route::get('/user', [EventController::class, 'index']);
