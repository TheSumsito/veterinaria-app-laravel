$(document).ready(function(){
    var url = window.location.href;
    console.log(url);

    if(url=='http://veterinaria-app.test/'){
        $('#home').addClass('active');
    } else if(url=='http://veterinaria-app.test/quienes_somos'){
        $('#quienes_somos').addClass('active');
    } else if(url=='http://veterinaria-app.test/nuestros_servicios'){
        $('#nuestros_servicios').addClass('active');
    } else if(url=='http://veterinaria-app.test/nuestros_planes'){
        $('#nuestros_planes').addClass('active');
    } else if(url=='http://veterinaria-app.test/contacto'){
        $('#contacto').addClass('active');
    }
});