<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;

class reportController extends Controller
{
    public function index(){
       $users=User::get();
     
        return view('welcome',compact('users'));
    }
}
