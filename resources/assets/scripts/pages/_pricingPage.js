

console.log('pricing page js');

var calculate = null;

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
    10,
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
    25,
    25,
    25,
    20,
    20,
    20,
    20,
    20,
    20,
    14,
    14,
    14,
    14,
    14,
    10,
    10,
    10,
    10,
    10,
    8,
    8,
    8,
    8,
    8,
    // 5,
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
        l.pro = l.pro + (x * 5);

    }

    return l;

}

function converContacts(contacts) {

    var l = contacts / 1000;
    l = Math.trunc(l);

    console.log('contact que entran', contacts);

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


    console.log('event', e);

    jQuery('.selectorPricingButton').removeClass('active');
    jQuery(e).addClass('active');

    typePlan = type;

    var f = jQuery('form#formCalcGeneral');
    calculate = _serializeFormToObject(f);


    calculateFinal(calculate);

}

function percentOfRange(value, lowLimit, limit, type, completeLowLimit, completeLimit) {

    if (type == 'rangeToNumber') {


        if (value == 0) {

            jQuery('#contactsField').val(1000);
            return 1000;
        }

        // var valToPerc =  100*value/total;

        var valToPerc = ((value - lowLimit) / (limit - lowLimit)) * 100;

        // var PercTonumber = (valToPerc*completeLimit)/100;
        var PercTonumber = (completeLimit - completeLowLimit) * (valToPerc / 100) + completeLowLimit;

        PercTonumber = Math.trunc(PercTonumber);

        jQuery('#contactsField').val(PercTonumber);


        return PercTonumber;

    }



}


function calculateRangeValue(data) {

    var range = 0;

    range = data._rangeContacts;


        return percentOfRange(range, 0, 100, 'rangeToNumber', 1000, 100000);




}



function calculateFinal(data) {

    // _contactsField: "3000"
    // _rangeContacts: "7"
    // _typePlan: "starter"
    // _userAccess: "5"

    _contacts = converContacts(data._contactsField);
    _users = convertUsers(data);

    // console.log('la data _contacts', _contacts);
    console.log('la data _users', _users);

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
        discount = costFinal * 0.30;
        costNoDiscount = costFinal;
        costFinal = costFinal - discount;
        discount = discount.toFixed(2);
        costNoDiscount = costNoDiscount.toFixed(2);
        costFinal = costFinal.toFixed(2);

        console.log('costo final', costFinal);
        console.log('costo descuento', discount);

        jQuery('.offert').css({
            'visibility': 'visible'
        })


        jQuery('#priceDotted').text('$USD ' + costNoDiscount + ' Anual');
        jQuery('#priceSaves').text('Ahorras USD $' + discount);
    }

    jQuery('#finalPriceCalc').text('USD $' + costFinal);



}

jQuery(document).ready(function () {

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

        console.log('campo', e.target);
        calculate = _serializeFormToObject(e.currentTarget)

        if (jQuery(e.target).is('#rangeContacts')) {

            calculate._contactsField = calculateRangeValue(calculate);

        }

        calculateFinal(calculate);





    });



});
