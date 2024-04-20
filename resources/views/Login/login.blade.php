<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('login')}}">
        @csrf
        <label>Enter the username </label>
        <input type="text" name="email">
        <br>
        <label>Enter the password</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
    <a href="{{route('register')}}">Register user </a>
</body>

</html>