
function isValidMail( email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


$(document).ready(function() {

    $('input, textarea').focus(function() {
    	$(this).removeClass('error')
    })

    $('select').focus(function() {
    	$(this).parent().removeClass('error')
    })

    $('textarea').focus(function() {
    	if( $(this).val() == $(this).data('placeholder') ) $(this).val('');
    })

    $('textarea').blur(function() {
    	if( $(this).val() == '' ) $(this).val( $(this).data('placeholder') );
    })

    
    $('#formAskAccount').submit(function() {
    	var form = $(this);
	    var stillValid = true;

	    if( !isValidName( form.find('input[name=firstname]').val() ) ) {
	    	form.find('input[name=firstname]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=firstname]').removeClass('error');
	    }

	    if( !isValidName( form.find('input[name=lastname]').val() ) ) {
	    	form.find('input[name=lastname]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=lastname]').removeClass('error');
	    }

	    if( !isValidMail( form.find('input[name=email]').val() ) ) {
	    	form.find('input[name=email]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=email]').removeClass('error');
	    }

	    if( form.find('input[name=address1]').val() == '' ) {
	    	form.find('input[name=address1]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=address1]').removeClass('error');
	    }

	    if( form.find('input[name=city]').val() == '' ) {
	    	form.find('input[name=city]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=city]').removeClass('error');
	    }

	    if( form.find('input[name=zipcode]').val() == '' ) {
	    	form.find('input[name=zipcode]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=zipcode]').removeClass('error');
	    }

		if( form.find('select[name=country]').val() == '' ) {
	    	form.find('.select').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('.select').removeClass('error');
	    }

	    if( form.find('textarea').val() == '' || form.find('textarea').val() == form.find('textarea').data('placeholder') ) {
	    	form.find('textarea').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('textarea').removeClass('error');
	    }

	    /***********************/
	    //	
	    //	Règles pour passwaord ?
	    //
	    /***********************/

	    if( form.find('input[name=pswd]').val() != form.find('input[name=pswd2]').val() ) {
	    	form.find('input[name=pswd]').addClass('error');
	    	form.find('input[name=pswd2]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=pswd]').removeClass('error');
	    	form.find('input[name=pswd2]').removeClass('error');
	    }


	    if( stillValid ) {     
			form.find('.responseMessage.fields').fadeOut();
			////////////////////////////////////////////////////////////
			////////////////////////////////////////////////////////////
			////////////////////////////////////////////////////////////


			//	SEND DATAS


			////////////////////////////////////////////////////////////
			////////////////////////////////////////////////////////////
			////////////////////////////////////////////////////////////				
			form.find('.cta').unbind('click').animate({ opacity: .5 });
			
		} else {
			form.find('.responseMessage.fields').fadeIn();
			return false;
		}
    })
})


