<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HWL</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="content">
        <div class="title m-b-md">
            <span>Hello World of</span> Laravel
        </div>
        <div class="under">And hello to you as well, my dear user
            <span class="user">{{ $user }}</span>
        </div>
        <ul class="links">
            <li>
                <a href="{{ route('documents') }}">Docs</a>
            </li>
        </ul>
    </div>
</body>

</html>