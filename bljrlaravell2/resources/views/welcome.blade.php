
@extends('layout.master')
@section('title')
    home
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@auth
    <h1>Selamat datang {{Auth()->user()->name}}
    @if (Auth()->user()->profile)
    {{Auth()->user()->profile && Auth()->user()->profile->age}}
    @else

    @endif
    
@endauth
<!-- Lorem
<ul>
    <li><a href="/register">Registrasi</a></li>
</ul> -->

@endsection


