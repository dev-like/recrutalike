$(document).ready(function(){

    $('.menu-icon').click(function(){
        $(this).toggleClass('active');
        $('nav ul').slideToggle(200);
        $('nav .redessociais').slideToggle(200);
    });

});
