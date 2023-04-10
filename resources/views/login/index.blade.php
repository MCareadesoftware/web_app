@extends('layouts.plantilla_login')

@section('title', 'Monstruo Creativo | Login')

@section('welcome')
    <div class="text-center w-1/2 h-4/6 flex justify-center items-center rounded-xl shadow-lg shadow-stone-500/50">  
        <div class="bg-zinc-500 w-full h-full rounded-l-xl"></div>
        <div class="bg-white w-full h-full rounded-r-xl flex flex-col justify-center content-center">
            {{-- <h1 class="text-2xl sm:text-4xl lg:text-8xl">Monstruo Creativo Login</h1><br> --}}
            <span class="text-2xl">Iniciar Sesión</span>
            <pre>{{Auth::user()}}</pre>
            <form action="" method="POST">
                @csrf
                <div class="input-field flex items-center">
                    <input type="text" name="email" id="email" class="input placeholder:text-slate-800" required autocomplete = "off" placeholder="Usuario">
                </div>
                <div class="input-field flex items-center">
                    <input type="password" name="password" id="password" class="input placeholder:text-orange-800" required placeholder="Password">
                </div>
                <div class="input-field flex items-center">
                    <input type="submit" name="" id="" class="submit" value="Iniciar Sesión">
                </div>    
            </form>
           
            <div class="text-sm py-2.5">
                <span>Olvidaste tu contraseña <a class="font-semibold" href="#">Comunicarse con Soporte</a></span>
            </div>
        </div>
    </div>
@endsection