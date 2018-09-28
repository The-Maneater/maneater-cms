var ManeaterApp = {};
ManeaterApp.navbarFlag = false;
var navFlag = false;
                  
$(function(){

    var size = window.matchMedia("(max-width: 700px)");

    if(size.matches){
        var x = document.getElementsByClassName("badge");
        for(let i = 0; i < x.length; i++){
            x[i].style.display = "none";
        }
    }

    //TODO write to remove and add for changing screen size

    var os = $('#navigation-bar').offset().top; 
    var ht = $('#navigation-bar').height(); 
    var additionalSpacing = 150;

    //help for this scroll function provided by http://jsfiddle.net/5d922roc/

    $(window).scroll(function() {
        var scroll = $(window).scrollTop(); 
        var x = window.matchMedia("(min-width: 992px)");
        if(scroll > os + ht + additionalSpacing && navFlag == false){
            navFlag = true;
            
            if(x.matches){
                $('#navigation-bar').addClass('fixed-navbar');
                $('#header-right-box').removeClass('col');
                $('#header-right-box').addClass('col-12');
                $('#navigation-bar').css({"display": "none", "paddingRight": "1.5%"});
                $('#navigation-bar').slideDown("slow");
            }
            else {
                $('#navigation-bar').addClass('fixed-navbar-small-screen');
            }
           
            
            
           
        }

        if(scroll < os + ht + additionalSpacing && navFlag == true){
            navFlag = false;
            
            if(x.matches){
                $('#navigation-bar').css({"paddingTop": 0, "display": "inline-block", "width": "100%"}).removeClass('fixed-navbar');
                $('#header-right-box').removeClass('col-12');
                $('#header-right-box').addClass('col');
            }
            else {
                $('#navigation-bar').removeClass('fixed-navbar-small-screen');
            }
            
        }
    });

    if(screen.height < 600) {
        //document.getElementsByClassName("dropdown-links").setAttribute("data-toggle", "dropdown");

        var links = document.querySelectorAll('.dropdown-links');
        for (var i=0; i < links.length; i++) {
            links[i].setAttribute("data-toggle", "dropdown");
        }
    }

    if(screen.height > 600) {
        //document.getElementsByClassName("dropdown-links").setAttribute("data-toggle", "dropdown");

        var rlinks = document.querySelectorAll('.dropdown-links');
        for (var j=0; j < rlinks.length; j++) {
            rlinks[j].removeAttribute("data-toggle");
        }
    }

});

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});

function newsClicked() {
    window.location = "/section/news";
}

function opinionClicked() {
    window.location = "/section/opinion";
}

function sportsClicked() {
    window.location = "/section/sports";
}


// $('#navbarDropdownMenuLink').click(function(event) {
//     // Remember the link href
//     //var href = this.href;

//     // Don't follow the link
//     // event.preventDefault();


//         // This is the completion callback for the asynchronous thing;
//         // go to the link
//         window.location = "https://www.google.com/";

// });


