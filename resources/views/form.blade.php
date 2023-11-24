<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
  <form action="{{url('/')}}/register" method="post">
    @csrf
    <h1 for="exampleInputEmail1" class="form-label" >Registration</h1>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="type" class="form-control" name="name"  value="{{old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="text-danger">
      @error('name')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="text-danger">
      @error('email')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <span class="text-danger">
      @error('password')
      {{$message}}
      @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
    <span class="text-danger">
      @error('cpassword')
      {{$message}}
      @enderror
    </span>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
