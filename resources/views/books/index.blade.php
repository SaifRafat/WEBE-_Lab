@extends('layout')

@section('page-content')

<p class="text-end">
    <a class="btn btn-primary" href="{{route('books.create')}}">New Book++</a>
</p>


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
                    <td>
                        <a href="{{ route('books.show', $book->id) }}">Details</a>
                        <form method="post" action="{{ route('books.delete', $book->id) }}" onsubmit="return confirm('Sure')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">Delete</button></form>
                    </td>
                </tr>
            @endforeach 
        </table>
        {{ $books->links() }}

@endsection

