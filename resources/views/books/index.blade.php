<htm>
    <head>
        <title>Books</title>
    </head>
    <body>
        <h1>Books</h1>
        <ul>
            @foreach ($books as $book)
                <li>{{ $book->title }}, {{$book->price}}</li>
            @endforeach
        </ul>
    </body>