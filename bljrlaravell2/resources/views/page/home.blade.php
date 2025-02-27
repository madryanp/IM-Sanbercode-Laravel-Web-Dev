
@extends('layout.master')
@section('title')
    Dashboard 
@endsection

@section('content')
   <h1>selamat datang {{$firstname}} {{$lastname}} </h1>
   <P>{{$bio}}</P>
   
   @endsection