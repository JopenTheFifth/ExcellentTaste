<?php

use App\Http\Controllers\BeverageController;
use App\Http\Controllers\DishController;
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

//disable the following auth routes.
Auth::routes(['register' => false], ['reset' => false], ['confirm' => false], ['verify' => false]);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/dashboard' , function(){
    return view('welcome');
})->name('dashboard')->middleware('auth');


Route::get('/dashboard/{any}', function(){
    return view('welcome');
})->where('any', '.*')->middleware('auth');




Route::get('/menu/beverages', [BeverageController::class, 'index'])->name('menu.beverages');
Route::get('/menu/dishes', [DishController::class, 'index'])->name('menu.dishes');

