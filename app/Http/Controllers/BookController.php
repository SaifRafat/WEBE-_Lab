<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): string
    {
        $books = Book::whereBetween('price', [10, 30])
            ->orderBy('price')
            ->get();
        return view("books.index")->with("books", $books);
    }
}
