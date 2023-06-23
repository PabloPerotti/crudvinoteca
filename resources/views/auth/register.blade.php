@extends('layouts.auth-master')
@section('content')
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Registrarse</h1>
                <p>Tenes cuenta? <a href="./login">Login</a></p>
            </div>
            <div class="box">
                <form method="POST" class="form" action="/register">
                    @csrf
                    <input type="text" name="username" class="nombrecompleto" placeholder="Usuario" required>
                    <input type="email" name="email" class="correo" placeholder="email@ejemplo.com" required>
                    <input type="password"  name="password" class="password" placeholder="Contraseña" required>
                    <input type="password" name="password_confirmation" class="password" placeholder="Confirmar Contraseña" required>
                    <input type="submit" class="button" value="Registrarse">
                </form>
            </div>
        </div>
    </main>
    
@endsection

