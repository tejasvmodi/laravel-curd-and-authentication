<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Product Page</h1>
    <form method="post" action="{{route('product.update',$product->id)}}">
        @csrf
        <label>Ente the productname </label>
        <input type="text" name="name" value="{{$product->name}}">
        <br>
        <label> ENter the product price </label>
        <input type="number" name="price" value="{{$product->price}}">
        <br>
        <label>Enter the category</label>
        <input type="checkbox" name="category[]" value="Goods" {{$product->category && strpos($product->category,'Goods')!==false ? 'checked' : ''}}>Goods
        <input type="checkbox" name="category[]" value="Homemade" {{$product->category && strpos($product->category,'Homemade')!==false ?'checked' : ''}}>Homemade
        <input type="checkbox" name="category[]" value="used" {{$product->category && strpos($product->category,'used')!==false ?'checked' : ''}}>Used
        <input type="checkbox" name="category[]" value="Cutlary" {{$product->category && strpos($product->category,'Cutlary')!==false ?'checked' : ''}}>Cutlary
        <input type="checkbox" name="category[]" value="Funiture" {{$product->category && strpos($product->category,'Funiture')!==false ?'checked' : ''}}>Furniture
        <br>
        <label>ENterr the payment method</label>
        <input type="radio" name="delivery" value="online"  {{$product->delivery && strpos($product->delivery,'online')!==false ?'checked' : ''}}> online
        <br>
        <input type="radio" name="delivery" value="offline" {{$product->delivery && strpos($product->delivery,'offline')!==false ?'checked' : ''}}> offline
        <br> 
        <input type="radio" name="delivery" value="COD" {{$product->delivery && strpos($product->delivery,'COD')!==false ?'checked' : ''}}> COD
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>