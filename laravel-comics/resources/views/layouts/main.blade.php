<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC | @yield("title")</title>
</head>
<body>
    @include("partials.header",['links' => config('header_main_menu')])

        <main>
            @yield("contenuto")
        </main>

    @include("partials.footer",
    ['links' => config('header_main_menu'),
    'shop' => config('shop'),
    'dc' => config('dc'),
    'sites' => config('sites'),
    'socials' => config('socials')]
     )

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>