<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegesterController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Regester
|--------------------------------------------------------------------------
*/


function Regester(Request $request){
  //vaidation 

  $user['name'] = $request->name;
  $user['email'] = $request->email;
  $user['password'] = bcrypt($request->password);
  
  //save in db 
  User::save($user);

  return response()->json(['msg'=>'user are regester']);

}

}
