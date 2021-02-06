<?php

use App\Http\Controllers\BeverageController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

//disable the following auth routes.
Auth::routes(['register' => false], ['reset' => false], ['confirm' => false], ['verify' => false]);


Route::get('/menu/beverages', [BeverageController::class, 'index'])->name('menu.beverages');
Route::get('/menu/dishes', [DishController::class, 'index'])->name('menu.dishes');



//Auth routes
Route::group(['middleware' => 'auth'], function(){

    //dashboard routes
    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('/' , function(){
            return view('welcome');
        })->name('dashboard');


        Route::get('/{any}', function(){
            return view('welcome');
        })->where('any', '.*');
    });




});



