@extends('layout.master')
@section('title')
     Register
@endsection

@section('content')

<form action="/register" method="POST">
    
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
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password Confirmation</label>
    <input type="password" name="password_confirmation" class="form-control">
 
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection