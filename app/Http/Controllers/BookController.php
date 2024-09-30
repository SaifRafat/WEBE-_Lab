<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): string
    {
        $books = Book::all();
        return view("books.index")->with("books", $books);
    }
}
