<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/


function login(UserRequest $request){
    
    $user = request(["email","password"]);
    if(Auth::guard('web')->attempt($user)){
        return response()->json(['msg'=>'you are login']);
    }else{
        return response()->json(['msg'=>'you are not login']);
    }
}
}
