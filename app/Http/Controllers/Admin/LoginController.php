<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
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
    //get data form db
    $admin = request(["email","password"]);
    if(Auth::guard('admin')->attempt($admin)){
        // return response()->json(['msg'=>'you are login Dashboard']);
        return redirect()->action('Dashboard');
    }else{
        // return response()->json(['msg'=>'you are not login Dashboard']);
        return redirect()->route('admin/loginform');

    }
}
}
