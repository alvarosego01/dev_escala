


var navBarHeight = null;
var navbar = jQuery('header#masthead');
var inner = (jQuery('.elementor-inner', navbar).length > 0)? jQuery('.elementor-inner', navbar) : jQuery('nav.principal.navbar', navbar);

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

function setResize() {

    navBarHeight = inner.height();
    window.addEventListener('resize', function (event) {

        navBarHeight = inner.height();

    }, true);

}


function _serializeFormToObject(form) {

    var paramObj = {};
    jQuery.each(jQuery(form).serializeArray(), function (_, kv) {
        if (paramObj.hasOwnProperty(kv.name)) {
            paramObj[kv.name] = jQuery.makeArray(paramObj[kv.name]);
            paramObj[kv.name].push(kv.value);
        }
        else {
            paramObj[kv.name] = kv.value;
        }
    });

    return paramObj;

}

jQuery(document).ready(function () {



    window.onload = function () {
        setResize();
    }

    window.onscroll = function () { navScrollFixed() };




});