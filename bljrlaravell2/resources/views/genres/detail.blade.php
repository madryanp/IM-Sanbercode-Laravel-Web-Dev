@extends('layout.master')
@section('title')
    detail genres
@endsection

@section('content')


<h1 class="text-primary">{{$genres->name}}</h1>
<p>{{$genres->description}}</p>

<hr>
<div class="row">
@forelse ($genres->Books as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{asset('image/'.$item->image)}}" height="300px" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- View -->
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{Str::limit($item->summary, 90)}}</p>
                    <!-- detail -->
                    <div class="d-grid gap-2">
                    <a href="/books/{{$item->id}}" class="btn btn-info">Read more</a>  
                    </div>
                   

                </div>
            </div>
        </div>
      
    @empty
        <h1>Tidak ada Postingan di genre ini</h1>
@endforelse
</div>
<a href="/genres" class="btn btn-secondary btn-sm my-3">Kembali</a>
@endsection