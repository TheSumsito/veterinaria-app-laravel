@extends('complementos/imports')
@section('head')
    <title>Registro Usuario - BlueVet</title>
@endsection
@section('body')
    <form method="POST" action="{{route('register')}}" autocomplete="off">
        @csrf
        <div class="regUsuario">
            <div class="titulo">
                <h1>Registro de Usuario</h1>
            </div>
            <div class="nombre">
                <p>Ingrese su Nombre</p>
                <input type="text" name="name" id="name">
            </div>
            <div class="correo">
                <p>Ingrese su Correo</p>
                <input type="text" name="email" id="email">
            </div>
            <div class="contrasena">
                <p>Ingrese su Contraseña</p>
                <input type="password" name="password" id="password">
            </div>
            <div class="repetir-contrasena">
                <p>Repita su Contraseña</p>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="boton">
                <input type="submit" name="btnAccion" value="Registrar">
                <a href="{% url 'login' %}">Volver</a>
            </div>
        </div>
    </form>
@endsection