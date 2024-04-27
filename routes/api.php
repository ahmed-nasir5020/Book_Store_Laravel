<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

   // show-all-books 
   Route::get('user/allbook',[UserController::class,'index'])->name('user.all');
   //create-new-book
   Route::post('user/create',[UserController::class,'create'])->name('user.create');
    //show-book 
   Route::get('user/myBook/{user_id}',[UserController::class,'myBook'])->name('user.myBook');
    //edite-book  
   Route::post('user/edite/{id}',[UserController::class,'edite'])->name('user.edite');
    //delete-book    
   Route::post('user/delete/{id}',[UserController::class,'delete'])->name('user.delete');


