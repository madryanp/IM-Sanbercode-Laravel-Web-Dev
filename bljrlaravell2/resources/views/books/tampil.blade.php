@extends('layout.master')
@section('title')
    Tampil Books
@endsection

@section('content')

@auth
    @if (Auth()->user()->role === 'admin')
<a href="/books/create" class="btn btn-sm btn-primary my-3">Tambah</a>
    @endif
@endauth

<div class="row">
    @forelse ($books as $item)
    <div class="col-4">
        <div class="card">
            <img src="{{asset('image/'.$item->image)}}" height="300px" class="card-img-top" alt="...">
            <div class="card-body">
                <!-- View -->
                <h5 class="card-title">{{$item->title}}</h5>
                <span class="badge text-bg-secondary">{{$item->genres->name}}</span>
                <p class="card-text">{{Str::limit($item->summary, 90)}}</p>
                <!-- detail -->
                <div class="d-grid gap-2">
                <a href="/books/{{$item->id}}" class="btn btn-info">Read more</a>  
                </div>
                <!-- //edit -->
                @auth
                @if (Auth()->user()->role === 'admin')
                <div class="row mt-3">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <a href="/books/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                        </div>  
                    </div>

                <!-- delete -->
                <div class="col">
                        <form action="/books/{{$item->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <div class="d-grid gap-2">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                </div>

                </div>
                @endif
                @endauth

            </div>
        </div>
    </div>
    @empty
        <h1>buku tidak ada</h1>
    @endforelse
</div>

@endsection
