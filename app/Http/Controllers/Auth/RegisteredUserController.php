<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Hotel;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   $hotels = Hotel::all();
        return view('auth.register',['hotels'=>$hotels]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => ['required'],
            'email'=>'string|email',
            'phone'=>'max:11|min:5'
        ]);
        if(!empty($request->hotel_id)){
            $hotel_id =$request->hotel_id;
        }else{
            $hotel_id=5;
        }
        if(User::where('phone','=',$request->phone)->exists()){
            return redirect()->back()->with('status',"You have already registered for AMC ".date("Y")."!");
        }

        if(User::where('email','=',$request->email)->exists()){
            return redirect()->back()->with('status',"You have already registered for AMC ".date("Y")."!");
        }

        if(User::where('password','=',$request->password)->exists()){
            if(User::where('phone','=',$request->phone,'or','email','=',$request->email)->exists()){
                return redirect()->back()->with("status","oop,Sorry something went wrong, please try again");
            }
        }
        $user = User::create([
            'sname'=>ucfirst($request->sname),
             'fname'=>ucfirst($request->fname), 
             'othernames'=>ucfirst($request->othernames), 
             'gender'=>$request->gender, 
             'age'=>$request->age, 
             'email'=>$request->email,
             'phone'=>$request->phone,
             'title'=>$request->title, 
             'denomination'=>$request->deno, 
            'state'=>$request->state,
            'country'=>$request->country, 
            'userlevel'=>'0',
            'password' => Hash::make($request->password),
            'hotel_id' =>$hotel_id
        ]);

        event(new Registered($user));

        /*checking whether email or phone number exists already */
       
        Auth::login($user);
       $hotel =User::findOrFail(auth()->user()->id)->Hotel;
    
       return redirect(RouteServiceProvider::HOME)->with('password',$request->password);
}
}