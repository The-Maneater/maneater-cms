var ManeaterApp = {};
ManeaterApp.navbarFlag = false;
var navFlag = false;
                  
$(function(){

    var os = $('#navigation-bar').offset().top; 
    var ht = $('#navigation-bar').height(); 
    var additionalSpacing = 30;
    
    // var opacity = 0;

    // var navbar = document.getElementById('navigation-bar');

    //help for this scroll function provided by http://jsfiddle.net/5d922roc/
    $(window).scroll(function() {
        var scroll = $(window).scrollTop(); 
        if(scroll > os + ht + additionalSpacing && navFlag == false){
            navFlag = true;
            $('#navigation-bar').addClass('fixed-navbar');
            $('#header-right-box').removeClass('col');
            $('#header-right-box').addClass('col-12');
            // var id = setInterval(frame, 100);
            // function frame() {
            //     if (opacity == 1) {
            //         clearInterval(id);
            //     } 
            //     else {
            //         opacity += .05;
            //         navbar.style.opacity = opacity;
            //     }
            // }
            
        }

        if(scroll < os + ht + additionalSpacing && navFlag == true){
            navFlag = false;
            $('#navigation-bar').removeClass('fixed-navbar');
            $('#header-right-box').removeClass('col-12');
            $('#header-right-box').addClass('col');

            // navbar.style.opacity = 1;
            // opacity = 0;
            
        }
    });


    $(window).scroll(function () {
        var scroll = $window.scrollTop();

        if(scroll > 0){
            header.style.fontSize = (currentSize + 5) + 'px';
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


