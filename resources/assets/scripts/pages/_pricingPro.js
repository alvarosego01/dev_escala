

var _typePlan = 'yearly';


console.log('pricing pro', _typePlan);

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

    console.log('aaa', _typePlan);

    _contacts = converContacts(data._contactsField);
    _users = convertUsers(data);

    if (_typePlan == 'monthly') {


        costFinal = _contacts.pro + _users.pro;
        discount = 0;

    }

    if (_typePlan == 'yearly') {

        let priceTach = null;
        let priceAhorro = null;
        let discountTotal = null;

        costFinal = _contacts.pro + _users.pro;
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


        jQuery('form#formCalcGeneral .ahorro ').html('Pago total de <span>USD ' + priceTach + '</span> <strong>- USD ' + discountTotal + ' / año</strong>');


        // jQuery('form#formCalcGeneral .discountExtra .discounter').text('USD ' + priceTach + ' / anual');

        // jQuery('#priceDotted').text('USD ' + costNoDiscount + ' /mes');

    }

    // let costFinal = 332.01;

    costFinal = trimDecimals(costFinal);

    // jQuery('#finalPriceCalc').text('USD ' + costFinal + ' / mes');


}



jQuery(document).ready(function () {

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
        // min = input.attr('min'),
        // max = input.attr('max');

        btnUp.click(function () {
            // input.click();



        });

        btnDown.click(function () {
            // input.click();


        });

    });

    jQuery('form#formCalcGeneral').on('change', async function (e) {

        // e.preventDefault();

        calculate = _serializeFormToObject(e.currentTarget)

        // calculateFinal(calculate);

        console.log('que es calculate', calculate);

        // let m = jQuery('input.contactsField[typeProcess=' + typeProcess + ']').val();
        // m = parseInt(m);

        calculateFinal(calculate);


    });





});