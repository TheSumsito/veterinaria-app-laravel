@extends('complementos/imports')
@section('head')
    <title>Contacto - BlueVet</title>
@endsection

@section('body')
    <form action="" autocomplete="off">
        <div class="container-contacto">
            <div class="titulo animated fadeIn">
                <h1>Contacto</h1>
            </div>
            <div class="texto animated fadeIn">
                <p>Si quieres conocer mas informacion acerca de nuestros productos y servicios no dude en comunicarse
                    con
                    nosotros</p>
            </div>
            <div class="formulario white">
                <div class="nombre animated fadeInLeft">
                    <p>Nombre</p>
                    <input type="text" name="txtNombre" id="txtNombre">
                </div>
                <div class="apellido animated fadeInRight">
                    <p>Apellido</p>
                    <input type="text" name="txtApellido" id="txtApellido">
                </div>
                <div class="mail animated fadeInLeft">
                    <p>Correo</p>
                    <input type="text" name="txtCorreo" id="txtCorreo">
                </div>
                <div class="telefono animated fadeInRight">
                    <p>Telefono</p>
                    <input type="text" name="txtTelefono" id="txtTelefono">
                </div>
                <div class="asunto animated fadeInLeft">
                    <p>Asunto</p>
                    <input type="text" name="txtAsunto" id="txtAsunto">
                </div>
                <div class="mensaje animated fadeInRight">
                    <p>Mensaje</p>
                    <textarea name="txtMensaje" id="txtMensaje" cols="20" rows="4"></textarea>
                </div>
                <div class="boton animated fadeInUp">
                    <input type="button" value="Enviar">
                </div>
            </div>
        </div>
    </form>

    <div class="detalle-contacto">
        <div class="texto animated fadeInDown">
            <p>Si quieres conocer nuestros servicios de manera detallada puedes contactarnos de manera Inmediata</p>
        </div>
        <div class="contacto" id="contacto">
            <p><span>Teléfono: </span><a href="tel: +562 227933496">+562 227933496</a> / <a href="tel: +569 95344576">+569 95344576</a></p>
            <p><span>Mail: </span><a href="mailto: contacto@bluevet.cl">contacto@bluevet.cl</a></p>
            <p><span>Dirección: </span><a href="https://www.google.com/maps/place/La+Florida+7683,+La+Florida,+Región+Metropolitana/@-33.5245789,-70.5804095,17z/data=!3m1!4b1!4m5!3m4!1s0x9662d0fe948576a5:0x9b127880649f8b93!8m2!3d-33.5245789!4d-70.5782208" target="_blank">
                Avenida La Florida 7683, La Florida</a> - Santiago de Chile</p>
        </div>
    </div>

    <div class="container-social white">
        <div class="titulo" id="titulo">
            <h1>Nuestras Redes Sociales</h1>
        </div>
        <div class="ico-facebook" id="ico-facebook">
            <a href="https://www.facebook.com/Clínica-Veterinaria-Bluevet-276815196179589/?ref=br_rs" target="_blank"><img src="{{asset('img/rrss/Facebook.png')}}" alt=""></a>
        </div>
        <div class="ico-instagram" id="ico-instagram">
            <a href="https://www.instagram.com/veterinariabluevet/?hl=es-la" target="_blank"><img src="{{asset('img/rrss/Instragram.png')}}" alt=""></a>
        </div>
        <div class="ico-whatsapp" id="ico-whatsapp">
            <a href="https://wa.me/56995344576" target="_link"><img src="{{asset('img/rrss/Whatsapp.png')}}" alt=""></a>
        </div>
    </div>
@endsection