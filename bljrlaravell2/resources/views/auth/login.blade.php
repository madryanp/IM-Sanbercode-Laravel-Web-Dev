@extends('layout.master')
@section('title')
     Login
@endsection

@section('content')

<form action="/login" method="POST">
    
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
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
 
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection