<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Name :{{ $name }}</h1>
    <h1>Age: {{ $age }}</h1>
    @if ($age > 30)
        <p>Condition is true</p>
    @else
        <p>Condition is false</p>

    @endif


    @foreach ($posts as $post)
    <p>{{ $post["id"] }}</p>
    <p>{{ $post["title"] }}</p>
    <p>{{ $post["content"] }}</p>

    @endforeach

</body>

</html>