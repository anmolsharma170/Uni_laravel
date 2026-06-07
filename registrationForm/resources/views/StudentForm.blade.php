<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Registration Form</h2>
    @if(session('success'))
    <p> {{session('success')}} </p>
    @endif
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}  </li>
        @endforeach
    </ul>
    @endif
    <form action="/student/register" method="post">
    @csrf
    Name:
    <input type="text" name="name"><br><br>
    Email:
    <input type="text" name="email"><br><br>
    Age:
    <input type="text" name="age"><br><br>
    <button type="submit">Register</button>
    </form>
</body>
</html>