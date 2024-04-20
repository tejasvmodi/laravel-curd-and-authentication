<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>View Product page</h1>
    <a href="{{route('Logout')}}">Logout</a>
    <a href="{{route('product.create')}}">Add Product</a>
    <table border="1">
        <thead>
            <tr>
                <td>name</td>
                <td>price</td>
                <td>category</td>
                <td>delivery</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach($product as $p)
            <tr>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->category}}</td>
                <td>{{$p->delivery}}</td>
                <td><a href="{{route('product.edit',$p->id)}}">Edit</a>
                <a href="{{route('product.delete',$p->id)}}">delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>