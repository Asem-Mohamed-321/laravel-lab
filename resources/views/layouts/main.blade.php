<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>
<body>
<p class=" bg-red-700">The quick brown fox...</p>

    <div>
        @section('navbar')
            @include('includes.navbar')
        @show
    </div>
    <div>
        <h2>@yield('content')</h2>
        
    </div>
</body>
</html>