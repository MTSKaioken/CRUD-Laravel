<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('site.templates._partials.navbar')
        <div id="container">
        @yield('conteudo')
        @include('site.templates._partials.footer')
        </div>
    </body>
</html>