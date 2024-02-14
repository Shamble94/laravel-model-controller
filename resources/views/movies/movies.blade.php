<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>


<div class="container">
    <div class="row">
        <h1 class="text-center m-5">Lista Film</h1>
        @foreach ($movies as $movie)
        <div class="col-12 col-md-4 col-lg-4 my-4" >
            <div class="card m-3 border-0">
                Titolo: <a href="{{ route("movies_detail", ["id" => $movie->id]) }}"><h1> {{ $movie->title }}</h1></a>
                
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>

</html>