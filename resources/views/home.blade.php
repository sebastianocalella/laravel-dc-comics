<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>comics:</h1>
    @foreach ($comics as $comic)
        <h1>{{$comic->title}}</h1>
    @endforeach
</body>
</html>