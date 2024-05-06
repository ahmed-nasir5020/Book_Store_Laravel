<?php 


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| login
|--------------------------------------------------------------------------
*/
Route::group([
    
    'controller'=>LoginController::class,
    
    
    
],function () {
    
    Route::get('loginform','loginForm')->name('admin/loginform');
    
});

Route::post('login',[LoginController::class,'adminLogin'])->name('admin/login');
/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::group([
    
    'controller'=>AdminController::class,
    'name'=>'admin',
    'middleware'=> ['auth:admin']
    
],function () {
     
    Route::get('Dashboard','Dashboard')->name('Dashboard');
    
});

    /*
    |--------------------------------------------------------------------------
    | test
    |--------------------------------------------------------------------------
    */

// Route::get('loginForm',[LoginController::class,'loginForm'])->name('loginForm');
// Route::get('Dashboard',[AdminController::class,'Dashboard'])->name('Dashboard');