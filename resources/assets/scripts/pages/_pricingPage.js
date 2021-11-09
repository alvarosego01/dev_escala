


var calculate = null;

var device = null;

// costos planes
const _costStarter = 30;
const _costPro = 45;


// costos individuales
var _contacts = {}
var _users = {}

// descuentos
var discount = 0;

// costo final
var costFinal = 0;
var costNoDiscount = 0;

// type plan
var typePlan = 'yearly';

// escala de costos contactos

var escalaContactsStarter = [
    30,
    15,
    15,
    15,
    15,
    10,
    10,
    10,
    10,
    10,
    7,
    7,
    7,
    7,
    7,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    // 3,
]

var escalaContactsPro = [
    45,
    15,
    15,
    15,
    15,
    10,
    10,
    10,
    10,
    10,
    7,
    7,
    7,
    7,
    7,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    5,
    // 3,
]


function getContactScale(n) {

    var l = {
        starter: 0,
        pro: 0
    }


    if (n <= 25) {
        for (let index = 0; index < n; index++) {

            l.starter = l.starter + escalaContactsStarter[index];
            l.pro = l.pro + escalaContactsPro[index];

        }
    }

    if (n >= 26) {

        for (let index = 0; index < 25; index++) {

            l.starter = l.starter + escalaContactsStarter[index];
            l.pro = l.pro + escalaContactsPro[index];

        }

        var x = n - 25;

        l.starter = l.starter + (x * 3);
        l.pro = l.pro + (x * 3);

    }

    return l;

}

function converContacts(contacts) {

    var l = contacts / 1000;
    l = Math.trunc(l);


    var cost = {
        starter: getContactScale(l).starter,
        pro: getContactScale(l).pro,
    };

    return cost;

}


function convertUsers(data) {

    // _contactsField: "3000"
    // _rangeContacts: "7"
    // _typePlan: "starter"
    // _userAccess: "5"

    if (data._typePlan == 'starter') {

        if (data._userAccess > 1) {

            var starter = (data._userAccess - 1) * 15;
            var pro = (data._userAccess - 1) * 15 - 15;

            return {
                starter: starter,
                pro: pro,
            }

        } else {

            return {
                starter: 0,
                pro: 0
            };

        }
    }

    if (data._typePlan == 'pro') {

        if (data._userAccess > 2) {

            var starter = (data._userAccess - 1) * 15;
            var pro = (data._userAccess - 1) * 15 - 15;

            return {
                starter: starter,
                pro: pro,
            }

        } else {

            return {
                starter: 0,
                pro: 0
            };

        }

    }


}




function typeCustomPay(type, e) {



    jQuery('.selectorPricingButton').removeClass('active');
    jQuery(e).addClass('active');

    typePlan = type;

    var f = jQuery('form#formCalcGeneral');
    calculate = _serializeFormToObject(f);


    calculateFinal(calculate);

}

function redondeaAlAlza(x,r) {
    xx = Math.floor(x/r)
    if (xx!=x/r) {xx++}
    return (xx*r)
}




function percentOfRange(value, lowLimit, limit, type, completeLowLimit, completeLimit) {

    if (type == 'rangeToNumber') {


        if (value == 0) {

            jQuery('.contactsField').val(1000);
            return 1000;
        }

        // var valToPerc =  100*value/total;

        var valToPerc = ((value - lowLimit) / (limit - lowLimit)) * 100;


        var PercTonumber = (completeLimit - completeLowLimit) * (valToPerc / 100) + completeLowLimit;


        PercTonumber = Math.trunc(PercTonumber);

        PercTonumber = redondeaAlAlza(PercTonumber, -1000);


        jQuery('.contactsField').val(PercTonumber);


        return PercTonumber;

    }



}


function calculateRangeValue(data) {

    var range = 0;

    range = (device == 'desktop')? data._rangeContacts[0] : data._rangeContacts[1];


        if (range >= 0 && range <= 25) {

            return percentOfRange(range, 0, 25, 'rangeToNumber', 1000, 25000);

        }
        if (range >= 25 && range <= 50) {

            return percentOfRange(range, 24, 48, 'rangeToNumber', 25000, 50000);

        }

        if (range >= 50 && range <= 75) {

            return percentOfRange(range, 48, 73, 'rangeToNumber', 50000, 75000);
        }

        if (range >= 75 && range <= 100) {

            return percentOfRange(range, 73, 100, 'rangeToNumber', 75000, 100000);
        }


}



function calculateFinal(data) {

    // _contactsField: "3000"
    // _rangeContacts: "7"
    // _typePlan: "starter"
    // _userAccess: "5"

    _contacts = converContacts(data._contactsField);
    _users = convertUsers(data);

    console.log('lo que llega', data);


    if (typePlan == 'monthly') {


        if (data._typePlan == 'starter') {

            costFinal = _contacts.starter + _users.starter;
            discount = 0;

        }
        if (data._typePlan == 'pro') {
            costFinal = _contacts.pro + _users.pro;
            discount = 0;
        }

        jQuery('.offert').css({
            'visibility': 'hidden'
        })

    }

    if (typePlan == 'yearly') {

        if (data._typePlan == 'starter') {

            costFinal = _contacts.starter + _users.starter;


        }

        if (data._typePlan == 'pro') {

            costFinal = _contacts.pro + _users.pro;

        }
        discount = costFinal * 0.20;
        costNoDiscount = costFinal;
        costFinal = costFinal - discount;
        discount = discount.toFixed(2);
        costNoDiscount = costNoDiscount.toFixed(2);
        costFinal = costFinal.toFixed(2);


        jQuery('.offert').css({
            'visibility': 'visible'
        })


        jQuery('#priceDotted').text('$USD ' + costNoDiscount + ' Anual');
        jQuery('#priceSaves').text('Ahorras USD $' + discount);
    }

    jQuery('#finalPriceCalc').text('USD $' + costFinal);



}


function actionInfoCards(type){

    if(type == 'open'){

        jQuery('.extendButton').css({
            'display': 'none'
        });

        jQuery('.hideButton').css({
            'display': 'block'
        });

        jQuery('.featuresPrice').css({
            'display': 'none'
        });

        jQuery('.featuresPrice.extendDetails').css({
            'display': 'block'
        });


    }

    if(type == 'close'){

        jQuery('.hideButton').css({
            'display': 'none'
        });

        jQuery('.extendButton').css({
            'display': 'block'
        });

        jQuery('.featuresPrice').css({
            'display': 'block'
        });

        jQuery('.featuresPrice.extendDetails').css({
            'display': 'none'
        });




    }

}

planCheck = null;
function discountByPlanCard(type, element){

    if(type != null){
        if(element.checked == true){

            if(jQuery('[typePlan='+ type +']').length > 0){

                if(planCheck != null && planCheck != type){

                    var l = jQuery('#' + planCheck + ' .modePlanSelect').click();

                }

                planCheck = type;

                jQuery('#' + planCheck + ' .'+ type).css({
                    'display': 'block'
                });
                jQuery('#' + planCheck + ' .numerCost').css({
                    'display': 'none'
                });
                jQuery('[typePlan='+ type +']').css({
                    'display': 'block'
                });
                jQuery('#'+ type +' .usd').css({
                    'display': 'none'
                });
                jQuery('.price').css({
                    'margin-bottom': '60' + 'px'
                });

            }
        }
        if(element.checked == false){

            if(jQuery('[typePlan='+ type +']').length > 0){
            jQuery('[typePlan='+ type +']').css({
                'display': 'none'
            });
            jQuery('#'+ type +' .usd').css({
                'display': 'block'
            });

            jQuery('.price').css({
                'margin-bottom': '25' + 'px'
            });

            jQuery('#' + planCheck + ' .'+ type).css({
                'display': 'none'
            });
            jQuery('#' + planCheck + ' .numerCost').css({
                'display': 'block'
            });

            planCheck = null;

            }

        }
    }

}


jQuery(document).ready(function () {


    device = deviceType();


    jQuery("input[type=range]").load(function (e) {
        // Handler for .load() called.

        var val = (jQuery(this).val() - jQuery(this).attr('min')) / (jQuery(this).attr('max') - jQuery(this).attr('min'));
        var percent = val * 100;

        jQuery(this).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #F34F36), ' +
            'color-stop(' + percent + '%, #d3d3d3)' +
            ')');

        jQuery(this).css('background-image',
            '-moz-linear-gradient(left center, #F34F36 0%, #F34F36 ' + percent + '%, #d3d3d3 ' + percent + '%, #d3d3d3 100%)');
    });




    jQuery("input[type=range]").on("input change", function (e) {

        var val = (jQuery(this).val() - jQuery(this).attr('min')) / (jQuery(this).attr('max') - jQuery(this).attr('min'));
        var percent = val * 100;

        jQuery(this).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #F34F36), ' +
            'color-stop(' + percent + '%, #d3d3d3)' +
            ')');

        jQuery(this).css('background-image',
            '-moz-linear-gradient(left center, #F34F36 0%, #F34F36 ' + percent + '%, #d3d3d3 ' + percent + '%, #d3d3d3 100%)');
    });


    jQuery("form#formCalcGeneral").change(function (e) {
        e.preventDefault();

        console.log('e.currentTarget',e.currentTarget);

        calculate = _serializeFormToObject(e.currentTarget)

        if (jQuery(e.target).is('.rangeContacts')) {

            console.log('e.target',e.target);
            calculate._contactsField = calculateRangeValue(calculate);

        }

        calculateFinal(calculate);

        var m = jQuery('input.contactsField').val();
        if( m < 2000 ){

            jQuery('input#checkPro').attr('disabled', true);

            jQuery('input#checkStarter').click();

        }

        if( m >= 2000 ){

            jQuery('input#checkPro').attr('disabled', false);

        }





    });



});
