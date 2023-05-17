@extends('layouts.app')

@section('titulo')
    Crear nueva entrada
@endsection

@push('styles')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<div class="md:flex md:items-center mx-5">
    <div class="md:w-1/2 pxs-10">
        <form method="POST" action="{{route('imagen.store')}}" id="dropzone" class="dropzone border-dashed border-2 w-full h-72 rounded flex flex-col justify-center items-center bg-transparent" enctype="multipart/form-data">
            @csrf
        </form>
    </div>    
    <div class="md:w-1/2 px-10 bg-white p-5 rounded-lg shadow-lg ml-2">
        <form action="{{route('muro.store')}}" method="POST">
            @csrf
            
            <div class="mb-5">
                
                <label class="block text-black-700 font-bold uppercase "for="titulo">Titulo</label>
                @error('titulo')
                    <p class="text-red-600 text-left">{{$message}}</p> 
                @enderror
                <input class="mb-4 border p-1 w-full rounded-lg @error('titulo') border-red-700" @enderror type="text" id="titulo" name="titulo" value="{{old('titulo')}}">
    
            </div>

            <div class="mb-5">
                
                <label class="block text-black-700 font-bold uppercase "for="descripcion">Descripcion</label>
                @error('descripcion')
                    <p class="text-red-600 text-left">{{$message}}</p> 
                @enderror
                <input class="mb-4 border p-1 w-full rounded-lg @error('descripcion') border-red-700" @enderror type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
                
            </div>

            <div class="mb-5">
                <input type="hidden" name="imagen" value="{{old('imagen')}}">
                @error('imagen')
                    <p class="text-red-700 my-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <input class="cursor-pointer hover:bg-sky-700 w-full rounded-lg bg-sky-600 text-white p-1 font-bold " type="submit" value="Publicar">

        </form>
    </div>
    
</div>
@endsection