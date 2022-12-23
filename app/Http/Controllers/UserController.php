<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Book;

class UserController extends Controller
{
    //
    public function book()
    {
        $user = Auth::user();
        $books = Book::all();
        return view('book', compact('user','books'));
    }
}
