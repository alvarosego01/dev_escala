

console.log('pricing page js');




jQuery(document).ready(function () {


    jQuery("input[type=range]" ).load(function(e) {
        // Handler for .load() called.

        console.log('movimiento', e);

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




    jQuery("input[type=range]").on( "input change" , function (e) {

        console.log('movimiento', e);

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

});