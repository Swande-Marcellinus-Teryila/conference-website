<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Carbon;


class AdminController extends Controller
{
    public function index(){
        $userstoday = User::whereDate('created_at',Carbon::today())->get();
        $totalusers = User::where('userlevel','!=',1);
        $hotels = Hotel::Where('id','!=',5);
        $books = Book::all();
        return view('admin.index',
        ['userstoday'=>$userstoday,
        'total_users'=>$totalusers,
        'hotels'=>$hotels,
        'books'=>$books]);
    }
}