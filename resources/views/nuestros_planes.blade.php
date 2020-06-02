@extends('complementos/imports')
@section('head')
    <title>Nuestros Planes - BlueVet</title>
@endsection

@section('body')
    <div class="container-planes">
        <div class="titulo animated flipInX">
            <h1>Nuestros Planes</h1>
        </div>
        <div class="imagen">
            <div class="basico animated flipInX">
                <img src="{{asset('img/planes/basico.png')}}" alt="">
            </div>
            <div class="preferencial animated flipInX">
                <img src="{{asset('img/planes/preferencial.png')}}" alt="">
            </div>
            <div class="vip animated flipInX">
                <img src="{{asset('img/planes/vip.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="container-cotizacion">
        <div class="titulo animated flipInY">
            <h1>Para mas Información</h1>
        </div>
        <div class="texto animated flipInY">
            <p>Puedes descargar nuestro plan de salud detallando las coberturas de cada plan para que asi puedas
                elegir el plan mas conveniente para usted y su mascota.
            </p>
        </div>
        <div class="boton animated flipInY">
            <a href="{{asset('excel/Planes.xlsx')}}" download="Planes - Bluevet">Visualizar</a>
        </div>
    </div>
@endsection