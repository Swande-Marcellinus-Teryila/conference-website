<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactinfo;

class ContactinfoController extends Controller
{
    
    function create(Request $request){
        $contact = new Contactinfo();
        $contact->fullname =$request->fullname;
        $contact->message = $request->message;
        $contact->email =$request->email;
        $contact->save();
        return redirect()->back()->with('status','Message sent successfully');
    }
    
}
