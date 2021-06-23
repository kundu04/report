<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UserExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
class reportController extends Controller
{
    public function index(){
       $users=User::get();
     
        return view('welcome',compact('users'));
    }
    public function export(){
        return Excel::download(new UserExport, 'report.xlsx');

    }
    
    public function import(Request $request){
        
        Excel::import(new UsersImport, $request->file);
        return back()->with('message', 'All good!');

    }

   
    public function ss(){
        return view('ss');
    }
    public function aa(){
        return view('aa');
    }
}
