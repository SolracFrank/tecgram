@extends('layouts.app')

@section('titulo')
    Iniciar sesion
@endsection

@section('contenido')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class = "rounded-full" src="{{ asset('img/imagen.jpg')}}" alt="">
        </div>
        <div class="w-4/12 bg-white p-5 rounded-lg shadow-lg"">
            <form action="{{route('login.store')}}" method="POST">
                @csrf

                @if (session('mensaje'))
                    <p class="text-red-700 my-2">{{session('mensaje')}}</p>
                @endif

                <div class="mb-5">
                    <label class="block text-black-700 font-bold uppercase"for="username">Username</label>
                    @error('username')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input class="mb-4 border p-1 w-full rounded-lg @error('username') border-red-700" @enderror type="text" id="username" name="username" value="{{old('username')}}">
                </div>

                <div class="mb-5">
                    <label class="block text-black-700 font-bold uppercase"for="password">Password</label>
                    @error('password')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input type="password" class="mb-4 border p-1 w-full rounded-lg @error('password') border-red-700" @enderror id="password" name="password">

                    <div class="mb-3">
                        <input type="checkbox" name="remember" id="remember">
                        <label class="text-gray-700" for="remember">Recordar</label>
                        
                    </div>
                </div>

                <input class="cursor-pointer hover:bg-sky-700 w-full rounded-lg bg-sky-600 text-white p-1 font-bold " type="submit" value="Iniciar Sesion">

            </form>
        </div>
    </div>
@endsection