@extends('layouts.app')

@section('main-content')
    <section class="comic">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h3>{{$comic->title}}</h3>
                </div>
                <div class="col-2">
                    <span>{{$comic->price}} &dollar;</span>
                </div>
                <div class="col-12">
                    <p>{{$comic->description}}</p>
                </div>
                <div class="col-12">
                    <p>series: {{$comic->series}}</p>
                </div>
                <div class="col-12">
                    <p>type: {{$comic->type}}</p>
                </div>
                <div class="col-12">
                    <p>sale date: {{$comic->sale_date}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection