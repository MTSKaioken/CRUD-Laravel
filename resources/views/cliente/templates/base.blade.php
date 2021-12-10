<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('cliente.templates._partials.navbar')
        @yield('conteudo')
        <div id="container">
        @include('cliente.templates._partials.footer')
        </div>
    </body>
</html>