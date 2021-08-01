
jQuery(function(){
    jQuery("a.bla-1").YouTubePopUp();
    jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
});

// $ ( '.carousel' ). carousel ({ interval : 2500 });


// document.getElementById('vid').play(); Solucion reproductor de video 



$(document).ready(function(){
    $(window).on('scroll',function () {
        let contacto=$('#contactenos');
        if($(window).scrollTop()>=contacto.offset().top - contacto.outerHeight()){
            let posicion= ($(window).scrollTop()-contacto.offset().top)*0.20;
            contacto.css('background-position','0'+posicion+'px');
    }
    })
})



$('#carousel').on('slid.bs.carousel', function (e) {
    let elemento = $('#carousel .item.active video').first();
    if (elemento.prop("tagName") == "VIDEO") {
      elemento.get(0).play();
    }
 });

 $('#carousel').bind('slide.bs.carousel', function (e) {  
    let elemento = $('#carousel .item.active video').first();
    if (elemento.prop("tagName") == "VIDEO") {
      elemento.get(0).pause();
    }
 });


//Calculadora de conversion
function plan_selected(value){
    document.getElementById("op1").innerHTML ="$. "+0.015*value;
    document.getElementById("op2").innerHTML ="$. "+0.075*value;
    document.getElementById("op3").innerHTML ="$. "+0.225*value;
    document.getElementById("op4").innerHTML ="$. "+2*value;
}

//Menu
$(".submenu").click(function(){
  $(this).children("ul").slideToggle();
})

$("ul").click(function(ev){
  ev.stopPropagation();
})