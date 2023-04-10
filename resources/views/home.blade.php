@extends('layouts.plantilla')

@section('title', 'Monstruo Creativo | Home')

@section('welcome')
    <div class="text-zinc-600 text-center">
        <h1 class="text-2xl sm:text-4xl lg:text-8xl">Monstruo Creativo App</h1><br>
        <h2 class="text-1xl sm:text-2xl lg:text-4xl">Somos tu mejor aliado digital</h2><br>
        <a href="{{route('login.index')}}" class="w-1/2 justify-center rounded-md bg-indigo-600 text-teal-50 py-2 px-3">Iniciar Sesión</a>
        {{-- <form action="">
            <button type="submit" class="w-1/2 justify-center rounded-md bg-indigo-600 text-teal-50 py-2 px-3">Iniciar Sesión</button>
        </form> --}}
        
    </div>
@endsection