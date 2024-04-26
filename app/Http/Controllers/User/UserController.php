<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Egulias\EmailValidator\Result\Reason\Reason;

class UserController extends Controller
{
    // show-all create update delete show-one
    function index(){
        //get all books form db 
        $allbooks = Book::all(['name','description','price']);
        //dispay book if not empty 
        if(!empty($allbooks)){
         return response()->json($allbooks);
        }
        else{
            return response()->json('No Books Yet');
        }
    }

    function create(Request $request){
     //validate

     //sotre in db
     $data =['name'=>$request->name,'description'=>$request->description,'price'=>$request->price,'user_id'=>$request->user_id];
     Book::create($data);
    
     //return message sucess or fail
     return response()->json('created sucsessfully ');
    }

    function myBook($user_id){
        $book = Book::where('user_id',$user_id)->first();   
        if(!empty($book)){
            return response()->json($book);
        }
        else{
            return response()->json('No Book By This Id');
        }

    }

}
