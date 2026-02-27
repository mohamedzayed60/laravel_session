<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route("products.update" , $product->id) }}" method="post">
        @csrf
        {{-- @method("PUT") --}}
        <input type="text" name="name" placeholder="name" value="{{ $product->name }}">
        <input type="number" name="price" placeholder="price" value="{{ $product->price }}">
        <textarea name="description" placeholder="description">{{ $product->description }}</textarea>
        <button type="submit">Update</button>
 
    
</body>
</html>