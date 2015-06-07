<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
<h1>This is about page. {{$name}}</h1>
@if ($name=='John') //this is offered in blade.
    <h5>Hi John</h5>
@else
    <h5>Else</h5>
@endif

{{--       @unless =>if !         --}}
</body>
</html>