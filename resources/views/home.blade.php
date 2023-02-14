@extends('layouts.guest')

@section('main-content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="m-3">Our Comics:</h2>
            </div>
            <div class="comics-container container mb-5">
                <div class="row gy-3">
                    @foreach ($comics as $comic)
                        <div class="col-3">
                            <div class="my-card">
                                <div class="container-fluid">
                                    <img src="{{$comic['thumb']}}" alt="comic image" class="w-100">
                                    <p>{{$comic['title']}}</p>
                                </div>
                                <a href="{{route('comic.show', $comic->id)}}" class="btn btn-sm btn-primary mx-3 mb-2">info</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection