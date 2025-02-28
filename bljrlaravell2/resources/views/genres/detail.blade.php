@extends('layout.master')
@section('title')
    detail genres
@endsection

@section('content')


<h1 class="text-primary">{{$genres->name}}</h1>
<p>{{$genres->description}}</p>

<a href="/genres" class="btn btn-secondary btn-sm">Kembali</a>
@endsection