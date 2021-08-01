$(document).ready(function(){
$('.ir-arriba').click(function(){
    $('body, html').animate({
        scrollTop: '0px'
    }, 1000);

    $(window).scroll(function(){
        if($(this).scrollTop()>0 ){
            $('.ir-arriba').slideDown(300);{

            }
        }else{
            $('.ir-arriba').slideUp(300);
        };
    })
})
});

(function(){var e=this,t=void 0;this.onmessage=function(n){switch(n.data){case!0:t||(t=setInterval(function(){
    e.postMessage(!0)},1e3/30));
    break;
    case!1:t&&(clearInterval(t),t=0);break;
    default:e.postMessage(n.data)}
}
})()