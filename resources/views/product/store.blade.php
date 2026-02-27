<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route("products.store") }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="number" name="price" placeholder="price">
        <textarea name="description" placeholder="description"></textarea>
        <button type="submit">Create</button>
    
</body>
</html>