<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    
    public function index()
    {
        return view('login');
    }
    public function store(Request $request){
        dd(auth()->attempt($request->only('sname', 'password')));
        if(auth()->attempt($request->only('sname', 'password')))
        {
         
            if (auth()->user()->userlevel == 1) {
                return redirect()->route('admin/');
            }else{
                return redirect()->route('dashboard/');
            }
        }else{
            return redirect()->route('login')->with('errormsg','Inavlid username or Password');
        }
          
    }
}
