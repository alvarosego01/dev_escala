


var navBarHeight = null;
var navbar = jQuery('header#masthead');
var inner = jQuery('.elementor-inner', navbar);

function navScrollFixed() {


    if (window.pageYOffset > 0) {
        inner[0].classList.add("fixedNav")

        navbar.css({
            'height': navBarHeight + 'px'
        })
    } else {
        inner[0].classList.remove("fixedNav");
        // navbar.css({
        //     'height': heightNavbar + 'px'
        // })
    }
}

function setResize(){

    navBarHeight = inner.height();
    window.addEventListener('resize', function(event) {

        navBarHeight = inner.height();

    }, true);

}

jQuery(document).ready(function () {



    window.onload = function (){
        setResize();
    }

    window.onscroll = function () { navScrollFixed() };




});