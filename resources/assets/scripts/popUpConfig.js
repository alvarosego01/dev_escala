

// $("html, body").animate({ scrollTop: 0 }, "slow");

function modalScrollTop() {

    jQuery("html, body").animate({ scrollTop: 0 }, "slow");


}

jQuery(document).ready(function () {

    // redirect
    if (typeof (popup_config) !== 'undefined') {
        if (popup_config.type && popup_config.type == 'onload_webpage') {

            jQuery('[indexpopupbutton]')[0].click();

        }

        if (popup_config.type && popup_config.type == 'on_seconds') {

            if (popup_config.seconds) {

                setTimeout(function () {

                    jQuery('[indexpopupbutton]')[0].click();

                }, popup_config.seconds * 1000);

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

        e.currentTarget.classList.forEach(function (r) {
            classList.push(r);
        });

        var popupID = null;

        if (classList && classList.length > 0) {

            var i = classList.findIndex(function (r) {

                // str1.startsWith('Sat')
                if (r.startsWith('popup-')) {
                    return r;
                }

            });

            if (i) {

                popupID = classList[i];
                // popUpOpenButton
                if (popupID != null) {


                    if (jQuery('[indexpopupbutton][popup="' + popupID + '"]').length > 0) {

                        jQuery('[indexpopupbutton][popup="' + popupID + '"]')[0].click();

                    }
                }

            }

        }

    });

});

