<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

class AdminController extends Controller
{
    //
    public function __contruct(){
        $this->middleware('auth');
    }

    public function books(){
        $user = Auth::user();
        $books = Book::all();
        return view('book',compact('user','books'));
    }
}
