<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Welcome, {!! $name  ?? "Guest"!!}
   </h1>

    @if($name==" ")
    
        {{ "name is not empty"}}
    
    @else
        {{"name is empty"}};
     
    @endif
</body>
</html>