<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/


function login(Request $request){
    //validadtion

    //get data form db
    $admin = request(["email","password"]);
    if(Auth::guard('admin')->attempt($admin)){
        return response()->json(['msg'=>'you are login Dashboard']);
    }else{
        return response()->json(['msg'=>'you are not login Dashboard']);

    }
}
}
