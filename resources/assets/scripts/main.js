

function parametersToRedirect( redirect, params ){

    let aux = redirect;
    if( redirect.includes("{{-- special --}}") ){

        aux = aux.replace("{{-- special --}}", "");

        let email = params.filter(r => {
            if (r.name == 'your-email') {
                return r.value;
            }
        });

        if ( (email != null) && (email[0] != null) &&  (email[0].value != 0) ) {

            let e = email[0].value;
            e = Base64.encode( e );
            aux = aux.replace("{{-- email64 --}}", e);

        }

        aux = aux.replace("{{-- leadSignUp --}}", 'trial');
        aux = aux.replace(/\s+/g, '');

    }

    return aux;

}

jQuery(document).ready(function () {

    document.addEventListener('wpcf7mailsent', function (e) {

        let inputs = e['detail']['inputs'];
        let l = e.path;
        let re = null;

        window.dataLayer.push({
            "event": "cf7submission",
            "formId": event.detail.contactFormId,
            "response": event.detail.inputs
        });

        let specialRedirect = l.filter(r => {
            if (r.name == 'special-redirect') {
                return r.value;
            }
        });

        if ( (specialRedirect != null) && (specialRedirect[0] != null) &&  (specialRedirect[0].value != 0) ) {

            re = specialRedirect[0].value;

        }

        // redirect
        if (typeof (dataPHP) !== 'undefined') {

            if (dataPHP.redirect) {

                re = dataPHP.redirect;

            }

        }

        if (jQuery(l[1]).attr('redirectWeb')) {

            var x = jQuery(l[1]).attr('redirectWeb');
            if (x == 'true') {

                if (re && re != null && re != '') {

                    re = parametersToRedirect( re, inputs );

                    console.log('redirect', re);

                    window.location.replace(re);
                }

            }

        }

        //   var encodedStr = Base64.encode( email );
        //   console.log("Encoded string:", encodedStr);

        //   var decodedStr = Base64.decode(encodedStr)
        //   console.log("Decoded string:", decodedStr);

        // {{-- special --}} https://app.escala.com/app/activation/survey/{{-- email64 --}}/{{-- leadSignUp --}}

    }, false);

    /*
    document.addEventListener('wpcf7mailfailed', function (e) {

        let inputs = e['detail']['inputs'];
        let l = e.path;
        let re = null;

        window.dataLayer.push({
            "event": "cf7submission",
            "formId": event.detail.contactFormId,
            "response": event.detail.inputs
        });

        let specialRedirect = l.filter(r => {
            if (r.name == 'special-redirect') {
                return r.value;
            }
        });

        if ( (specialRedirect != null) && (specialRedirect[0] != null) &&  (specialRedirect[0].value != 0) ) {

            re = specialRedirect[0].value;

        }

        // redirect
        if (typeof (dataPHP) !== 'undefined') {

            if (dataPHP.redirect) {

                re = dataPHP.redirect;

            }

        }

        if (jQuery(l[1]).attr('redirectWeb')) {

            var x = jQuery(l[1]).attr('redirectWeb');
            if (x == 'true') {

                if (re && re != null && re != '') {

                    re = parametersToRedirect( re, inputs );

                    console.log('redirect', re);

                    window.location.replace(re);
                }

            }

        }

        //   var encodedStr = Base64.encode( email );
        //   console.log("Encoded string:", encodedStr);

        //   var decodedStr = Base64.decode(encodedStr)
        //   console.log("Decoded string:", decodedStr);

        // {{-- special --}} https://app.escala.com/app/activation/survey/{{-- email64 --}}/{{-- leadSignUp --}}

    }, false);
    */

});