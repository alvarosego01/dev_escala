

function parametersToRedirect( redirect, params ){

    return new Promise((resolve, reject) => {


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

    resolve(aux);
});

}

jQuery(document).ready(function () {

    if( jQuery('#redirectParam').val() != null ){

        console.log('redirect on tag', jQuery('#redirectParam').val());

    }

    document.addEventListener('wpcf7mailsent', async function (e) {

        let inputs = e['detail']['inputs'];
        let l = e.path;
        let re = null;

        console.log('que es l', l);

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


        if( jQuery('#redirectParam').val() != null ){

            re = jQuery('#redirectParam').val();

        }

            var x = jQuery(l[1]).attr('redirectWeb');
            console.log('x', x);
            if (x == 'true') {
                console.log('redirect true');

                if (re && re != null && re != '') {

                    re = await parametersToRedirect( re, inputs ).then(r => {
                        return r;
                    });
                    console.log('redirect form sent', re);

                    window.location.replace(re);

                }

            }


        //   var encodedStr = Base64.encode( email );
        //   console.log("Encoded string:", encodedStr);

        //   var decodedStr = Base64.decode(encodedStr)
        //   console.log("Decoded string:", decodedStr);

        // {{-- special --}} https://app.escala.com/app/activation/survey/{{-- email64 --}}/{{-- leadSignUp --}}

    }, false);

    document.addEventListener('wpcf7mailfailed', async function (e) {

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

        if( jQuery('#redirectParam').val() != null ){

            re = jQuery('#redirectParam').val();

        }

            var x = jQuery(l[1]).attr('redirectWeb');
            console.log('x', x);
            if (x == 'true') {
                console.log('redirect true');

                if (re && re != null && re != '') {

                    re = await parametersToRedirect( re, inputs ).then(r => {
                        return r;
                    });

                    console.log('redirect form failed', re);

                    // window.location.replace(re);
                }

            }



    }, false);




});