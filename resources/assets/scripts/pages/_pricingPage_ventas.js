

console.log('pricing ventas');

var planSelect = null;

var calculate = null;

var device = null;

var typeProcess = 0;

// costos planes
var _costStarter = 30;
var _costPro = 135;


// costos individuales
var _contacts = {}
var _users = {}

// descuentos
var discount = 0;

// costo final
var costFinal = 0;
var costNoDiscount = 0;

// type plan
var typeplan = 'yearly';

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
    // 4

];


var escalaContactsPro = [

    55,
    20,
    20,
    20,
    20,
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
    // 4
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

        l.starter = l.starter + (x * 4);
        l.pro = l.pro + (x * 4);

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

    // _contactsField: "5000"
    // _rangeContacts: "7"
    // _typePlan: "starter"
    // _userAccess: "5"

    if (data._typePlan == 'starter') {

        if (data._userAccess[typeProcess] >= 2) {

            var starter = (data._userAccess[typeProcess] - 1) * 15;
            var pro = (data._userAccess[typeProcess] - 1) * 15;

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

        if (data._userAccess[typeProcess] >= 2) {

            var starter = (data._userAccess[typeProcess] - 1) * 15;
            var pro = ((data._userAccess[typeProcess] - 1) * 15);


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

    typeplan = type;

    var f = jQuery('form#formCalcGeneral');
    calculate = _serializeFormToObject(f);

    calculateFinal(calculate);

}

function selectPlanMobile(element, type) {

    // checkStarter
    // checkPro
    jQuery('.buttonSelectPlan-Mobile').removeClass('active');
    if (type == 'starter') {

        jQuery('#checkStarter')[0].click();

        jQuery(element).addClass('active');

    }

    if (type == 'pro') {

        jQuery('#checkPro')[0].click();

        jQuery(element).addClass('active');

    }


}

function redondeaAlAlza(x, r) {
    xx = Math.floor(x / r)
    if (xx != x / r) { xx++ }
    return (xx * r)
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

    range = data._rangeContacts[typeProcess];

    setAllField(range, '.rangeContacts');

    var aux = jQuery('.rangeContacts').attr('min_aux');
    aux = parseInt(aux);
    range = parseInt(range);

    if(range <= 95){
        range = range + aux;
    }


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


function revealMobileView(type = null, plan) {


    if (type != null) {


        if (type == 'open') {

            jQuery('#' + plan + ' .versionMobile2022 .preView').hide();
            jQuery('#' + plan + ' .versionMobile2022 .fullView').show();

        }
        if (type == 'close') {

            jQuery('#' + plan + ' .versionMobile2022 .fullView').hide();
            jQuery('#' + plan + ' .versionMobile2022 .preView').show();

            if (jQuery('.modePlanSelect')[0].checked == false) {


                // discountByPlanCard('plan1', jQuery('.modePlanSelect')[0] );


                jQuery('.modePlanSelect')[0].click();



            }

        }



    }

}




function calculateFinal(data) {

    // _contactsField: "5000"
    // _rangeContacts: "7"
    // _typePlan: "starter"
    // _userAccess: "5"
    _contacts = converContacts(data._contactsField[typeProcess]);
    _users = convertUsers(data);

    if (typeplan == 'monthly') {

        if (data._typePlan == 'starter') {

            costFinal = _contacts.starter + _users.starter;
            discount = 0;
            jQuery('form#formCalcGeneral .implementacion').removeClass('aux_visible');
            jQuery('form#formCalcGeneral .implementacion').addClass('aux_hidden');


            jQuery('form#formCalcGeneral .ahorro').removeClass('aux_visible');
            jQuery('form#formCalcGeneral .ahorro').addClass('aux_hidden');



        }
        if (data._typePlan == 'pro') {

            costFinal = _contacts.pro + _users.pro;
            discount = 0;
            jQuery('form#formCalcGeneral .implementacion').removeClass('aux_hidden');
            jQuery('form#formCalcGeneral .implementacion').addClass('aux_visible');



        }

        jQuery('.offert').css({
            'visibility': 'hidden'
        });

        jQuery('form#formCalcGeneral .discountExtra').removeClass('aux_visible');
        jQuery('form#formCalcGeneral .discountExtra').addClass('aux_hidden');


    }

    if (typeplan == 'yearly') {

        var priceTach = null;
        var priceAhorro = null
        if (data._typePlan == 'starter') {

            costFinal = _contacts.starter + _users.starter;
            priceTach = costFinal * 12;
            costFinal = costFinal * 12;
            jQuery('form#formCalcGeneral .implementacion').removeClass('aux_visible');
            jQuery('form#formCalcGeneral .implementacion').addClass('aux_hidden');

        }

        if (data._typePlan == 'pro') {

            costFinal = _contacts.pro + _users.pro;
            priceTach = costFinal * 12;
            costFinal = costFinal * 12;
            jQuery('form#formCalcGeneral .implementacion').removeClass('aux_hidden');
            jQuery('form#formCalcGeneral .implementacion').addClass('aux_visible');

        }

        discount = costFinal * 0.30;
        costNoDiscount = costFinal;
        costFinal = costFinal - discount;
        discount = discount.toFixed(2);
        costNoDiscount = costNoDiscount.toFixed(2);
        costFinal = costFinal.toFixed(2);

        costNoDiscount = trimDecimals(costNoDiscount);
        discount = trimDecimals(discount);

        jQuery('.offert').css({
            'visibility': 'visible'
        })

        jQuery('form#formCalcGeneral .ahorro').removeClass('aux_hidden');
        jQuery('form#formCalcGeneral .ahorro').addClass('aux_visible');
        jQuery('form#formCalcGeneral .ahorro ').text('Ahorras USD '+ discount +' al año');

        jQuery('form#formCalcGeneral .discountExtra').removeClass('aux_hidden');
        jQuery('form#formCalcGeneral .discountExtra').addClass('aux_visible');
        jQuery('form#formCalcGeneral .discountExtra .discounter').text('USD '+ priceTach +' / anual');

        jQuery('#priceDotted').text('USD ' + costNoDiscount + ' /mes');
        jQuery('#priceSaves').text('Ahorras USD ' + discount);
    }

    // var costFinal = 332.01;

    costFinal = trimDecimals(costFinal);

    jQuery('#finalPriceCalc').text('USD ' + costFinal );


}

function trimDecimals(costFinal) {


    if (Number(Number(costFinal).toFixed()) == Number(costFinal) / 1) {

        costFinal = Number(Number(costFinal).toFixed());


        return costFinal;

    } else {
        return costFinal;
    }

}

function actionInfoCards(type) {

    if (type == 'open') {

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

    if (type == 'close') {

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
function discountByPlanCard(type, element) {


    if (type != null) {

        if (element.checked == true) {

            if (jQuery('[typeplan=' + type + ']').length > 0) {


                // if(planCheck != null && planCheck != type){

                //     jQuery('#' + planCheck + ' .modePlanSelect').prop( "checked", false );

                //     jQuery('[typeplan='+ planCheck +']').css({
                //         'display': 'none'
                //     });
                //     jQuery('#'+ planCheck +' .usd').css({
                //         'display': 'block'
                //     });

                //     jQuery('#' + planCheck + ' .'+ planCheck).css({
                //             'display': 'none'
                //         });
                //         jQuery('#' + planCheck + ' .numerCost').css({
                //         'display': 'block'
                //     });

                // }

                jQuery('.modePlanSelect').prop("checked", true);

                jQuery('.discountCost').css({
                    'display': 'flex'
                });
                jQuery('.numerCost').css({
                    'display': 'none'
                });
                jQuery('[typeplan*="plan"]').css({
                    'display': 'block'
                });
                // jQuery('.usd').css({
                //     'display': 'none'
                // });
                jQuery('.ncost').css({
                    'display': 'block'
                });


                jQuery('.price').css({
                    'margin-bottom': '60' + 'px'
                });


                jQuery('#plan3.elementParent .middle .innerMiddle').removeClass('reduceDiv');


                // _costStarter = 24;
                // _costPro = 65;
                _costStarter = 21;
                _costPro = 95;

                jQuery('[calculator_price_starter]').text('USD ' + _costStarter);
                jQuery('[calculator_price_pro]').text('USD ' + _costPro);

                setEnableElements('pro');
                return;
            }


        }

        if (element.checked == false) {


            if (jQuery('[typeplan=' + type + ']').length > 0) {

                jQuery('.modePlanSelect').prop("checked", false);

                jQuery('.discountCost').css({
                    'display': 'none'
                });
                jQuery('.numerCost').css({
                    'display': 'block'
                });
                jQuery('[typeplan*="plan"]').css({
                    'display': 'none'
                });
                // jQuery('.usd').css({
                //     'display': 'block'
                // });
                jQuery('.ncost').css({
                    'display': 'none'
                });


                jQuery('.price').css({
                    'margin-bottom': '60' + 'px'
                });


                jQuery('#plan3.elementParent .middle .innerMiddle').addClass('reduceDiv');

                _costStarter = 30;
                _costPro = 135;

                jQuery('[calculator_price_starter]').text('USD ' + _costStarter);
                jQuery('[calculator_price_pro]').text('USD ' + _costPro);

                setEnableElements('starter');
                return;
            }


        }

    }


}


function planSelectProcess(plan) {

    if (plan == 'plan1') {

        jQuery('#checkStarter').click();
        planSelect = plan;
        jQuery('small[mobPlan]').text('Plan Starter');
        jQuery('[alertPlanPro]').css({
            'display': 'block'
        });
        setConfigModeSelect('starter')

    }

    if (plan == 'plan2') {

        jQuery('#checkPro').click();
        planSelect = plan;
        jQuery('small[mobPlan]').text('Plan Pro');
        jQuery('[alertPlanPro]').css({
            'display': 'block'
        });
        setConfigModeSelect('pro')

    }

    if (plan == 'plan3') {

        planSelect = plan;

        jQuery('[regularPlansCalc]').css({
            'display': 'none'
        });
        jQuery('[enterprisePlanCalc]').css({
            'display': 'block'
        });
        return;

    }

    jQuery('[regularPlansCalc]').css({
        'display': 'block'
    });
    jQuery('[enterprisePlanCalc]').css({
        'display': 'none'
    });

}


function setConfigModeSelect(element) {

    // starter
    // pro
    let l = jQuery(element).val();

    var range_value = jQuery('input.rangeContacts').val();
    var input_value = jQuery('input.contactsField').val();

    range_value = parseInt(range_value);
    input_value = parseInt(input_value);

    if (l == 'starter') {

        jQuery('.rangeContacts').attr('min_aux', '0');
        jQuery('.contactsField').attr('min', '1000');
        jQuery('.rangeContacts').css({
            'background-image': 'none'
        });

        jQuery('[scaleStarter]').css({
            'display': 'flex'
        });
        jQuery('[scalePro]').css({
            'display': 'none'
        });

        if (range_value > 0 &&
            input_value > 0
        ) {

            setAllField(range_value, '.rangeContacts');
            setAllField(input_value, '.contactsField');

        } else {
            // jQuery('.rangeContacts').val('0');
            // jQuery('.contactsField').val('1000');

            setAllField(0, '.rangeContacts');
            setAllField(1000, '.contactsField');

        }

        clickAllField('.rangeContacts');

    }

    if (l == 'pro') {

        jQuery('.rangeContacts').attr('min_aux', '5');
        jQuery('.contactsField').attr('min', '5000');
        jQuery('.rangeContacts').css({
            'background-image': 'none'
        });

        jQuery('[scaleStarter]').css({
            'display': 'none'
        });
        jQuery('[scalePro]').css({
            'display': 'flex'
        });

        if (range_value > 0 &&
            input_value >= 5000
        ) {

            setAllField(range_value, '.rangeContacts');
            setAllField(input_value, '.contactsField');

        } else {

            setAllField(0, '.rangeContacts');
            setAllField(5000, '.contactsField');


        }

        clickAllField('.rangeContacts');

    }

}

function preventContactField() {

    jQuery('input.contactsField').on('change click', function () {

        var number = jQuery(this).val();
        var min = jQuery(this).attr('min');

        number = parseInt(number);
        min = parseInt(min);


        if ( number < min || Number.isNaN(number) ) {
            number = min;
            jQuery('.rangeContacts').val(0);

            clickAllField('.rangeContacts');

            var rest = number % 1000;

            if (rest > 0) {
                number = number - rest + 1000;
            }

            // jQuery('input.contactsField').val(number);

            setAllField(number, 'input.contactsField');

            return;
        }

        var rest = number % 1000;

        if (rest > 0) {
            number = number - rest + 1000;
        }

        // jQuery('input.contactsField').val(number);
        setAllField(number, 'input.contactsField');

        var l = number / 1000;
        l = Math.trunc(l);

        if(min == 5000){
            l = l - 5;
        }

        jQuery('.rangeContacts').val(l);

        clickAllField('.rangeContacts');


    });

    jQuery('input.contactsField').on('keydown', function (ele) {

        if(event.key === 'Enter') {
            jQuery('#formCalcGeneral').trigger('_action');
            jQuery(this).click();
        }else{
            return;
        }

    });
    jQuery('input.userAccess').on('keydown', function (ele) {

        if(event.key === 'Enter') {
            jQuery(this).click();
            jQuery('#formCalcGeneral').trigger('_action');
        }else{
            return;
        }

    });

}

function setAllField(value, field){

    if( field != null ){

        var v = jQuery(field);

            if( v.length > 0 ){

                jQuery.each( v, function ( indexInArray, valueOfElement ) {

                    jQuery(valueOfElement).val(value);

                });

            }


    }

}
function clickAllField(field){

    if( field != null ){

        var v = jQuery(field);

            if( v.length > 0 ){

                jQuery.each( v, function ( indexInArray, valueOfElement ) {

                    jQuery(valueOfElement).click();

                });

            }

    }

}


function setEnableElements(type){


    jQuery('.anualElement').removeClass('aux_hidden');
    jQuery('.monthElement').removeClass('aux_hidden');

    if(type == 'pro'){

        jQuery('.anualElement').addClass('aux_visible');
        jQuery('.monthElement').addClass('aux_hidden');

    }
    if(type == 'starter'){

        jQuery('.monthElement').addClass('aux_visible');
        jQuery('.anualElement').addClass('aux_hidden');

    }

}


jQuery(document).ready(function () {

    jQuery('#checkPro').click();

    setEnableElements('pro');


    device = deviceType();

    preventContactField();

    jQuery('.modePlanSelect').click();
    jQuery('input.rangeContacts').click();

    jQuery("input[type=range]").on('load click change', function () {

        // Handler for .load() called.

        var val = (jQuery(this).val() - jQuery(this).attr('min')) / (jQuery(this).attr('max') - jQuery(this).attr('min'));
        var percent = val * 100;

        jQuery(this).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #97C7D1), ' +
            'color-stop(' + percent + '%, #D9EEF9)' +
            ')');

        jQuery(this).css('background-image',
            '-moz-linear-gradient(left center, #97C7D1 0%, #97C7D1 ' + percent + '%, #D9EEF9 ' + percent + '%, #D9EEF9 100%)');
    });


    jQuery("input[type=range]").on("input change", function (e) {

        var val = (jQuery(this).val() - jQuery(this).attr('min')) / (jQuery(this).attr('max') - jQuery(this).attr('min'));
        var percent = val * 100;

        jQuery(this).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + percent + '%, #97C7D1), ' +
            'color-stop(' + percent + '%, #D9EEF9)' +
            ')');

        jQuery(this).css('background-image',
            '-moz-linear-gradient(left center, #97C7D1 0%, #97C7D1 ' + percent + '%, #D9EEF9 ' + percent + '%, #D9EEF9 100%)');
    });


    jQuery("form#formCalcGeneral").on('change _action', async function (e) {

        e.preventDefault();

        if (jQuery(e.target).attr('typeProcess')) {

            typeProcess = jQuery(e.target).attr('typeProcess');

        }

        calculate = _serializeFormToObject(e.currentTarget)

        if (jQuery(e.target).is('.rangeContacts')) {

            console.log('etarget', e.target);

            calculate._contactsField[typeProcess] = calculateRangeValue(calculate);

        }

        calculateFinal(calculate);
        var m = jQuery('input.contactsField[typeProcess='+typeProcess+']').val();

        m = parseInt(m);

        console.log('la eme', m);

        if(m > 100000){

            jQuery('.showInfosection').css({
                'display': 'none'
            });
            jQuery('.finalButtons').css({
                'display': 'none'
            });

            jQuery('.showInfosection.outLimit').css({
                'display': 'flex'
            });
            jQuery('.finalButtons.outLimit').css({
                'display': 'flex'
            });

        }else{

            jQuery('.showInfosection').css({
                'display': 'flex'
            });
            jQuery('.finalButtons').css({
                'display': 'flex'
            });

            jQuery('.showInfosection.outLimit').css({
                'display': 'none'
            });
            jQuery('.finalButtons.outLimit').css({
                'display': 'none'
            });

        }



    });



});
