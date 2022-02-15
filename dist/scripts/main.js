

function parametersToRedirect(redirect, params) {

    return new Promise( (resolve, reject), () => {

        let aux = redirect;
        if (redirect.includes("{{-- special --}}")) {

            aux = aux.replace("{{-- special --}}", "");

            let email = params.filter( ( r ) => {
                if (r.name == 'your-email') {
                    return r.value;
                }
            });

            if ((email != null) && (email[0] != null) && (email[0].value != 0)) {

                let e = email[0].value;
                e = Base64.encode(e);
                aux = aux.replace("{{-- email64 --}}", e);

            }

            aux = aux.replace("{{-- leadSignUp --}}", 'trial');
            aux = aux.replace(/\s+/g, '');

        }

        resolve(aux);

    });

}


jQuery(document).ready(function () {

    document.addEventListener('wpcf7mailsent', async function (e) {

        let inputs = e['detail']['inputs'];
        let l = e.path;
        let re = null;

        console.log('var event inputs', inputs);

        window.dataLayer.push({
            "event": "cf7submission",
            "formId": event.detail.contactFormId,
            "response": event.detail.inputs
        });

        let specialRedirect = inputs.filter( (r) => {
            if (r.name == 'special-redirect') {
                return r.value;
            }
        });

        if ((specialRedirect != null) && (specialRedirect[0] != null) && (specialRedirect[0].value != 0)) {

            re = specialRedirect[0].value;

        }

        // redirect
        if (typeof (dataPHP) !== 'undefined') {

            if (dataPHP.redirect) {

                re = dataPHP.redirect;

            }

        }

        if ( document.querySelector("#redirectParam") != null) {

            // re = jQuery('#redirectParam').val();
            let _z = document.querySelector("#redirectParam")
            re = _z.value;

        }

        console.log('prev red' + re);

        if (re && re != null && re != '') {

            re = await parametersToRedirect(re, inputs).then( (r) => {
                return r;
            });
            console.log('redirect form sent', re);

            window.location.href = re;

        }


    }, false);

    document.addEventListener('wpcf7mailfailed', function (e)  {

        let inputs = e['detail']['inputs'];
        let l = e.path;
        let re = null;

        console.log('var event inputs', inputs);

        window.dataLayer.push({
            "event": "cf7submission",
            "formId": event.detail.contactFormId,
            "response": event.detail.inputs
        });

        let specialRedirect = inputs.filter( (r) => {
            if (r.name == 'special-redirect') {
                return r.value;
            }
        });

        if ((specialRedirect != null) && (specialRedirect[0] != null) && (specialRedirect[0].value != 0)) {

            re = specialRedirect[0].value;

        }

        // redirect
        if (typeof (dataPHP) !== 'undefined') {

            if (dataPHP.redirect) {

                re = dataPHP.redirect;

            }

        }

        if ( document.querySelector("#redirectParam") != null) {

            // re = jQuery('#redirectParam').val();
            let _z = document.querySelector("#redirectParam")
            re = _z.value;

        }

        console.log('prev red' + re);

        if (re && re != null && re != '') {

            re = await parametersToRedirect(re, inputs).then( (r) => {
                return r;
            });

            console.log('redirect form failed', re);

            // window.location.href = re;
        }

    }, false);



  });
