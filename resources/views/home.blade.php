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

    <main>
        <h1 class="text-center p-3">
            Welcome {{ $user['name'] }} {{ $user['surname'] }}
        </h1>
        <a class="d-flex justify-content-end me-3" href="contatti">Contact us</a>
    </main>

</body>

</html>