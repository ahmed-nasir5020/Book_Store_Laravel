<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
/*
|--------------------------------------------------------------------------
| Login-form
|--------------------------------------------------------------------------
*/


function loginForm(){
   return view("dashboard/Login");
}
/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/


function adminLogin(AdminRequest $request){
    //get data form
    $admin = request(["email","password"]);
    if(Auth::guard('admin')->attempt($admin)){
        return redirect()->route('Dashboard');
    }else{
        return redirect()->route('admin/loginform');

    }
}
}
