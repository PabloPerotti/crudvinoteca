@extends('layouts.auth-master')

@section('content')
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Login</h1>
                <p>No tenes cuenta? <a href="./register">Registrarse</a></p>
            </div>
            <div class="box">
                <form class="form" method="POST" action="./login">
                @csrf
                @include('layouts.partials.messages')
                    <input type="text" name="username" class="usuario" placeholder="Usuario" required>
                    <input type="password" name="password" class="password" placeholder="Contraseña" required>
                    <input type="submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </main>
    @endsection

  
