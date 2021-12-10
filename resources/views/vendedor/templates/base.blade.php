<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('vendedor.templates._partials.navbar')
        <div id="container">
        @yield('conteudo')
        @include('vendedor.templates._partials.footer')
        </div>
    </body>
</html>