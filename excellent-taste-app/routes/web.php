<?php

use App\Http\Controllers\BeverageController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard/{any}', function(){
    return view('welcome');
})->where('any', '.*');


Route::get('/menu/beverages', [BeverageController::class, 'index'])->name('menu.beverages');
Route::get('/menu/dishes', [\App\Http\Controllers\DishController::class, 'index'])->name('menu.dishes');
