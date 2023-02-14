<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <h1 class="mb-4">Comics Admin Hompage</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-10">
                    <div class="row">
                        <div class="col-6">
                            <p>{{$comic->title}}</p>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-sm btn-primary" href="{{route('admin.comics.show'), $comic->id}}">show</button>
                            <button class="btn btn-sm btn-warning">edit</button>
                            <button class="btn btn-sm btn-danger">delete</button>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>