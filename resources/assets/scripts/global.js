


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
        if (element) {

            if (window.innerWidth <= 999) {

                var y = element.getBoundingClientRect().top + window.pageYOffset + yOffset - 100;

                window.scrollTo({ top: y, behavior: 'smooth' });
            }
            if (window.innerWidth >= 1000) {

                var y = element.getBoundingClientRect().top + window.pageYOffset + yOffset - 150;

                window.scrollTo({ top: y, behavior: 'smooth' });
            }
        }

        // const Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top',
        //     showConfirmButton: false,
        //     timer: 4500,
        //     timerProgressBar: true,
        //     // didOpen: (toast) => {
        //     //   toast.addEventListener('mouseenter', Swal.stopTimer)
        //     //   toast.addEventListener('mouseleave', Swal.resumeTimer)
        //     // }
        //   })

        //   Toast.fire({
        //     icon: 'success',
        //     title: '¡Completa este formulario para probar <strong>Escala</strong> ahora!'
        //   })



    });

}

function showTestimonials(type) {

    var l = jQuery('#landing-AllInOne-bootstrap .testimonial');


    if (l.length > 0) {

        if (type == 'show') {

            l.each((idx, element) => {

                jQuery(element).css({
                    'display': 'block'
                });

            });

            jQuery('.showMore').remove();

        }

        if (type == 'hide') {

            l.each((idx, element) => {


                if (idx > 2) {

                    jQuery(element).css({
                        'display': 'none'
                    });

                }
            });

        }

    }

}


function removeYoutubeElements(type){

    var aux = jQuery(type) || null;
    if( (aux != null && aux != undefined) ){

        try {

        jQuery(type).remove();
        } catch (error) {
            console.error('no se pudo retirar ', type);
        }

    }

}



function instanceYoutube() {

    var youtube = document.querySelectorAll(".youtube");

    if(youtube.length > 0){

    for (var i = 0; i < youtube.length; i++) {

        var x = jQuery(youtube[i]).attr('videoCover');

        var source = '';

        if(x != null && x != undefined){
            source = x;
        }else{
            source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/maxresdefault.jpg";
            // source = "https://i3.ytimg.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";

            // https://i3.ytimg.com/vi/AHgA0QTtWBY/maxresdefault.jpg
        }

        var image = new Image();
        image.src = source;
        image.addEventListener("load", function () {
            youtube[i].appendChild(image);
        }(i));

        youtube[i].addEventListener("click", function () {

            var iframe = document.createElement("iframe");

            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute("allow", "autoplay");
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?showinfo=0&amp;rel=0&amp;enablejsapi=1&autoplay=1");

            this.innerHTML = "";
            this.appendChild(iframe);
        });
    };

    }

    if( jQuery('.video-js').length > 0 ){

         var aux_video = jQuery('.video-js');



    for (var i = 0; i < aux_video.length; i++) {


     videojs( jQuery(aux_video[i])[0]  /* or selector string */, {

        techOrder: ['html5', 'flash'],
        controls: false,
        autoplay: false,
        preload: 'false'

        // flash: {
        //     swf: 'video-js.swf'
        // }
    }, function(){
        // Player (this) is initialized and ready.
        this.on('pause', function(){
            console.log('ended', this);

        });
        this.on('ended', function(){
            console.log('ended', this);

            this.posterImage.show(); //shows your poster image//
            this.currentTime(0);
            this.controlBar.hide(); //hides your controls//
            this.bigPlayButton.show(); //shows your play button//
            // this.hasStarted(false);

        });

        this.on("play", function()  //function to play the video again//
        {
            console.log('play', this);
            this.posterImage.hide(); //hides your poster//
            this.controlBar.show(); //shows your controls//
            this.bigPlayButton.hide(); //hides your play button//
        });
    });

    }
    }

}


function setInitSlizeButton(){

    if( !jQuery('[slizeRadioButton]').length > 0 ){

        return;

    }

    console.log('seteado el slize button');

    let pillButtonOnText = jQuery('.pill-button-selection_on'),
    pillButtonOffText = jQuery('.pill-button-selection_off'),
    pillButtonHighlight = jQuery('.pill-button-highlight'),
    pillButtonOnTextWidth = pillButtonOnText.outerWidth(),
    pillButtonOffTextWidth = pillButtonOffText.outerWidth(),
    pillButtonOnTextPosition = pillButtonOnText.position(),
    pillButtonOffTextPosition = pillButtonOffText.position(),
    pillButtonInput = jQuery('.pill-button-input');

jQuery('.pillButtonHighlight').css('width', pillButtonOnTextWidth);

jQuery('.pill-button-selection').on('click', function() {
  if(!jQuery(this).hasClass('pill-button-selection_active')) {

    jQuery('.pill-button-selection').removeClass('pill-button-selection_active');
    jQuery(this).addClass('pill-button-selection_active');

    jQuery('input.pill-button-input')[0].click();

    // if(jQuery(this).hasClass('pill-button-selection_off') && pillButtonInput.prop('checked',true)) {
    if(jQuery(this).hasClass('pill-button-selection_off') && pillButtonInput.prop('checked',true)) {

    //   pillButtonInput.prop('checked',false);
      pillButtonHighlight.css({
        'width': pillButtonOffTextWidth,
        // 'left': pillButtonOffTextPosition.left
        'left': 'unset',
        'right': 0
      });
      console.log("Is Checked - OFF");
    }
    else {
    //   pillButtonInput.prop('checked',true);
      pillButtonHighlight.css({
        'width': pillButtonOnTextWidth,
        // 'left': pillButtonOnTextPosition.left
        'left': 0,
        'right': 'unset'
      });
      console.log("Is Checked - ON");
    }

  }
});

// if(pillButtonInput.prop('checked',true)) {// default on cold start
//   console.log('is checked - cold start');
//   pillButtonHighlight.css('width', pillButtonOnTextWidth);
// } else {
//   console.log('is not checked - cold start');
//   pillButtonHighlight.css('width', pillButtonOffTextWidth);
// }

}


function preventResetForms(){


    jQuery(document).on('reset', 'form.wpcf7-form', function(e) {
        e.preventDefault();


        console.log('dispara reset form');
        jQuery('.ewp-phone-text').val('');



    });

        jQuery('.ewp-phone-text').on('focus click keypress', function () {

        if (this.value == '   -   -    ') {
            console.log('focus text phone');
            this.value = "";
            // jQuery('.ewp-phone-text').val('');
        }

    });




}





preventResetForms();

jQuery(document).ready(function () {

    setInnerElement();

    scrollToHash();

    window.onload = function () {
        setResize();
    }

    window.onscroll = function () { navScrollFixed() };

    closingSidebarClick();

    instanceYoutube();

    jQuery('.customHeader .dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn(100);
    }, function() {
        jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(200).fadeOut(200);
    });


    setInitSlizeButton();


    jQuery(".hoverClick").hover(function(){

        jQuery(this).click();

        }, function(){

    });


});



