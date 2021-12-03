<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>
    <body style="margin: 0px; padding: 0px;">
        @include('cliente.templates._partials.navbar')
        @yield('conteudo')
        <div style="margin-bottom: 470px">
        </div>
        @include('cliente.templates._partials.footer')
    </body>
</html>