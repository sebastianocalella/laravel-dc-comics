@extends('layouts.app')

@section('main-content')
    <section class="comic">
        <div class="container">
            <div class="row position-relative">
                <div class="position-absolute my-cover">
                    <img src="{{$comics[0]['thumb']}}" alt="">
                </div>
                <div class="col-9">
                    <h2>
                        {{$comics[0]["title"]}}
                    </h2>
                    <div class="col-12 price-container">
                        <p>U. S. price: {{$comics[0]["price"]}}</p>
                    </div>
                    <p>
                        {{$comics[0]["description"]}}
                    </p>
                </div>
                <div class="col-3">
                    <img src="{{$comics[0]['thumb']}}" alt="advertisment">
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 px-3">
                            <h3>Talent</h3>
                            <div class="row">
                                <hr>
                                <div class="col-4">
                                    <p>art by:</p>
                                </div>
                                <div class="col-8">
                                    <p>
                                        @foreach($comics[0]["artists"] as $artist)
                                            {{$artist.', '}}
                                        @endforeach
                                    </p>
                                </div>
                                <hr>
                                <div class="col-4">
                                    <p>written by:</p>
                                </div>
                                <div class="col-8">
                                    <p>
                                        @foreach($comics[0]["writers"] as $writer)
                                            {{$writer.', '}}
                                        @endforeach
                                    </p>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-6 px-3">
                            <h3>Specs</h3>
                            <div class="row">
                                <hr>
                                <div class="col-4">
                                    <p>Series:</p>
                                </div>
                                <div class="col-8">
                                    <p>{{$comics[0]['series']}}</p>
                                </div>
                                <hr>
                                <div class="col-4">
                                    <p>U. S. Price:</p>
                                </div>
                                <div class="col-8">
                                    <p>{{$comics[0]['price']}}</p>
                                </div>
                                <hr>
                                <div class="col-4">
                                    <p>On Sale Date:</p>
                                </div>
                                <div class="col-8">
                                    <p>{{$comics[0]['sale_date']}}</p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
@endsection