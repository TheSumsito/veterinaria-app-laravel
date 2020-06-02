<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/efectos.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('animate_responsive.css')}}">

    <script src="{{asset('js/jquery-3.1.4.min.js')}}"></script>
    @yield('head')
</head>
<body>
    <nav class="container-menu">
        <div class="logo">
            <a href="index.htm"><img src="{{asset('img/logo_footer.png')}}" alt=""></a>
        </div>

        <div class="icono-menu">
            <a id="icono"><span class="icon-menu"></span></a>
        </div>

        <ul class="menu" id="menu">
            <li><a href="{{asset('/')}}" id="home"><span class="icon-inicio"></span>HOME</a></li>
            <li><a href="{{asset('quienes_somos')}}" id="quienes_somos"><span class="icon-nosotros"></span>QUIENES SOMOS</a></li>
            <li><a href="{{asset('nuestros_servicios')}}" id="nuestros_servicios"><span class="icon-servicios"></span>SERVICIOS</a></li>
            <li><a href="{{asset('nuestros_planes')}}" id="nuestros_planes"><span class="icon-planes"></span>NUESTROS PLANES</a></li>
            <li><a href="{{asset('contacto')}}" id="contacto"><span class="icon-contacto"></span>CONTACTO</a></li>
        </ul>
    </nav>
    @yield('body')
    <footer class="container-footer">
        <div class="logo">
            <a href="index.htm"><img src="{{asset('img/logo_footer.png')}}" alt=""></a>
        </div>
        <div class="contacto">
            <div class="titulo">
                <h1>Contacto</h1>
            </div>
            <div class="texto">
                <p>Direccion: <a
                        href="https://www.google.com/maps/place/La+Florida+7683,+La+Florida,+Región+Metropolitana/@-33.5245789,-70.5804095,17z/data=!3m1!4b1!4m5!3m4!1s0x9662d0fe948576a5:0x9b127880649f8b93!8m2!3d-33.5245789!4d-70.5782208"
                        target="_blank">
                        Av.La Florida #7683, La Florida</a></p>
                <p>Teléfono: <a href="tel: +562 227933496">+562 227933496</a> / <a href="tel: +569 95344576">+569
                        95344576</a></p>
                <p>Mail: <a href="mailto: contacto@bluevet.cl">contacto@bluevet.cl</a></p>
            </div>
        </div>
        <div class="horario">
            <div class="titulo">
                <h1>Horario</h1>
            </div>
            <div class="texto">
                <p>Lunes - Viernes 10:00am-14:00pm / 16:00-21:00</p>
                <p>Sábado 10:00am - 17:00pm</p>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/code.js')}}"></script>
    <script src="{{asset('js/efectos.js')}}"></script>
    <script src="{{asset('js/carousel.js')}}"></script>
    <script src="{{asset('js/menu-colors-etiqueta.js')}}"></script>
</body>
</html>