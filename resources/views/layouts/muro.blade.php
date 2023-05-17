<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TecGram</title>
        @vite('resources/css/app.css')
    </head>
        <header class="bg-white p-5 shadow">
            <div class="container flex mx-auto justify-between items-center">
                <h1 class="text-3xl font-black">TecGram</h1>
                <nav class="flex items-center gap-2">
                    <a href="{{route('muro.create') }}" class="gap-2 bg-white border rounded font-bold cursor-pointer p-1">
                          Crear
                    </a>
                    <p class="font-bold">Perfil: </p>
                    <a href="{{route('muro.index',auth()->user()->username)}}">
                        <span class="font-bold text-gray-600 text-sm">
                            {{auth()->user()->username}}
                        </span>
                    </a>
                    <form action="{{route('logout.store')}}" method="post">
                        @csrf
                        <button class="font-bold uppercase text-gray-600 text-sm ml-7" type="submit" >Logout</button>
                    </form>
                </nav>
            </div>
        </header>
</html>