@extends('complementos/imports')
@section('head')
    <title>Login - BlueVet</title>
@endsection

@section('body')
    <form class="container-login" method="POST" action="{{route('login')}}" autocomplete="off">
        @csrf
        <div class="titulo">
            <h1>Iniciar Sesion</h1>
        </div>
        <div class="formulario">
            <div class="usuario">
                <p>Ingrese su Correo</p>
                <input type="text" name="email" id="email">
            </div>
            <div class="contrasena">
                <p>Ingrese su Contraseña</p>
                <input type="password" name="password" id="password">
            </div>
            <div class="boton">
                <input type="submit" name="btnAccion" value="Ingresar">
                <a href="{{route('register')}}">Registrarse</a>
            </div>
        </div>
    </form>
@endsection