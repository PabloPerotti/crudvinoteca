@extends('layouts.app-master')

@section('content')
    
        <br>
        @auth
        <p class="lead">Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estas autenticado a la pagina.</p>
        <p><a href="/logout"></a>Logout</p>
        
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Para ver el contenido <a href="/login">Inicia Sesion</a>.</p>
        @endguest
    </div>
@endsection