<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto font-bold text-xl">
                <h1 class="flex items-center">
                    <img
                        src="/images/logo.png"
                        alt="Tweeto"
                        height="60"
                        width="60"
                        class="mr-2"
                    >
                    Tweeto
                </h1>
            </header>
        </section>

        {{ $slot }}
    </div>

    <script src="https://unpkg.com/turbolinks"></script>
</body>
</html>
