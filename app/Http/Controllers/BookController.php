<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view("books.index")->with("books", $books);
    }
    public function show($books)
    {
         $book = Book::find($books);
        return view("books.show")->with("book", $book);
    }

    public function create()
    {
        return view("books.create");
    }

    public function store(Request $request)
    {
        $rules = [
            "title" => "required",
            "author" => "required",
            "isbn" => "required|max:13",
            "stock" => "required|numeric|integer|gte:0",
            "price" => "required|numeric|integer|gt:0",
        ];

        $request->validate($rules);
        dd($request->all());

        Book::create($request->all());
        return redirect()->route("books.index");
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route("books.index");
    }
}
