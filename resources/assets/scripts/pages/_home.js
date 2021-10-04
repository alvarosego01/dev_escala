
var mobile = false;



function initMode(){

    var l = jQuery( document ).width();

    if( l <= 991 ){

        mobile = true;

    }
    if( l > 991 ){

        mobile = false;

    }

}

function showTestimonials(type){

    var l = jQuery('.homeSection6 .testimonial');


    if(l.length > 0){

        if(type == 'show'){

            l.each((idx, element) => {

                jQuery(element).css({
                    'display': 'block'
                });

            });

            jQuery('.showMore').remove();

        }

        if(type == 'hide'){

            l.each((idx, element) => {


                if(idx > 2){

                    jQuery(element).css({
                        'display': 'none'
                    });

                }
            });

        }

    }

}

jQuery(document).ready(function () {



    initMode();

    jQuery(document).on('show.bs.collapse','#accordionPanelsFAQ',function (e){



        var l = jQuery('div#accordionPanelsFAQ');

        if (l.height() > 1200) {

            jQuery('img.overlay3').css({

                'display': 'block'

            })

        }else{

            jQuery('img.overlay3').css({

                'display': 'none'

            })
        }



    });
    jQuery(document).on('hide.bs.collapse','#accordionPanelsFAQ',function (e){



        var l = jQuery('div#accordionPanelsFAQ');

        if (l.height() > 1200) {

            jQuery('img.overlay3').css({

                'display': 'block'

            })

        }else{

            jQuery('img.overlay3').css({

                'display': 'none'

            })
        }



    });


    if(mobile == true){

        showTestimonials('hide');

    }


});