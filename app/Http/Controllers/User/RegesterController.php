<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class RegesterController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Regester
|--------------------------------------------------------------------------
*/


function Regester(UserRequest $request){

  $user['name'] = $request->name;
  $user['email'] = $request->email;
  $user['password'] = bcrypt($request->password);
  
  //save store in db 
  User::save($user);

  // return response()->json(['msg'=>'user are regester']);
  return redirect()->route('login')->with(['msg'=>'user are regester']);

}

}
