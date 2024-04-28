<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
/*
|--------------------------------------------------------------------------
| show-all-books 
|--------------------------------------------------------------------------
*/
    function index(){
        //get all books form db 
        $allbooks = Book::all(['name','description','price']);
        //dispay book if not empty 
        if(!empty($allbooks)){
         return response()->json(['data'=>$allbooks]);
        }
        else{
            return response()->json(['msg'=>'No Books Yet']);
        }
    }

/*
|--------------------------------------------------------------------------
| create-new-book 
|--------------------------------------------------------------------------
*/
     
    function create(Request $request){
     //validate

     //sotre in db
     $data =['name'=>$request->name,'description'=>$request->description,'price'=>$request->price,'user_id'=>$request->user_id];
     Book::create($data);
    
     //return message sucess or fail
     return response()->json(['msg'=>'created sucsessfully']);
    //  return response()->json(['msg'=>'created fail']);
    }


/*
|--------------------------------------------------------------------------
| show-book
|--------------------------------------------------------------------------
*/
     
    function myBook($user_id){
        $book = Book::where('user_id',$user_id)->get();   
        if(!empty($book)){
            return response()->json($book);
        }
        else{
            return response()->json(['msg'=>'No Book By This Id']);
        }

    }

/*
|--------------------------------------------------------------------------
| edite-book
|--------------------------------------------------------------------------
*/
    
    function edite(Request $request,$id){
           //validation

           //get data from db 
           //   $data = Book::all();
           //assing old data by new data 
           $data['name'] = $request->name;
           $data['description'] = $request->description;
           $data['price'] = $request->price;
          //update data in db
          Book::where(['id'=>$id])->update($data);
          //out
          return response()->json(['msg'=> 'update sucess']);
        //   return response()->json(['msg'=> 'update fail']);
    }

/*
|--------------------------------------------------------------------------
| delete-book 
|--------------------------------------------------------------------------
*/
     
    function delete($id){
          Book::where('id',$id)->delete();
         return response()->json(['msg'=> 'delete sucess']);
        // return response()->json(['msg'=> 'id not found']);
    }

}
