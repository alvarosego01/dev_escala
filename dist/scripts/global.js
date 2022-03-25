


var navBarHeight = null;
var navbar = null;
var inner = null;

var sideNavBar = jQuery('#sideNavBar');

var sidebarStatus = false;

function navScrollFixed() {

    if (navbar != null && inner != null) {

        if (window.pageYOffset > 0) {
            inner[0].classList.add("fixedNav")

            navbar.css({
                'height': navBarHeight + 'px'
            });


            jQuery('.jet-popup.jet-popup--front-mode').css({
                'top': navBarHeight - 5 + 'px'
            });


        } else {
            inner[0].classList.remove("fixedNav");
            // navbar.css({
            //     'height': heightNavbar + 'px'
            // })
        }
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


function _openSideNav(type) {

    if (type == 'close') {
        console.log('close sidenav');
        jQuery('nav', sideNavBar)[0].classList.add("animate__slideOutRight");
        jQuery('nav', sideNavBar)[0].addEventListener('animationend', function (e) {
            // do something
            if (e.animationName == 'slideOutRight') {
                console.log('abre');
                sideNavBar.css({
                    'display': 'none'
                });
                jQuery('nav', sideNavBar)[0].classList.add("animate__slideInRight")
                jQuery('nav', sideNavBar)[0].classList.remove("animate__slideOutRight")
                // sideNavBar[0].classList.add("animate__fadeOut")

                e.target.removeEventListener('animationend', function () {

                });

            }

        });

        sidebarStatus = false;
    }

    if (type == 'open') {

        // animate__slideInRight
        console.log('open sidenav');
        let w = window.innerWidth;
        if (w <= 991) {

            sideNavBar.css({
                'display': 'block'
            });
            // sideNavBar[0].classList.add("animate__fadeIn")
            jQuery('nav', sideNavBar)[0].classList.add("animate__slideInRight")

        }

        sidebarStatus = true;

    }

}


function setInnerElement() {

    if (jQuery('header').length > 0) {

        navbar = jQuery('header')

        if (jQuery('.elementor-inner', navbar).length > 0) {

            inner = jQuery('.elementor-inner', navbar);

        } else if (jQuery('nav.principal.navbar', navbar).length > 0) {

            inner = jQuery('nav.principal.navbar', navbar);

        }

    }

    // if(jQuery('.elementor-section.elementor-top-section.elementor-element.navbar').length > 0){

    //     navbar = jQuery('.elementor-section.elementor-top-section.elementor-element.navbar');

    //     if (jQuery('.elementor-container', navbar).length > 0) {

    //         inner = jQuery('.elementor-container', navbar);

    //     }
    // }



}

function deviceType() {

    let w = window.innerWidth;

    if (w <= 991) {

        return 'mobile';

    }
    if (w >= 992) {

        return 'desktop';

    }


}



function closingSidebarClick() {

    jQuery('#sideNavBar').on('click', function (e) {
        if (e.target === this) {

            // closeSidebarButton
            if (sidebarStatus == true) {

                _openSideNav('close');

            }

        }
    });

}



function scrollToHash() {

    jQuery('.goToHash').click(function (e) {
        e.preventDefault();
        console.log('scroll to hash', e);

        // let w = window.innerWidth;
        // document.getElementById('lead-form').scrollIntoView();

        var yOffset = -10;
        var element = jQuery('#lead-form .formatForm')[0];
        if(element){

            if(window.innerWidth <= 999){

                var y = element.getBoundingClientRect().top + window.pageYOffset + yOffset - 100;

                window.scrollTo({ top: y, behavior: 'smooth' });
            }
            if(window.innerWidth >= 1000){

                var y = element.getBoundingClientRect().top + window.pageYOffset + yOffset - 150;

                window.scrollTo({ top: y, behavior: 'smooth' });
            }
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 4500,
            timerProgressBar: true,
            // didOpen: (toast) => {
            //   toast.addEventListener('mouseenter', Swal.stopTimer)
            //   toast.addEventListener('mouseleave', Swal.resumeTimer)
            // }
          })

          Toast.fire({
            icon: 'success',
            title: '¡Completa este formulario para probar <strong>Escala</strong> ahora!'
          })



    });

}

jQuery(document).ready(function () {


    setInnerElement();

    scrollToHash();

    window.onload = function () {
        setResize();
    }

    window.onscroll = function () { navScrollFixed() };


    closingSidebarClick();

});