function isInRange(e,a){return e>=a[0]&&e<=a[1]}function redirectTime(){if(dataPHP&&dataPHP.zoomLink){let e=setInterval(()=>{"complete"===document.readyState&&(clearInterval(e),setTimeout(function(){window.open(dataPHP.zoomLink,"_blank")},3500))},100)}}function validateRangeHour(a,e){var t=[];t.push(e);var n=null;return t.forEach(e=>{n=!!isInRange(e,a)}),n}function disableButton(){jQuery("#zoomBegin").attr("disabled",!0)}jQuery(document).ready(function(){var e=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][(new Date).getDay()];formatter=new Intl.DateTimeFormat([],{timeZone:"America/New_york",hour:"numeric",minute:"numeric"});var a=formatter.format(new Date);("Sunday"==e?disableButton:"Saturday"==e?1==validateRangeHour(["11:00","20:00"],a)?redirectTime:disableButton:1==validateRangeHour(["08:00","22:00"],a)?redirectTime:disableButton)()});