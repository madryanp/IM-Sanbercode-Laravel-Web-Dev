@extends('layout.master')
@section('title')
    Detail Books
@endsection

@section('content')

    <img src="{{asset('image/'. $books->image)}}" width="100%" alt="">
    <h1 class="text-primary">{{$books->title}}</h1>
    <p class="mt-5">{{$books->summary}}</p>
    <hr>

    <h1>list Komentar</h1>
    @forelse ($books->comments as $item)  

    <div class="card my-3">
        <div class="card-header">
            {{$item->owner->name}}
        </div>
        <div class="card-body">
           
            <p class="card-text">{{$item->sumary}}</p>
            
        </div>
    </div>
  
    @empty
        <h4>Tidak ada komentar</h4>
    @endforelse
   
    <hr>

    <h3>Buat Komentar</h3>
    @auth

    <form action="/comments/{{$books->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
   
        <div class="mb-3">
            <textarea name="sumary" class="form-control" placeholder="isi Komentar..." cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Komentar</button>
    </form>

    <a href="/books" class="btn btn-secondary btn-sm">Kembali</a>

    @endauth
@endsection 