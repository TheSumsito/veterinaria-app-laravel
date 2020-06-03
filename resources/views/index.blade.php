@extends('complementos/imports')
@section('head')
    <title>Home - BlueVet</title>
@endsection
@section('body')
    <div class="container-carousel">
        <div class="slide01 animated fadeIn">
            <div class="imagen">
                <img src="{{asset('img/carousel/slide01.jpg')}}" alt="">
            </div>
            <div class="texto">
                <h1>Clinica BlueVet</h1>
                <p>Comprometidos con el Cuidado de Tus Mascotas</p>
                <hr>
            </div>
        </div>
        <div class="slide02 animated fadeIn">
            <div class="imagen">
                <img src="{{asset('img/carousel/slide02.jpg')}}" alt="">
            </div>
            <div class="texto">
                <h1>Clinica BlueVet</h1>
                <p>Comprometidos con el Cuidado de Tus Mascotas</p>
                <hr>
            </div>
        </div>
        <div class="slide03 animated fadeIn">
            <div class="imagen">
                <img src="{{asset('img/carousel/slide03.jpg')}}" alt="">
            </div>
            <div class="texto">
                <h1>Clinica BlueVet</h1>
                <p>Comprometidos con el Cuidado de Tus Mascotas</p>
                <hr>
            </div>
        </div>
    </div>


    <div class="container-servicios" id="container-servicios">
        <div class="titulo" id="titulo">
            <h1>Algunos de nuestros principales servicios</h1>
        </div>
        <div class="ico-domicilio" id="ico-domicilio">
            <div class="imagen">
                <img src="{{asset('img/servicios/Domicilio.png')}}" alt="">
            </div>
            <div class="texto">
                <h1>Domicilio</h1>
                <p>Atención veterinaria a domicilio, transporte de mascota y entrega de alimentos.</p>
            </div>
        </div>
        <div class="ico-cirugia" id="ico-cirugia">
            <div class="imagen">
                <img src="{{asset('img/servicios/Cirugia.png')}}" alt="">
            </div>
            <div class="texto">
                <h1>Cirugia</h1>
                <p>Contamos con un pabellón quirúrgico, equipado que permite realizar intervenciones de gran
                    complejidad.</p>
            </div>
        </div>
        <div class="ico-hospital" id="ico-hospital">
            <div class="imagen">
                <img src="{{asset('img/servicios/Hospital.png')}}" alt="">
            </div>
            <div class="texto">
                <h1>Hospital</h1>
                <p>Instalaciones fabricadas especialmente para brindar tratamientos en pacientes con enfermedades
                    complejas.</p>
            </div>
        </div>
        <div class="ico-imagenologia" id="ico-imagenologia">
            <div class="imagen">
                <img src="{{asset('img/servicios/Imagenologia.png')}}" alt="">
            </div>
            <div class="texto">
                <h1>Imagenologia</h1>
                <p>Equipo de radiología y ecografía, que permiten dar apoyo a un correcto diagnóstico.</p>
            </div>
        </div>
    </div>

    <div class="container-experiencia" id="container-experiencia">
        <div class="titulo" id="titulo">
            <h1>Nuestra Experiencia</h1>
        </div>
        <div class="texto" id="texto">
            <p>Somos un equipo medico veterinario, entrenados en la Universidad de Chile que constantemente actualizamos
                nuestros conocimientos para entregar la mejor atención a sus mascotas. Trabajando para usted desde el
                año 2009.</p>
        </div>
    </div>

    <div class="container-marca" id="container-marca">
        <div class="titulo" id="titulo">
            <h1>Nuestros Productos</h1>
        </div>
        <div class="texto" id="texto">
            <p>Contamos con una gran variedad de accesorios, alimentos y fármacos.</p>
        </div>
        <div class="iconos" id="iconos">
            <div class="ico-biljac" id="ico-biljac"><a href="https://www.bil-jac.com" target="_blank"><img
                        src="{{asset('img/biljac.png')}}" alt=""></a></div>
            <div class="ico-eukanuba" id="ico-eukanuba"><a href="https://www.eukanuba.cl" target="_blank"><img
                        src="{{asset('img/eukanuba.png')}}" alt=""></a></div>
            <div class="ico-hills" id="ico-hills"><a href="https://www.hillspet.com.mx" target="_blank"><img
                        src="{{asset('img/hills.png')}}" alt=""></a></div>
            <div class="ico-nutranuggets" id="ico-nutranuggets"><a href="http://www.nutranuggets.cl"
                    target="_blank"><img src="{{asset('img/nutranuggets.png')}}" alt=""></a></div>
            <div class="ico-nutragold" id="ico-nutragold"><a href="http://www.nutragold.cl" target="_blank"><img
                        src="{{asset('img/nutragold.png')}}" alt=""></a></div>
            <div class="ico-diamond" id="ico-diamond"><a href="http://www.diamondpet.mx/new/" target="_blank"><img
                        src="{{asset('img/diamond.png')}}" alt=""></a></div>
        </div>
    </div>
@endsection