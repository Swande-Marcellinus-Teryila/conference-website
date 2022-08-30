<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('userlevel','!=',1)->get();
        return view('admin/participants', ['participants' => $users]);
    }

    public function store(Request $request)
    {
 
   
       // return redirect()->back()->with('status', 'user added successful');
    }


    public function update(Request $request ,$id)
    {/* 
        $updateuser = user::find($id);
        $updateuser-> */
        return redirect()->back()->with('status', 'user updated successfully');
    }


    public function destroy($id)
    {
        $deluser = User::find($id);
        $deluser->delete();
        return redirect()->back()->with('status', 'user deleted successfully');
    }
}
