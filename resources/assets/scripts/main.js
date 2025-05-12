
jQuery(document).ready(function($) {
    $('#no-website').change(function() {
        if(this.checked) {
            $('#website-field').val('').attr('readonly', true).css('opacity', '0.5');
        } else {
            $('#website-field').attr('readonly', false).css('opacity', '1');
        }
    });
});
