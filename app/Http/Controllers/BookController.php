<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('admin.books', ['books' => $books]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'string|required',
            'cover_page' => 'mimes:png,jpg,jpeg,PNG|required',
            'book_file' => 'mimes:pdf,txt,pdf|required'
        ]);
        $book = Book::create([
            'title' => $request->title,
            'authour' => $request->authour,
            'cover_page' => $request->file('cover_page')->store('books_cover_photo'),
            'book_file' => $request->file('book_file')->store('books')
        ]);
        return redirect()->back()->with('status', 'Book added successful');
    }


    public function update(Request $request ,$id)
    {/* 
        $updateBook = Book::find($id);
        $updateBook-> */
        return redirect()->back()->with('status', 'Book updated successfully');
    }


    public function destroy($id)
    {
        $delBook = Book::find($id);
        $delBook->delete();
        return redirect()->back()->with('status', 'Book deleted successfully');
    }
    
}
