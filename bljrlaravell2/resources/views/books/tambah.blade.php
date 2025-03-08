@extends('layout.master')
@section('title')
    Tambah Books
@endsection

@section('content')

<form action="/books" method="POST" enctype="multipart/form-data">
    
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
    <input type="text" name="title" class="form-control">
 
  </div>

  <div class="mb-3">
    <label class="form-label">Summary buku</label>
    <textarea name="summary" class="form-control" cols="30" rows="10"></textarea>
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
            <option value="{{$item->id}}">{{$item->name}}</option>
        @empty
            <option value="">Tidak ada Genres</option>
        @endforelse    
     </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection