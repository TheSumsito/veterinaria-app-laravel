$(document).ready(function () {
    var contador = 0;
    $('.container-carousel .slide02').addClass('remove-img');
    $('.container-carousel .slide03').addClass('remove-img');
    function carousel () {
        contador++;
        console.log(contador);

        if(contador == 5) {
            $('.container-carousel .slide01').addClass('remove-img');
            $('.container-carousel .slide02').removeClass('remove-img');
            $('.container-carousel .slide03').addClass('remove-img');
        }

        else if(contador == 10) {
            $('.container-carousel .slide01').addClass('remove-img');
            $('.container-carousel .slide02').addClass('remove-img');
            $('.container-carousel .slide03').removeClass('remove-img');
        }

        else if(contador == 15) {
            $('.container-carousel .slide01').removeClass('remove-img');
            $('.container-carousel .slide02').addClass('remove-img');
            $('.container-carousel .slide03').addClass('remove-img');

            window.clearTimeout();
            contador=0;
        }
        window.setTimeout(carousel, 1000);
    }
    carousel();
});