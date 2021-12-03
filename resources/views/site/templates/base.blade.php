<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
    </head>
    <body style="margin: 0px; padding: 0px;">
        @include('site.templates._partials.navbar')
        @yield('conteudo')
        <div style="margin-bottom: 470px">
        </div>
        @include('site.templates._partials.footer')
    </body>
</html>