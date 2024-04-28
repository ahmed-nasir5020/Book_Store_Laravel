<?php

namespace App\Http\Controllers\User;

use App\Models\User;
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
    // $user = User::where("email", $request->email)->first();
    $user = request(["email","password"]);
    if(Auth::guard('web')->attempt($user)){
        return response()->json(['msg'=>'you are login']);
    }else{
        return response()->json(['msg'=>'you are not login']);

    }
}


}
