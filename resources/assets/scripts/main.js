

jQuery(document).ready(function () {

    if( typeof(dataPHP) !== 'undefined' ){

        if ( dataPHP.redirect) {

        var re = dataPHP.redirect;
        // document.addEventListener( 'wpcf7mailsent', function( e ) {
            document.addEventListener('wpcf7mailsent', function (e) {

                var l = e.path;
                window.dataLayer.push({
                    "event": "cf7submission",
                    "formId": event.detail.contactFormId,
                    "response": event.detail.inputs
                });

            if (jQuery(l[1]).attr('redirectWeb')) {

                var x = jQuery(l[1]).attr('redirectWeb');

                if (x == 'true') {

                    console.log('redirect', x);
                    if (re && re != null && re != '') {
                        window.location.replace(re);
                    }

                }

            }

        }, false);


    }

}

});