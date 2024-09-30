@extends('layout')

@section('page-content')

  <h1>Books</h1>
        <table class="table table-striped table-bodered" >
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>price</th>
                <th>Actions</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price }}</td>
                    <td><a href="{{ route('books.show', $book->id) }}">Details</a></td>
                </tr>
            @endforeach 
        </table>
        {{ $books->links() }}

@endsection

