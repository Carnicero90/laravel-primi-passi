<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>docs</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="content">
        <h1>DOCSET</h1>
        <ul>
            <li>
                <details>

                    <summary><span class="sum-title">Where To Start</span></summary>
                    Learning a new framework can be daunting, but it's also exciting. To smooth your transition, we've attempted to create very clear, concise documentation for Laravel. Here are some recommendations for what to read first:
                </details>
            </li>
            <li>

                <details>
                    <summary>
                        <span class="sum-title">Laravel Philosophy</span>
                    </summary>
                    Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

                    Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

                    Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
                </details>
            </li>
            <li>

                <details>
                    <summary><span class="sum-title">Install</span>
                    </summary>
                    Run <code>curl -s "https://laravel.build/example-app" | bash</code> and some other stuff.
                </details>
            </li>
        </ul>
    </div>
</body>

</html>