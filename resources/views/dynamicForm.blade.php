<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
  <form action="{{url('/')}}/dyregister" method="post">
  <div class="container">
    @csrf
    <div class="container align-items-center mt-5">
    
    <x-input type="text" name="name" label="Enter your name here"/>
    <!-- <span class="text-danger">
      @error("name")
      {{$message}}
      @enderror
    </span> -->
    <x-input type="email" name="email" label="Enter your email here"/>
    <!-- <span class="text-danger">
      @error("email")
      {{$message}}
      @enderror
    </span> -->
    <x-input type="text" name="sid" label="Enter Registration Number"/>
     <!-- <span class="text-danger">
      @error("email")
      {{$message}}
      @enderror
    </span> -->
    <x-input type="text" name="city" label="Enter your city here"/>
     <!-- <span class="text-danger">
      @error("email")
      {{$message}}
      @enderror
    </span> -->
    <x-input type="password" name="password" label="Password"/>
    <x-input type="password" name="cpassword" label="Confirm Password"/>
    <x-input type="radio" name="gender" label="Male" id="flexRadioDefault1" />
    <x-input type="radio" name="gender" label="Female" id="flexRadioDefault2"/>
    <x-input type="radio" name="gender" label="Other" id="flexRadioDefault3"/>

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
