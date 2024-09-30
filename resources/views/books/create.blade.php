@extends('layout')

@section('page-content')

<a class="btn btn-primary" href="{{ route('books.index') }}">Back to Book List</a>
<h1>New Book</h1>

<form method="post" action="{{route('books.store')}}">

{{ csrf_field() }}
  <div class="mb-2">
    <label for="title" class="form-label"><strong>Title</strong></label>
    <input type="text" class="form-control" name="title" value="{{old('title')}}">
    <div> {{$errors->first('title')}}</div>
  </div>
  
  <div class="mb-2">
    <label for="author" class="form-label"><strong>Author Name</strong></label>
    <input type="text" class="form-control" name="author" value="{{old('author')}}">
    <div> {{$errors->first('author')}}</div>
  </div>

  <div class="mb-2">
    <label for="isbn" class="form-label"><strong>ISBN</strong></label>
    <input type="integer" class="form-control" name="isbn" value="{{old('isbn')}}">
    <div> {{$errors->first('isbn')}}</div>
  </div>

    <div class="mb-2">
        <label for="stock" class="form-label"><strong>Stock</strong></label>
        <input type="integer" class="form-control" name="stock" value="{{old('stock')}}">
        <div> {{$errors->first('stock')}}</div>
    </div>
    
  <div class="mb-2">
    <label for="price" class="form-label"><strong>Price</strong></label>
    <input type="integer" class="form-control" name="price" value="{{old('price')}}">
    <div> {{$errors->first('price')}}</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection