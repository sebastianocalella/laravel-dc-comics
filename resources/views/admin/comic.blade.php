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
    </body>
</html>