

function parametersToRedirect(redirect, params) {

    let aux = redirect;

        aux = aux.replace("{{-- special --}}", "");

        let email = params.filter( ( r ) => {
            if (r.name == 'your-email') {
                return r.value;
            }
        });

        if ((email != null) && (email[0] != null) && (email[0].value != 0)) {

            if (redirect.includes("{{-- email64 --}}")){

                let e = email[0].value;
                e = Base64.encode(e);
                console.log('email', e)
                e = encodeURIComponent(e);
                console.log('email', e)
                aux = aux.replace("{{-- email64 --}}", e);

            }

        }

        if (redirect.includes("{{-- leadSignUp --}}")){

            aux = aux.replace("{{-- leadSignUp --}}", 'trial');
            aux = aux.replace(/\s+/g, '');

        }

    return aux;

}


jQuery(document).ready(function () {

document.addEventListener('wpcf7mailsent', async (e) => {

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

    console.log('specialRedirect',specialRedirect);

    if ( (specialRedirect != null) && (specialRedirect[0] != null) && (specialRedirect[0].value != 0) ) {

        re = specialRedirect[0].value;

    }

    // redirect
    if (typeof (dataPHP) !== 'undefined' && re == null) {

        if (dataPHP.redirect) {

            re = dataPHP.redirect;

        }

    }

    if ( document.querySelector("#redirectParam") != null && re == null) {

        // re = jQuery('#redirectParam').val();
        let _z = document.querySelector("#redirectParam")
        re = _z.value;

    }

    console.log('prev red' + re);

    if (re && re != null && re != '') {
        console.log('prev 1 red' + re);

        re = parametersToRedirect(re, inputs);
        console.log('redirect form sent', re);

        window.location.href = re;

    }

}, false);

document.addEventListener('wpcf7mailfailed', async (e) =>  {

   let inputs = e['detail']['inputs'];
    let l = e.path;
    let re = null;

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

    console.log('specialRedirect',specialRedirect);

    if ( (specialRedirect != null) && (specialRedirect[0] != null) && (specialRedirect[0].value != 0) ) {

        re = specialRedirect[0].value;

    }

    // redirect
    if (typeof (dataPHP) !== 'undefined' && re == null) {

        if (dataPHP.redirect) {

            re = dataPHP.redirect;

        }

    }

    if ( document.querySelector("#redirectParam") != null && re == null) {

        // re = jQuery('#redirectParam').val();
        let _z = document.querySelector("#redirectParam")
        re = _z.value;

    }

    console.log('prev red' + re);

    if (re && re != null && re != '') {
        console.log('prev 1 red' + re);

        re = parametersToRedirect(re, inputs);
        console.log('redirect form sent', re);

        window.location.href = re;

    }

}, false);


});