$(document).ready(function(){

    //When mouse rolls over
    $(".menu-aux-class").mouseover(function(){
        $(this).stop().animate({height:'200px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

    //When mouse is removed
    $(".menu-aux-class").mouseout(function(){
        $(this).stop().animate({height:'41px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });

});