// EFECTO INDEX - SERVICIOS
$(document).ready(function () {
    // CALCULAMOS LA DISTANCIA ENTRE AQUEL ELEMENTO CON LA PARTE DE ARRIBA DE PATALLA
    //var altura = $('.container-carousel .texto').offset().top;
    // REMOVEMOS AQUELLAS ETIQUETAS      
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 250) {

            //ACTIVAMOS LAS ANIMACIONES
            $('#container-servicios #titulo').addClass('animated');
            $('#container-servicios #ico-domicilio').addClass('animated');
            $('#container-servicios #ico-cirugia').addClass('animated');
            $('#container-servicios #ico-hospital').addClass('animated');
            $('#container-servicios #ico-imagenologia').addClass('animated');

            //EFECTO DE ANIMACION
            $('#container-servicios #titulo').addClass('zoomIn');
            $('#container-servicios #ico-domicilio').addClass('zoomIn');
            $('#container-servicios #ico-cirugia').addClass('zoomIn');
            $('#container-servicios #ico-hospital').addClass('zoomIn');
            $('#container-servicios #ico-imagenologia').addClass('zoomIn');
        }

    });
});
// ------------------------------------------------------------

// EFECTO INDEX - EXPERIENCIA
$(document).ready(function (){
    //var altura = $('#container-experiencia').offset().top;
    $(window).on('scroll', function (){
            if($(window).scrollTop() > 600) {
                $('#container-experiencia #titulo').addClass('animated');
                $('#container-experiencia #texto').addClass('animated');

                $('#container-experiencia #titulo').addClass('zoomIn');
                $('#container-experiencia #texto').addClass('zoomIn');
            }
    });
});
// -----------------------------------------------------------


// EFECTO INDEX - MARCA
$(document).ready(function(){
    //var altura = $('.container-marca').offset().top;
    $('#container-marca #titulo').addClass('remove');
    $('#container-marca #texto').addClass('remove')
    $('#container-marca #iconos #ico-biljac').addClass('remove');
    $('#container-marca #iconos #ico-eukanuba').addClass('remove');
    $('#container-marca #iconos #ico-hills').addClass('remove');
    $('#container-marca #iconos #ico-nutranuggets').addClass('remove');
    $('#container-marca #iconos #ico-nutragold').addClass('remove');
    $('#container-marca #iconos #ico-diamond').addClass('remove');

    $(window).on('scroll', function() {
        if($(window).scrollTop() > 900) {
            $('#container-marca #titulo').removeClass('remove');
            $('#container-marca #texto').removeClass('remove');
            $('#container-marca #iconos #ico-biljac').removeClass('remove');
            $('#container-marca #iconos #ico-eukanuba').removeClass('remove');
            $('#container-marca #iconos #ico-hills').removeClass('remove');
            $('#container-marca #iconos #ico-nutranuggets').removeClass('remove');
            $('#container-marca #iconos #ico-nutragold').removeClass('remove');
            $('#container-marca #iconos #ico-diamond').removeClass('remove');
        
            $('#container-marca #titulo').addClass('animated');
            $('#container-marca #texto').addClass('animated');
            $('#container-marca #iconos #ico-biljac').addClass('animated');
            $('#container-marca #iconos #ico-eukanuba').addClass('animated');
            $('#container-marca #iconos #ico-hills').addClass('animated');
            $('#container-marca #iconos #ico-nutranuggets').addClass('animated');
            $('#container-marca #iconos #ico-nutragold').addClass('animated');
            $('#container-marca #iconos #ico-diamond').addClass('animated');

            $('#container-marca #titulo').addClass('fadeInUp');
            $('#container-marca #texto').addClass('fadeInUp');
            $('#container-marca #iconos #ico-biljac').addClass('zoomIn');
            $('#container-marca #iconos #ico-eukanuba').addClass('zoomIn');
            $('#container-marca #iconos #ico-hills').addClass('zoomIn');
            $('#container-marca #iconos #ico-nutranuggets').addClass('zoomIn');
            $('#container-marca #iconos #ico-nutragold').addClass('zoomIn');
            $('#container-marca #iconos #ico-diamond').addClass('zoomIn');
        }
    });
});

// -------------------------------------------------------------------------------

//EFECTO NOSOTROS - VISION
$(document).ready(function (){
    //var altura = $('.container-vision').offset().top;
    $('#container-vision #titulo').addClass('remove');
    $('#container-vision #texto').addClass('remove');
    $('#container-vision #imagen').addClass('remove');
    $('#container-vision #aguja').addClass('remove');

    $(window).on('scroll', function(){
        if($(window).scrollTop() > 70 ){
            $('#container-vision #titulo').removeClass('remove');
            $('#container-vision #texto').removeClass('remove');
            $('#container-vision #imagen').removeClass('remove');
            $('#container-vision #aguja').removeClass('remove');

            $('#container-vision #titulo').addClass('animated');
            $('#container-vision #texto').addClass('animated');
            $('#container-vision #imagen').addClass('animated');
            $('#container-vision #aguja').addClass('animated');

            $('#container-vision #titulo').addClass('zoomIn');
            $('#container-vision #texto').addClass('zoomIn');
            $('#container-vision #imagen').addClass('fadeInLeftBig');
            $('#container-vision #aguja').addClass('fadeInRightBig');
        }
    });

});

// --------------------------------------------------------------------------------

//EFECTO SERVICIOS - CONTAINER-SERVICES
$(document).ready(function () {
    //var altura = $('.container-services .titulo').offset().top;
    $('.container-services .alimentos #imagen').addClass('remove');
    $('.container-services .accesorios #imagen').addClass('remove');
    $('.container-services .domicilio #imagen').addClass('remove');
    $('.container-services .alimentos #texto').addClass('remove');
    $('.container-services .accesorios #texto').addClass('remove');
    $('.container-services .domicilio #texto').addClass('remove');

    $(window).on('scroll', function(){
        if($(window).scrollTop() > 300){
            $('.container-services .alimentos #imagen').removeClass('remove');
            $('.container-services .alimentos #imagen').addClass('animated');
            $('.container-services .alimentos #imagen').addClass('fadeInLeft');
            $('.container-services .alimentos #texto').removeClass('remove');
            $('.container-services .alimentos #texto').addClass('animated');
            $('.container-services .alimentos #texto').addClass('fadeInLeft');


            $('.container-services .accesorios #imagen').removeClass('remove');
            $('.container-services .accesorios #imagen').addClass('animated');
            $('.container-services .accesorios #imagen').addClass('fadeInUp');
            $('.container-services .accesorios #texto').removeClass('remove');
            $('.container-services .accesorios #texto').addClass('animated');
            $('.container-services .accesorios #texto').addClass('fadeInUp');

            $('.container-services .domicilio #imagen').removeClass('remove');
            $('.container-services .domicilio #imagen').addClass('animated');
            $('.container-services .domicilio #imagen').addClass('fadeInRight');
            $('.container-services .domicilio #texto').removeClass('remove');
            $('.container-services .domicilio #texto').addClass('animated');
            $('.container-services .domicilio #texto').addClass('fadeInRight');
        }
    });
});
// --------------------------------------------------------------------------------

//
$(document).ready(function (){
    //var altura = $('.detalle-contacto').offset().top;

    $('.detalle-contacto #texto').addClass('remove');
    $('.detalle-contacto #contacto').addClass('remove');

    $('.container-social #titulo').addClass('remove');
    $('.container-social #ico-facebook').addClass('remove');
    $('.container-social #ico-instagram').addClass('remove');
    $('.container-social #ico-whatsapp').addClass('remove');
    $(window).on('scroll', function() {
        if($(window).scrollTop() > 20) {
            $('.detalle-contacto #contacto').removeClass('remove');
            $('.detalle-contacto #contacto').addClass('animated');
            $('.detalle-contacto #contacto').addClass('fadeInUp');
        }

        if($(window).scrollTop() > 200) {
            $('.container-social #titulo').removeClass('remove');
            $('.container-social #ico-facebook').removeClass('remove');
            $('.container-social #ico-instagram').removeClass('remove');
            $('.container-social #ico-whatsapp').removeClass('remove');


            $('.container-social #titulo').addClass('animated');
            $('.container-social #ico-facebook').addClass('animated');
            $('.container-social #ico-instagram').addClass('animated');
            $('.container-social #ico-whatsapp').addClass('animated');

            $('.container-social #titulo').addClass('fadeIn');
            $('.container-social #ico-facebook').addClass('fadeIn');
            $('.container-social #ico-instagram').addClass('fadeIn');
            $('.container-social #ico-whatsapp').addClass('fadeIn');
        }

    });

});

// --------------------------------------------------------------------------------

//BORDE DEL MENU
$(document).ready(function (){
    $(window).on('scroll', function(){
        if($(window).scrollTop() > 1) {
            $('.container-menu').addClass('borde-menu');
        }
        if($(window).scrollTop() < 1) {
            $('.container-menu').removeClass('borde-menu');
        }
    });
});

// --------------------------------------------------------------------------------

//AUMENTA LA POSICION DEL SCROLL * 1
$(document).ready(function (){
    window.onload = function (){
        var pos = window.name || 1;
        window.scrollTo(0, pos);
    }
});
// --------------------------------------------------------------------------------


//

