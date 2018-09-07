$(function(){

    var os = $('#navigation-bar').offset().top; 
    var ht = $('#navigation-bar').height(); 
    //help for this scroll function provided by http://jsfiddle.net/5d922roc/
    $(window).scroll(function() {
        var scroll = $(window).scrollTop(); 
        
        if(scroll > os + ht){
            $('#navigation-bar').addClass('fixed-top');
        }

        if(scroll < os + ht){
            $('#navigation-bar').removeClass('fixed-top');
        }
    });


    $(window).scroll(function () {
        var scroll = $window.scrollTop();

        if(scroll > 0){
            header.style.fontSize = (currentSize + 5) + 'px';
        }

    });

});