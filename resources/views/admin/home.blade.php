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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5">
                <h1 class="mb-4">Comics Admin Hompage</h1>
            </div>
            <div class="col">
                <a href="{{ route('admin.comics.create') }}" class="btn btn-primary btn-sm">add new comic</a>
            </div>
            @foreach ($comics as $comic)
                <div class="col-10">
                    <div class="row">
                        <div class="col-6">
                            <p>{{$comic->title}}</p>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-sm btn-primary" href="{{route('admin.comics.show', $comic->id)}}">show</a>
                            <a class="btn btn-sm btn-warning" href="{{route('admin.comics.edit', $comic)}}">edit</a>
                            <form 
                                class="d-inline delete-popup" 
                                action="{{ route('admin.comics.destroy', $comic->id) }}" 
                                method="POST"
                                data-element-name="{{$comic->title}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>

    @vite('resources/js/deleteElement.js')
</body>
</html>