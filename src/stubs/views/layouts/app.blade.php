<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script>
            window.Laravel = {
                appName: '{{ config('app.name') }}'
            }
        </script>
    </head>
    <body class="antialiased bg-grey-lightest font-sans leading-tight text-black">
        <div id="app" v-cloak>
            @yield('body')
        </div>
        @stack('beforeScripts')
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('afterScripts')
    </body>
</html>