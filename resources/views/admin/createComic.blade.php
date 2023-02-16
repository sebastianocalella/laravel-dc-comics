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
            <div class="row justify-content-center">
                <div class="col-8 card p-5 mt-5">
                    @if ($errors->any())
                    <div class="col-12 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="col-12">
                        @isset($comic)
                            <form action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
                            @method('PUT')
                        @else
                            <form action="{{ route('admin.comics.store') }}" method="POST">
                        @endisset
                            @csrf
                            <!--title-->
                            <div class="mb-3">
                                <label class="form-label">
                                    title:
                                </label>
                                <input type="text" class="form-control" name="title" value="{{old('title') ?? $comic->title ?? ''}}" >
                            </div>
                            <!--description-->
                            <div class="mb-3">
                                <label class="form-label">
                                    description:
                                </label>
                                <textarea name="description" class="form-control" cols="30" rows="10">{{old('description') ?? $comic->description ?? ''}}</textarea>
                            </div>
                            <!--thumb-->
                            <div class="mb-3">
                                <label class="form-label">
                                    thumb:
                                </label>
                                <input type="text" class="form-control" name="thumb" value="{{old('thumb') ?? $comic->thumb ?? ''}}">
                            </div>
                            <!--price-->
                            <div class="mb-3">
                                <label class="form-label">
                                    price:
                                </label>
                                <input type="text" class="form-control" name="price" value="{{old('price') ?? $comic->price ?? ''}}">
                            </div>
                            <!--series-->
                            <div class="mb-3">
                                <label class="form-label">
                                    series:
                                </label>
                                <input type="text" class="form-control" name="series" value="{{old('series') ?? $comic->series ?? ''}}">
                            </div>
                            <!--sale_date-->
                            <div class="mb-3">
                                <label class="form-label">
                                    sale_date:
                                </label>
                                <input type="text" class="form-control" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date ?? ''}}">
                            </div>
                            <!--type-->
                            <div class="mb-3">
                                <label class="form-label">
                                    type:
                                </label>
                                <input type="text" class="form-control" name="type" value="{{old('type') ?? $comic->type ?? ''}}">
                            </div>
                            @isset($comic)
                                <button type="submit" class="btn btn-warning">
                                    modify element
                                </button>
                            @else
                                <button type="submit" class="btn btn-primary">
                                    insert element
                                </button>
                            @endisset
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>