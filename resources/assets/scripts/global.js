


var navBarHeight = null;
var navbar = jQuery('header#masthead');
var inner = jQuery('.elementor-inner', navbar);

function navScrollFixed() {


    if (window.pageYOffset > 0) {
        inner[0].classList.add("fixedNav")
        console.log('altura', navBarHeight);
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
        console.log('altura', navBarHeight);
    }, true);

}

jQuery(document).ready(function () {



    window.onload = function (){
        setResize();
    }
    console.log('altura', navBarHeight);
    window.onscroll = function () { navScrollFixed() };




});