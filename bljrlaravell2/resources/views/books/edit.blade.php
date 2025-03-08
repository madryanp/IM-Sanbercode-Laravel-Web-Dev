@extends('layout.master')
@section('title')
    Edit Books
@endsection

@section('content')

<form action="/books/{{$books->id}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul buku</label>
    <input type="text" name="title" value="{{$books->title}}" class="form-control">
 
  </div>

  <div class="mb-3">
    <label class="form-label">Summary buku</label>
    <textarea name="summary" class="form-control" cols="30" rows="10">{{$books->summary}}</textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">stok buku</label>
    <input type="text" name="stok" class="form-control">
  </div>

  <div class="mb-3">
     <label class="form-label">Genres</label>
     <select name="genre_id" id="" class="form-control">
        <option value="">--pilih genre--</option>

        @forelse ($genres as $item)
            @if ($item->id === $books->genre_id)
                <option value="{{$item->id}}" selected>{{$item->name}}</option>

            @else
            <option value="{{$item->id}}">{{$item->name}}</option> 
            @endif
          
        @empty
            <option value="">Tidak ada Genres</option>
        @endforelse    
     </select>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection