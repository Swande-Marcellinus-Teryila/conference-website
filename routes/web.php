<?php
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactinfoController;
use App\Http\Controllers\UsersController;



/*
Route::get('mycacheamc', function () {
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    return "cache cleared";
  
});  */
Route::get('/', function () {
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('conference_impact', function () {
    return view('conference_impact');
})->name('conference_impact');


Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact',[ContactinfoController::class,'create'])->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('admin/index',[AdminController::class,'index'])->name('admin/')->middleware('is_admin');
Route::get('admin/books',[BookController::class,'index'])->name('admin/books')->middleware('is_admin');
Route::post('admin/books',[BookController::class,'store'])->name('admin/books')->middleware('is_admin');
Route::delete('admin/books/{id}/',[BookController::class,'destroy'])->name('admin/books/{id}')->middleware('is_admin');
Route::get('admin/books/{id}',[BookController::class,'store'])->name('admin/books/{id}')->middleware('is_admin');


/** routes for particpants /admin/ */
Route::get('admin/participants',[UsersController::class,'index'])->name('admin/participants')->middleware('is_admin');
//Route::post('admin/participants',[UsersController::class,'store'])->name('admin/participants')->middleware('is_admin');
Route::delete('admin/participants/{id}/',[UsersController::class,'destroy'])->name('admin/participants/{id}')->middleware('is_admin');
Route::get('admin/participants/{id}',[UsersController::class,'store'])->name('admin/participants/{id}')->middleware('is_admin');



Route::get('admin/index',[AdminController::class,'index'])->name('admin/')->middleware('is_admin');
Route::get('admin/audios',[AudioController::class,'index'])->name('admin/audios')->middleware('is_admin');
Route::post('admin/audios',[AudioController::class,'store'])->name('admin/audios')->middleware('is_admin');
Route::delete('admin/audios/{id}/',[AudioController::class,'destroy'])->name('admin/audios/{id}')->middleware('is_admin');
Route::get('admin/audios/{id}',[AudioController::class,'store'])->name('admin/audios/{id}')->middleware('is_admin');


require __DIR__.'/auth.php';
