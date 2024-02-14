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
        <h1 class="text-center">Lista Film</h1>
        <div class="col-12 col-md-4 col-lg-3" >
            
            <div class="card">
               {{ $movies["title"]}}
            </div>
        </div>
    </div>
</div>
</body>

</html>