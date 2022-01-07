
console.log('popup.js');

// $("html, body").animate({ scrollTop: 0 }, "slow");

function modalScrollTop() {

    jQuery("html, body").animate({ scrollTop: 0 }, "slow");

    console.log('scroll top');

}

jQuery(document).ready(function () {

    // redirect
    if (typeof (popup_config) !== 'undefined') {
        console.log('popup_config', popup_config);
        if (popup_config.type && popup_config.type == 'onload_webpage') {

            console.log('abre al cargar');
            jQuery('[indexpopupbutton]')[0].click();

        }

        if (popup_config.type && popup_config.type == 'on_seconds') {

            if(popup_config.seconds){

                setTimeout( () => {

                    console.log('abre a los segundos ', popup_config.seconds * 1000 );
                    jQuery('[indexpopupbutton]')[0].click();

                }, popup_config.seconds * 1000 );

            }
        }

    }

    jQuery(document).on('hide.bs.modal', function () {

        modalScrollTop();

    });

    // popUpOpenButton popup-general-t1
    jQuery('.openPopUpButton').click(function (e) {

        e.preventDefault();

        var classList = [];

        e.currentTarget.classList.forEach(r => {
            classList.push(r);
        });

        console.log('e', classList);

        var popupID = null;

        if (classList && classList.length > 0) {

            var i = classList.findIndex(r => {

                // str1.startsWith('Sat')
                if (r.startsWith('popup-')) {
                    return r;
                }

            });

            console.log('i', i);

            if (i) {

                popupID = classList[i];
                // popUpOpenButton
                if (popupID != null) {

                    // jQuery('.popUpOpenIndexButton[popUp="popup-general-t1"]').click();
                    jQuery('[indexpopupbutton][popup="'+ popupID +'"]')[0].click();

                }

            }

        }

    });

});

