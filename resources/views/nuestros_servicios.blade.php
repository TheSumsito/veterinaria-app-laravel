@extends('complementos/imports')
@section('head')
    <title>Nuestros Servicios - BlueVet</title>
@endsection

@section('body')
    <div class="container-services">
        <div class="titulo animated fadeInUp">
            <h1>Nuestros Servicios</h1>
        </div>
        <div class="cirugia">
            <div class="imagen animated fadeInLeft">
                <img src="{{asset('img/img-cirugia.png')}}" alt="">
            </div>
            <div class="texto animated fadeInUp">
                <h1>Cirugías</h1>
                <p>Contamos con un pabellón quirúrgico, equipado que permite realizar intervenciones de gran
                    complejidad.</p>
            </div>
        </div>

        <div class="imagenologia">
            <div class="imagen animated fadeInUp">
                <img src="{{asset('img/img-imagenologia.png')}}" alt="">
            </div>
            <div class="texto animated fadeInUp">
                <h1>Imagenología</h1>
                <p>Equipo de radiología y ecografía, que permiten dar apoyo a un correcto diagnostico.</p>
            </div>
        </div>

        <div class="hospital">
            <div class="imagen animated fadeInRight">
                <img src="{{asset('img/img-hospital.png')}}" alt="">
            </div>
            <div class="texto animated fadeInRight">
                <h1>Hospital</h1>
                <p>Instalaciones fabricadas especialmente para brindar tratamientos en pacientes con enfermedades
                    complejas.</p>
            </div>
        </div>
    </div>

    <div class="container-services white">
        <div class="dermatologia">
            <div class="imagen animated fadeInLeft">
                <img src="{{asset('img/img-dermatologia.png')}}" alt="">
            </div>
            <div class="texto animated fadeInLeft">
                <h1>Dermatología</h1>
                <p>Profesional certificado para consultas dermatológicas incluyendo exámenes de lucrospia.</p>
            </div>
        </div>

        <div class="farmacia">
            <div class="imagen animated fadeInUp">
                <img src="{{asset('img/img-farmacia.png')}}" alt="">
            </div>
            <div class="texto animated fadeInUp">
                <h1>Farmacia</h1>
                <p>Nos preocupamos de la comodidad de nuestros clientes, entregando una amplia variedad de medicamentos
                    de uso veterinario para el tratamiento de su mascota.</p>
            </div>
        </div>

        <div class="peluqueria">
            <div class="imagen animated fadeInRight">
                <img src="{{asset('img/img-peliqueria.png')}}" alt="">
            </div>
            <div class="texto animated fadeInRight">
                <h1>Peluqueria Estética</h1>
                <p>En Bluevet nos dedicamos al cuidado y bienestar de la piel y
                    pelaje de sus Mascotas.</p>
            </div>
        </div>
    </div>

    <div class="container-services">
        <div class="alimentos">
            <div class="imagen" id="imagen">
                <img src="{{asset('img/img-alimentos.png')}}" alt="">
            </div>
            <div class="texto" id="texto">
                <h1>Alimentos</h1>
                <p>Ofrecemos una pequeña variedad de los mejores alimentos recomendados por veterinarios, que se ajustan
                    en relación precio-calidad.</p>
            </div>
        </div>

        <div class="accesorios">
            <div class="imagen" id="imagen">
                <img src="{{asset('img/img-accesorios.png')}}" alt="">
            </div>
            <div class="texto" id="texto">
                <h1>Accesorios</h1>
                <p>Algunos accesorios para su mascota, también un catalogo para accesorios por encargo.</p>
            </div>
        </div>

        <div class="domicilio">
            <div class="imagen" id="imagen">
                <img src="{{asset('img/img-domicilio.png')}}" alt="">
            </div>
            <div class="texto" id="texto">
                <h1>Domicilio</h1>
                <p>Atención veterinaria a domicilio, transporte de mascota y entrega de alimentos.</p>
            </div>
        </div>
    </div>
@endsection