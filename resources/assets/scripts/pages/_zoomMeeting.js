console.log('zoom meeting js');

/*
Por: Álvaro Segovia
alvaro@escala.com
*/

var timer = null;

function isInRange(value, range) {
    return value >= range[0] && value <= range[1];
}

function redirectTime() {


    if (dataPHP && dataPHP.zoomLink) {


        let stateCheck = setInterval(() => {

            if (document.readyState === 'complete') {
                clearInterval(stateCheck);

                setTimeout(function () {
                    window.open(dataPHP.zoomLink, '_blank');
                }, 3500);

            }
        }, 100);

    }
    jQuery('#zoomBegin').attr('disabled', false);

}

function validateRangeHour(rang, time) {

    var t = [];
    t.push(time);

    var l = null;

    t.forEach((element) => {

        if (isInRange(element, rang)) {

            l = true;

        } else {

            l = false;

        }

    });

    console.log('tiempo', t);
    console.log('rango', rang);
    console.log('retorna l', l);
    return l;





}

function disableButton(valid) {

        console.log('disabled button');
        jQuery('#zoomBegin').attr('disabled', true);
        vigilantOpen();

}


function vigilantOpen(){

    if(timer != null){
        clearInterval(timer);
    }

    timer = setInterval(function () {
        // Invoke function every 10 minutes
        console.log('Consult hour');

        validateHour();

    }, 600000);

}

function validateHour(){

    var rangeWeek = ['08:00', '22:00'];
    var rangeEndWeek = ['11:00', '20:00'];

    var options = {
        timeZone: 'America/New_york',
        hour: '2-digit',
        minute: '2-digit',
        timeZoneName: 'short'
    };

    formatter = new Intl.DateTimeFormat([], options);
    var hora = formatter.format(new Date());

    var d = new Date();
    var weekday = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    ]
    var day = weekday[d.getDay()];

    if (day == 'Sunday') {


        disableButton();

    } else if (day == 'Saturday') {

        var l = validateRangeHour(rangeEndWeek, hora);

        if (l == true) {

            redirectTime();

        } else {

            disableButton();

        }

    } else {

        var l = validateRangeHour(rangeWeek, hora);
        if (l == true) {

            redirectTime();

        } else {

            disableButton();

        }

    }

}

jQuery(document).ready(function () {


    validateHour();



});