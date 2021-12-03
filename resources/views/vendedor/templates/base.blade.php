<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
        nav .w-5{
            width: 15px;
        }
        nav a {
            text-decoration: none;
            color: gray;
        }
        nav a:hover{
            color: black;
        }
        </style>
    </head>
    <body style="margin: 0px; padding: 0px;">
        @include('vendedor.templates._partials.navbar')
        @yield('conteudo')

        @include('vendedor.templates._partials.footer')
    </body>
</html>