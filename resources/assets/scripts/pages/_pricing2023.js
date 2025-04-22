var _typePlan = 'yearly';

// descuentos
let discount = 0;

// costo final
let costFinal = 0;
let costNoDiscount = 0;

let escalaContactsStarter = [
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


let new_escalaContactsPro = [
    {
        range: [1, 1],
        price: 97,
    },
    {
        range: [2, 3],
        price: 35,
    },
    {
        range: [4, 5],
        price: 25,
    },
    {
        range: [6, 10],
        price: 30,
    },
    {
        range: [11, 15],
        price: 30,
    },
    {
        range: [16, 20],
        price: 30,
    },
    {
        range: [21, 25],
        price: 30,
    },
    {
        range: [26, 30],
        price: 30,
    },
    {
        range: [31, 'infinite'],
        price: 20,
    },
]

function formula_infinite(n) {

    let x = (n - 31);
    x = x / 5;
    x = Math.floor(x);
    x = x * 20;

    return x;

}

function starter_convertUsers(data) {


// _contactsField
// :
// "9000"
// _usersField
// :
// "1"

        if (data._usersField >= 1) {

            let starter = (data._usersField - 1) * 25;
            let pro = (data._usersField - 1) * 25;

            return {
                starter: starter,
                pro: pro,
            }

        } else {

            return {
                starter: 0,
                pro: 0,
            };

        }



}

function starter_calculateFinal(data) {

    let _contacts = starter_converContacts(data._contactsField);
    let _users = starter_convertUsers(data);




    let costFinal = _contacts.starter + _users.starter;
    let discount = 0;




    // let costFinal = 332.01;
    costFinal = trimDecimals(costFinal);

    let cost_anual = costFinal * 12;

    // jQuery('#finalPriceCalc').text('USD ' + costFinal + ' / mes');

    jQuery('.pricingCard.starter .price .discountCost').html('<span>USD ' + costFinal + ' <small>/ mes</small> </span>');

    jQuery('.pricingCard.starter .elementBody .price .cost .ahorro ').html('Pago total de <strong>USD ' + cost_anual + ' / año</strong>');

}

function starter_getContactScale(n) {

    let l = {
        starter: 0,
        pro: 0,
    }
    // caso pro
    for (let index = 1; index <= n; index++) {

        let aux = calculate_contact_per_steps(index);
        l.pro = aux;

    }


    // caso starter
    if (n <= 25) {
        for (let index = 0; index < n; index++) {

            l.starter = l.starter + escalaContactsStarter[index];
            // l.pro = l.pro + escalaContactsPro[index];
        }
    }

    if (n >= 26) {

        for (let index = 0; index < 25; index++) {

            l.starter = l.starter + escalaContactsStarter[index];

        }
        let x = n - 25;
        l.starter = l.starter + (x * 4);

    }

    return l;

}

function starter_getContactScale(n) {

    let l = {
        starter: 0,
        pro: 0,
    }
    // caso pro
    for (let index = 1; index <= n; index++) {

        let aux = calculate_contact_per_steps(index);
        l.pro = aux;

    }


    // caso starter
    if (n <= 25) {
        for (let index = 0; index < n; index++) {

            l.starter = l.starter + escalaContactsStarter[index];
            // l.pro = l.pro + escalaContactsPro[index];
        }
    }

    if (n >= 26) {

        for (let index = 0; index < 25; index++) {

            l.starter = l.starter + escalaContactsStarter[index];

        }
        let x = n - 25;
        l.starter = l.starter + (x * 4);

    }

    return l;

}

function starter_converContacts(contacts) {

    let l = contacts / 1000;
    l = Math.trunc(l);

    let cost = {
        starter: starter_getContactScale(l).starter,
        pro: starter_getContactScale(l).pro,
    };

    return cost;

}



function calculate_contact_per_steps(n) {

    let aux_result = 0;

    let aux_index = new_escalaContactsPro.findIndex(r => {

        if (n >= r.range[0] && n <= r.range[1]) {
            return r;
        }
        if (n >= r.range[0] && r.range[1] === 'infinite') {
            return r;
        }

    });

    if (new_escalaContactsPro[aux_index].range[1] != 'infinite') {

        for (let i = 0; i <= aux_index; i++) {

            aux_result = aux_result + new_escalaContactsPro[i].price;

        }

    } else {


        for (let i = 0; i <= aux_index; i++) {

            aux_result = aux_result + new_escalaContactsPro[i].price;

        }

        aux_result = aux_result + formula_infinite(n);

    }


    return aux_result;

}


function getContactScale(n) {

    let l = {
        pro: 0,
    }
    // caso pro
    for (let index = 1; index <= n; index++) {

        let aux = calculate_contact_per_steps(index);
        l.pro = aux;

    }

    return l;

}

function converContacts(contacts) {

    let l = contacts / 1000;
    l = Math.trunc(l);

    let cost = {
        pro: getContactScale(l).pro,
    };

    return cost;

}

function convertUsers(data) {

    if (data._usersField >= 1) {


        let pro = ((data._usersField - 1) * 25);


        return {
            pro: pro,

        }

    } else {

        return {
            pro: 0,

        };

    }

}


function selectorSlizePlan(type) {

    _typePlan = type;

    if (_typePlan == 'monthly') {

        jQuery('[yearly_mode]').addClass('hideMode');
        jQuery('[monthly_mode]').removeClass('hideMode');

    }

    if (_typePlan == 'yearly') {

        jQuery('[monthly_mode]').addClass('hideMode');
        jQuery('[yearly_mode]').removeClass('hideMode');

    }

    jQuery('form#formCalcGeneral_PRO').click();
}

function trimDecimals(costFinal) {

    if (Number(Number(costFinal).toFixed()) == Number(costFinal) / 1) {

        costFinal = Number(Number(costFinal).toFixed());

        return costFinal;

    } else {
        return costFinal;
    }

}

function calculateFinal(data) {
    let _contacts = converContacts(data._contactsField);
    let _users = convertUsers(data);

    // Add IA plan pricing
    let iaPricing = {
        No: 0,
        Bronce: _typePlan === 'monthly' ? 40 : 32,
        Plata: _typePlan === 'monthly' ? 200 : 160,
        Oro: _typePlan === 'monthly' ? 1000 : 800,
        Platino: _typePlan === 'monthly' ? 2000 : 1600
    };
    let _iaField = iaPricing[data._iaField] || 0;

    let _omnicanalField = (data._omnicanalField === 'Si') ? 40 : 0;
    let _whatsappField = (data._omnicanalField === 'Si') ? (data._whatsappField * 25) : 0;
    let _facebookField = (data._omnicanalField === 'Si') ? (data._facebookField * 25) : 0;

    let extra = _omnicanalField + _whatsappField + _facebookField;

    if (_typePlan == 'monthly') {
        costFinal = _contacts.pro + _users.pro + extra + _iaField;
        discount = 0;
        let priceTach = costFinal * 12;
        priceTach = trimDecimals(priceTach);
        jQuery('.pricingCard.pro .elementBody .price .cost .ahorro ').html('Pago total de USD ' + priceTach + ' / año');
    }

    if (_typePlan == 'yearly') {
        costFinal = _contacts.pro + _users.pro + extra + _iaField;
        let priceTach = costFinal * 12;
        let discountTotal = priceTach - (priceTach * 0.20);
        discount = costFinal * 0.20;
        costNoDiscount = costFinal;
        costFinal = costFinal - discount;
        discount = trimDecimals(discount);
        costNoDiscount = trimDecimals(costNoDiscount);
        priceTach = trimDecimals(priceTach);
        discountTotal = trimDecimals(discountTotal);
        jQuery('.pricingCard.pro .elementBody .price .cost .ahorro ').html(' Pago total de USD <span>' + priceTach + '</span> - USD ' + discountTotal + ' / año');
    }

    costFinal = trimDecimals(costFinal);
    jQuery('.pricingCard.pro .price .discountCost').html('<span>USD ' + costFinal + ' <small>/ mes</small> </span>');
}

function openCompare(){

    let items = jQuery('li.itemParent');


    jQuery.each(items, function (indexInArray, valueOfElement) {

            // aria-expanded="false"

            if( jQuery('button', valueOfElement).attr('aria-expanded') === 'false' ){

                jQuery('button', valueOfElement).click();

            }

    });


}
var isSticky = false; // Variable para controlar el estado de "stick"

function rangeTableSticky(numero, rangoInicio, rangoFin) {
  return numero >= rangoInicio && numero <= rangoFin;
}

function sticky_headerTable() {
  var window_top = jQuery(window).scrollTop();
  var div_top1 = jQuery('#table-header-anchor1').offset().top - 150;
  var div_top2 = jQuery('#table-header-anchor2').offset().top;
  var tableHeader = jQuery('.table-header');

    if(rangeTableSticky(window_top, div_top1 + 100, div_top2)){

    tableHeader.addClass('stick');
    }

    if( window_top < div_top1 || window_top + 150 > div_top2  ){

    tableHeader.removeClass('stick');
    }

}
function adjustCalculatorHeight() {
    if (jQuery(window).width() <= 768) {
        if (jQuery('#omnicanalField').val() === 'Si') {
            jQuery('.calculator').css('height', '415px');
        } else {
            jQuery('.calculator').css('height', '280px');
        }
    } else {
        if (jQuery('#omnicanalField').val() === 'Si') {
            jQuery('.calculator').css('height', '445px');
        } else {
            jQuery('.calculator').css('height', '330px');
        }
    }
}

jQuery(document).ready(function () {

jQuery(window).on('scroll', sticky_headerTable);

    selectorSlizePlan(_typePlan);

    jQuery('.field.number').each(function () {
        var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function () {
            var oldValue = parseFloat(input.val());
            let step = input.attr('step');
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + Number(step);
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function () {
            var oldValue = parseFloat(input.val());
            let step = input.attr('step');
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - Number(step);
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        input.on('change', function () {
            if (input.attr('name') === '_contactsField' && input.val() < 1000) {
                alert('El número de contactos de marketing no puede ser inferior a 1000. Se ha restablecido a 1000.');
                input.val(1000);
            }
        });
    });

    jQuery('.field.select').each(function () {
        var spinner = jQuery(this),
            input = spinner.find('select'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down');

        btnUp.click(function () {
            // input.click();

        });

        btnDown.click(function () {
            // input.click();

        });

    });

    jQuery('form#formCalcGeneral_PRO').on('change click', async function (e) {

        calculate = _serializeFormToObject(e.currentTarget)

        calculateFinal(calculate);

    });
    jQuery('form#formCalcGeneral_STARTER').on('change', async function (e) {

        calculate = _serializeFormToObject(e.currentTarget)

        console.log('calculos starter', calculate);

        starter_calculateFinal(calculate);

    });

    jQuery('#omnicanalField').on('change', function () {
        if (jQuery(this).val() === 'Si') {
            jQuery('.omnicanal-options').show();
            jQuery('.omnicanal-options input').val(0);
            jQuery('.omniInfo2').show();
        } else {
            jQuery('.omnicanal-options').hide();
            jQuery('.omnicanal-options input').val(0);
            jQuery('.omniInfo2').hide();
        }
        jQuery('form#formCalcGeneral_PRO').trigger('change');
        adjustCalculatorHeight();
    });

    jQuery('.omnicanal-options input').on('change', function () {
        jQuery('form#formCalcGeneral_PRO').trigger('change');
    });

    jQuery('#_iaField').on('change', function () {
        jQuery('form#formCalcGeneral_PRO').trigger('change');
    });

    adjustCalculatorHeight();
});