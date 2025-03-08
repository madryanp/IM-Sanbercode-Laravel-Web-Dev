<!doctype html>

<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<title>Create Data</title>

</head>

<body>

<h2>Create Data Game</h2>

<form action="/game" method="POST">
    
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
    <label for="exampleInputEmail1" class="form-label">game name</label>
    <input type="text" name="name" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">game gameplay</label>
    <input type="text" name="gameplay" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">game developer</label>
    <input type="text" name="developer" class="form-control">
 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">game year</label>
    <input type="text" name="year" class="form-control">
 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>