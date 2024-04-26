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
        return response()->json('No Books Yet');
    }

}
