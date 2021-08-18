console.log('zoom meeting js');


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

    return l;





}

function disableButton() {

    jQuery('#zoomBegin').attr('disabled', true);

}


jQuery(document).ready(function () {



    var rangeWeek = ['08:00', '22:00'];
    var rangeEndWeek = ['11:00', '20:00'];
    var options = {
        timeZone: 'America/New_york',
        hour: 'numeric',
        minute: 'numeric'
    };

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

    formatter = new Intl.DateTimeFormat([], options);
    var hora = formatter.format(new Date());

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

});