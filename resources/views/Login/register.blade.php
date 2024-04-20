<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{route('registeruser')}}">
        @csrf
        <label>
            Enter the name
        </label>
        <input type="text" name="name">
        @error('username')
        <div>{{ $message }}</div>
        @enderror
        <br>
        <br>
        <label>Enter the email</label>
        <input type="email" name="email">
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <br>
        <br>
        <label>Enter the password</label>
        <input type="password" name="password">
        @error('password')
        <div>{{ $message }}</div>
        @enderror
        <br>
        <br>
        <label>Enter the password</label>
        <input type="Radio" name="Gender" value="Male" checked> Male &nbsp;&nbsp;
        <input type="Radio" name="Gender" value="FeMale" checked> FeMale
        @error('Gender')
        <div>{{ $message }}</div>
        @enderror
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>