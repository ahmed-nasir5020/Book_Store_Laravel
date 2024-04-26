<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Egulias\EmailValidator\Result\Reason\Reason;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // show all book
    public function index():Response{
     
     return response()->json([]);
    }
}
