@extends('layout')


@section('page-content')
<div class="container">
<a class="btn btn-success" href="{{ route('books.index') }}">Back to Book List</a>
    <h1>Book Details</h1>
    <table class="table table-striped table-bodered">
        <tr>
            <th>Title</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $book->isbn }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $book->stock }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->price }}</td>
        </tr>
    </table>


</div>
 

@endsection()