


var navBarHeight = null;
var navbar = jQuery('header#masthead');
var inner = (jQuery('.elementor-inner', navbar).length > 0)? jQuery('.elementor-inner', navbar) : jQuery('nav.principal.navbar', navbar);

var sideNavBar = jQuery('#sideNavBar');

function navScrollFixed() {

    if (window.pageYOffset > 0) {
        inner[0].classList.add("fixedNav")

        navbar.css({
            'height': navBarHeight + 'px'
        });

        jQuery('.jet-popup.jet-popup--front-mode').css({
            'top':  navBarHeight - 5 + 'px'
        });

        console.log('esto que es', jQuery('.jet-popup.jet-popup--front-mode'));

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


        navScrollFixed();

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


function _openSideNav(type){

    if(type == 'close'){

        jQuery('nav', sideNavBar)[0].classList.add("animate__slideOutRight");
        jQuery('nav', sideNavBar)[0].addEventListener('animationend', (e) => {
            // do something
            if(e.animationName == 'slideOutRight'){
                sideNavBar.css({
                    'display': 'none'
                });
                jQuery('nav', sideNavBar)[0].classList.add("animate__slideInRight")
                jQuery('nav', sideNavBar)[0].classList.remove("animate__slideOutRight")
                // sideNavBar[0].classList.add("animate__fadeOut")

                e.target.removeEventListener('animationend', () => {

                });

            }

        });

    }

    if(type == 'open'){

        // animate__slideInRight
        let w = window.innerWidth;
        if(w <= 991){

            sideNavBar.css({
                'display': 'block'
            });
            // sideNavBar[0].classList.add("animate__fadeIn")
            jQuery('nav', sideNavBar)[0].classList.add("animate__slideInRight")

        }


    }







}

jQuery(document).ready(function () {



    window.onload = function () {
        setResize();
    }

    window.onscroll = function () { navScrollFixed() };




});