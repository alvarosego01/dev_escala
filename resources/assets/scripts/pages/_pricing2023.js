
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
    let _whatsapp = (data._whatsappField === 'Si')? 40 : 0;

    console.log('_typePlan', _typePlan);

    if (_typePlan == 'monthly') {

        let priceTach = null;

        costFinal = _contacts.pro + _users.pro + _whatsapp;
        discount = 0;

        priceTach = costFinal * 12;

        priceTach = priceTach.toFixed(2);

        priceTach = trimDecimals(priceTach);

        jQuery('.pricingCard.pro .elementBody .price .cost .ahorro ').html('Pago total de USD ' + priceTach + ' / año');

    }

    if (_typePlan == 'yearly') {

        let priceTach = null;
        let priceAhorro = null;
        let discountTotal = null;

        costFinal = _contacts.pro + _users.pro + _whatsapp;

        priceTach = costFinal * 12;

        discountTotal = priceTach - (priceTach * 0.20);

        discount = costFinal * 0.20;

        costNoDiscount = costFinal;
        costFinal = costFinal - discount;
        discount = discount.toFixed(2);
        costNoDiscount = costNoDiscount.toFixed(2);
        costFinal = costFinal.toFixed(2);

        priceTach = priceTach.toFixed(2);
        discountTotal = discountTotal.toFixed(2);

        costNoDiscount = trimDecimals(costNoDiscount);
        discount = trimDecimals(discount);
        priceTach = trimDecimals(priceTach);
        discountTotal = trimDecimals(discountTotal);

        // jQuery('.pricingCard.pro .elementBody .price .cost .ahorro ').html('Pago total de USD ' + priceTach + '</span> <strong>- USD ' + discountTotal + ' / año</strong>');
        jQuery('.pricingCard.pro .elementBody .price .cost .ahorro ').html(' Pago total de USD <span>'+ priceTach +'</span> - USD '+ discountTotal +' / año');

    }

    costFinal = trimDecimals(costFinal);

    jQuery('.pricingCard.pro .price .discountCost').html('<span>USD ' + costFinal + ' <small>/ mes</small> </span>');

}

jQuery(document).ready(function () {

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


});