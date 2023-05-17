
@extends('layouts.app')

@section('titulo')
    Registrate en TecGram
@endsection

@section('contenido')
    <div class="flex justify-center items-center gap-10">
        <div class="w-4/12">
            <img class = "rounded-full" src="{{ asset('img/imagen.jpg')}}" alt="">
        </div>
        <div class="w-4/12 bg-white p-5 rounded-lg shadow-lg"">
            <form action="{{route('cuenta.store')}}" method="POST">
                @csrf
                
                <div class="mb-5">
                    
                    <label class="block text-black-700 font-bold uppercase"for="name">Nombre</label>
                    @error('name')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input class="mb-4 border p-1 w-full rounded-lg @error('name') border-red-700" @enderror type="text" id="name" name="name" value="{{old('name')}}">

                </div>

                <div class="mb-5">
                    <label class="block text-black-700 font-bold uppercase"for="username">Username</label>
                    @error('username')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input class="mb-4 border p-1 w-full rounded-lg @error('username') border-red-700" @enderror type="text" id="username" name="username" value="{{old('username')}}">
                </div>

                <div class="mb-5">
                    <label class="block text-black-700 font-bold uppercase"for="email">Email</label>
                    @error('email')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input class="mb-4 border p-1 w-full rounded-lg @error('email') border-red-700" @enderror type="text" id="email" name="email" value="{{old('email')}}">
                </div>

                <div class="mb-5">
                    <label class="block text-black-700 font-bold uppercase"for="password">Password</label>
                    @error('password')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input type="password" class="mb-4 border p-1 w-full rounded-lg @error('password') border-red-700" @enderror id="password" name="password">
                </div>

                <div class="mb-5">
                    <label class="block text-black-700 font-bold uppercase"for="password_confirmation">Repetir Password</label>
                    @error('password_confirmation')
                        <p class="text-red-600 text-left">{{$message}}</p> 
                    @enderror
                    <input type="password" class="mb-4 border p-1 w-full rounded-lg @error('password_confirmation') border-red-700" @enderror id="password_confirmation" name="password_confirmation">
                </div>

                <input class="cursor-pointer hover:bg-sky-700 w-full rounded-lg bg-sky-600 text-white p-1 font-bold " type="submit" value="Crear cuenta">

            </form>
        </div>
    </div>
@endsection
