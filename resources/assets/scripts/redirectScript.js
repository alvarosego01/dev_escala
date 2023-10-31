

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
                e = encodeURIComponent(e);
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

      document.addEventListener('nextStep_form', function(e) {
        console.log('se emite este avance');
  });


document.addEventListener('wpcf7submit', async (e) => {

    console.log('se hace submit');

});
document.addEventListener('wpcf7mailsent', async (e) => {

      console.log('sent c7f')

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

    if(re === 'next_step') {

        jQuery(document).trigger('nextStep_form', true)
        return;
    }

    // return;

    if (re && re != null && re != '') {

        re = parametersToRedirect(re, inputs);

        window.location.href = re;

    }

}, false);

document.addEventListener('wpcf7mailfailed', async (e) =>  {

    console.log('failed c7f')

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

    if(re === 'next_step') {

        jQuery(document).trigger('nextStep_form', true)
        return;
    }
    // return;

    if (re && re != null && re != '') {

        re = parametersToRedirect(re, inputs);

        window.location.href = re;

    }

}, false);


});