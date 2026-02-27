<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Products</h1>
    <a href="{{ route("products.form") }}">Create Product</a>
    {{-- <ul> --}}
        @foreach ($products as $product)
            {{-- <li>{{ $product->name }} - {{ $product->price }}</li> --}}
            <h1>product name {{ $product->name }}</h1>
            <h2>product price {{ $product->price }}</h2>
            <p>product description {{ $product->description }}</p>
            {{-- <a href="{{ route("products.form") }}">Edit</a> --}}
            <a href="{{ route("products.delete" , $product->id) }}">Delete</a>
            <a href="{{ route("products.edit" , $product->id) }}">Edit</a>
            <h3>--------------------------</h3>
        @endforeach
    {{-- </ul> --}}
    
</body>
</html>