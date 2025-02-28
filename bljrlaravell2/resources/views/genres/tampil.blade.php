@extends('layout.master')
@section('title')
    tampil genres
@endsection

@section('content')
<a href="/genres/create" class="btn btn-primary my-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
   
    </tr>
  </thead>
  <tbody>

    @forelse ($genres as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>
                
                <form action="/genres/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/genres/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/genres/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
     
        </tr>
    @empty
        <tr>
            <td>Tidak ada genres</td>
        </tr>
    @endforelse
    
 
    
  </tbody>
</table>
@endsection