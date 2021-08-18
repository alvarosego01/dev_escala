
import { _globalClass } from './../classes/_global';


// class _zoomMeetingClass {

//     v = new _globalClass();

//     constructor(
//     ){



//         console.log('inicia clase');

//         console.log('otra clase', v);

//     }


// }


jQuery(document).ready(function () {

    // var l = new _zoomMeetingClass();
    console.log('inicializado', _globalClass);

});


// function isInRange(value, range) {
//     return value >= range[0] && value <= range[1];
// }

// function redirectTime() {

// let stateCheck = setInterval(() => {

//     if (document.readyState === 'complete') {
//         clearInterval(stateCheck);

//         setTimeout(function() {
//             window.open("{{ $zoomLink }}", '_blank');
//         }, 3500);

//     }
// }, 100);
// }

// function validateRangeHour(rang, time) {

// rang.forEach(function(time) {

//     if (isInRange(time, rang)) {

//         return false;

//     } else {

//         return true;

//     }

// });

// }

// function disableButton() {

// console.log('no disponible');
// jQuery('#zoomBegin').prop('disabled', true);

// }


// jQuery(document).ready(function () {


//     var rangeWeek = ['08:00', '22:00'];
//     var rangeEndWeek = ['11:00', '20:00'];
//     var options = {
//             timeZone: 'America/New_york',
//             hour: 'numeric',
//             minute: 'numeric'
//         },

//     var d = new Date();
//     var weekday = [
//         "Sunday",
//         "Monday",
//         "Tuesday",
//         "Wednesday",
//         "Thursday",
//         "Friday",
//         "Saturday"
//     ]
//     var day = weekday[d.getDay()];

//     formatter = new Intl.DateTimeFormat([], options);
//     var hora = formatter.format(new Date());

//     if (day == 'Sunday') {


//         disableButton();

//     } else if (day == 'Saturday') {


//         if (validateRangeHour(rangeEndWeek, hora) == true) {

//             redirectTime();

//         } else {

//             disableButton();

//         }

//     } else {

//         if (validateRangeHour(rangeEndWeek, hora) == true) {

//             redirectTime();

//         } else {

//             disableButton();

//         }

//     }

// });