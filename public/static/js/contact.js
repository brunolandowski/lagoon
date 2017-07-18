
$(document).ready(function() {
	$(window).resize( function() {
    	if( map ) google.maps.event.trigger(map, 'resize'); 
    })

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

    $('.contact section .map .form .cta').click(function() {
    	var form = $('.contact section .map .form');
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

	    if( stillValid ) {     
			form.find('.responseMessage.fields').fadeOut();

			if( isNaN( parseInt( selectedCharter) ) ) {
				form.find('.responseMessage.mapSelect').fadeIn();
				stillValid = false;
			} else {
				form.find('.responseMessage.mapSelect').fadeOut();
			}

			if( stillValid ) {    
				////////////////////////////////////////////////////////////
				////////////////////////////////////////////////////////////
				////////////////////////////////////////////////////////////


				//	SEND DATAS


				////////////////////////////////////////////////////////////
				////////////////////////////////////////////////////////////
				////////////////////////////////////////////////////////////				
				form.find('.cta').unbind('click').animate({ opacity: .5 });
			} else {
				return false;
			}
		} else {
			form.find('.responseMessage.fields').fadeIn();
			return false;
		}
    })

    $('.contact section .bigform .cta').click(function() {
    	var form = $('.contact section .bigform');
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

	    if( form.find('input[name=adress]').val() == '' ) {
	    	form.find('input[name=adress]').addClass('error');
	    	stillValid = false;
	    } else {
	    	form.find('input[name=adress]').removeClass('error');
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


