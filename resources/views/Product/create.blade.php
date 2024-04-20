<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create Product Page</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        <label>Ente the productname </label>
        <input type="text" name="name">
        <br>
        <label> ENter the product price </label>
        <input type="number" name="price">
        <br>
        <label>Enter the category</label>
        <input type="checkbox" name="category[]" value="Goods">Goods
        <input type="checkbox" name="category[]" value="Homemade">Homemade
        <input type="checkbox" name="category[]" value="used">Used
        <input type="checkbox" name="category[]" value="Cutlary">Cutlary
        <input type="checkbox" name="category[]" value="Funiture">Furniture
        <br>
        <label>ENterr the payment method</label>
        <input type="radio" name="delivery" value="online" checked> online
        <br>
        <input type="radio" name="delivery" value="offline" checked> offline
        <br> 
        <input type="radio" name="delivery" value="COD" checked> COD
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>