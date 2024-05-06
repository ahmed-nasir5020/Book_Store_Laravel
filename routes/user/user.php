<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegesterController;

/*
|--------------------------------------------------------------------------
| user Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "user" middleware group. Make something great!
|
*/
    /*
|--------------------------------------------------------------------------
| login
|--------------------------------------------------------------------------
*/
Route::group([
    
    'controller'=>LoginController::class,
    'name'=>'user',
    
],function () {
     
Route::post('login','login')->name('user.login');

});
    /*
|--------------------------------------------------------------------------
| Regester
|--------------------------------------------------------------------------
*/
Route::group([
    
    'controller'=>RegesterController::class,
    'name'=>'user', 
    
],function () {
    
    Route::post('Regester','Regester')->name('user.Regester');

});
    /*
|--------------------------------------------------------------------------
| All-Route_Action
|--------------------------------------------------------------------------
*/
Route::group([
    
    'controller'=>UserController::class,
    'name'=>'user',
    'middleware'=> ['web','auth:web']

],function () {

    // show-all-books 
    Route::get('index','index')->name('index');
    //create-new-book
    Route::post('create','create')->name('create');
     //show-book 
    Route::get('show/{user_id}','myBook')->name('show');
     //edite-book  
    Route::post('edite/{id}','edite')->name('edite');
     //delete-book    
     Route::post('delete/{id}','delete')->name('delete');

});
    



