<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TecGram</title>

        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        @stack('style')

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-300">
        @auth
        @include('layouts.muro')
    @endauth

    @guest
        @include('layouts.Menu') {{-- TODO Para meter el contenido de un archivo sin section o extends, es @include --}}
    @endguest

        <main class = "container mx-auto mt-10">
            <h1 class = "font-black text-center text-2xl mb-10">@yield('titulo')</h1>
        <p class="text-center">@yield('contenido')</p>
        </main>

        <footer class="mt-4 text-center text-gray-800 font-bold p-5">
            {{-- helpers --}}
            TecGram - Todos los derechos reservados - {{now()->year}}
        </footer>
    </body>
</html>