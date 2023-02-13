@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>current series</p>
            </div>
            <div class="comics-container container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <a href="{{route('comic')}}">
                                <div class="my-card">
                                    <img src="{{$comic['thumb']}}" alt="comic image">
                                    <p>{{$comic['title']}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection