@extends('complementos/imports')
@section('head')
    <title>Quienes Somos - BlueVet</title>    
@endsection

@section('body')
    <div class="container-nosotros">
        <div class="titulo animated bounceIn">
            <h1>Quienes Somos</h1>
        </div>
        <div class="texto animated fadeIn">
            <p>En el año 2012 surge la necesidad de crear una atención veterinaria a domicilio
                de excelente calidad, buen servicio y confianza. A partir de esto nos vimos en la
                obligacion de prestar un servicio integral, creando asi en Diciembre del año 2013
                la Clinica Veterinaria Bluevet. Contando con excelentes instalaciones, personal
                altamente calificado, empatico y Ético para prestar el mejor cuidado posible a
                nuestras mascotas. Nuestro gran amor y vocación por los animales son nuestro
                motor y compromiso para entregar la mejor salud a nuestros pacientes.</p>
        </div>
        <div class="logo animated bounceIn">
            <img src="{{asset('img/logo_footer.png')}}" alt="">
        </div>
    </div>

    <div class="container-mision">
        <div class="titulo animated bounceIn">
            <h1>Nuestra Misión</h1>
        </div>
        <div class="texto animated fadeIn">
            <p>Clínica Veterinaria Bluevet es una entidad prestadora de salud, cuyo principal objetivo es entregar a
                nuestros pacientes y propietarios una atención integral, resolutiva y oportuna, basada en la calidez,
                compromiso y los mas altos estándares de calidad.</p>
        </div>
    </div>

    <div class="container-vision" id="container-vision">
        <div class="titulo" id="titulo">
            <h1>Nuestra Visión</h1>
        </div>
        <div class="texto" id="texto">
            <p>Convertirnos en una clínica veterinaria líder en el diagnostico y tratamiento de las enfermedades,
                entregando una atención personalizada, dedicada, eficiente y eficaz; sin descuidar los principios éticos
                y valores de nuestra institución.</p>
        </div>
        <div class="imagen" id="imagen">
            <img src="{{asset('img/nosotros.jpg')}}" alt="">
        </div>
        <div class="logo" id="logo">
            <img src="{{asset('img/logo_footer.png')}}" alt="">
        </div>
        <div class="aguja" id="aguja">
            <img src="{{asset('img/aguja.png')}}" alt="">
        </div>
        <div class="barra-gris"></div>
    </div>
@endsection
