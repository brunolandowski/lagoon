/* globals $:false */
'use strict';
function isValidMail( email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready( function() {
    $('#newsletter #newsform').submit(function(e) {
        e.stopPropagation();
        var $form = $(this),
            $email = $form.find('#newsletter_email'),
            $name = $form.find('#newsletter_lastname');

        if ($name.val() !== '' || false === isValidMail($email.val())) {
            $email.addClass('error');
            $form.find('.message.wrong').show();

            return false;
        }
        $email.removeClass('error');
        $form.find('.message.wrong').hide();
        $form.find('.cta').css({ opacity: 0.2 });

        return false;
    });
});