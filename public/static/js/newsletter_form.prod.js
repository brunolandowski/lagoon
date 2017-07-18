/* globals $:false, lang */
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

        // We remove error
        $form.find('.message').remove();
        $email.removeClass('error');

        // Tests on frontend
        if ($name.val() !== '' || false === isValidMail($email.val())) {
            $email.addClass('error');
            $form.append('<div class="message wrong">' + ($name.val() === '' ? lang.errors.newsletter.email.invalid : lang.errors.newsletter.email.required) + '</div>');

            return false;
        }
        var data = $form.serialize();
        $form.find('input, button').attr('readonly', 'readonly').attr('disabled', 'disabled');
        $.ajax({
            url: this.action,
            method: 'post',
            data: data,
            'success': function(d) {
                if (d.status) {
                    if ('success' === d.status) {
                        $form.append('<div class="message success">' + d.message + '</div>');
                    }
                    else if ('error' === d.status) {
                        var str = '';
                        for (var id in d.errors) {
                            str += '<br>' + d.errors[id];
                            $form.find('#newsletter_' + id).addClass('error');
                        }
                        $form.append('<div class="message wrong">' + str.substr(4) + '</div>');
                    }
                }
                else {
                    $form.append('<div class="message error">' + lang.errors.unknow + '</div>');
                }
                $form.find('input, button').attr('readonly', null).attr('disabled', null);
            },
            'error': function() {
                $form.append('<div class="message error">' + lang.unknow + '</div>');
                $form.find('input, button').attr('readonly', null).attr('disabled', null);
            }
        });
        return false;
    });
});