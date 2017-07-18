var MiniSlider = function( el, num ) {
	var that = this;
	that.numEls = num;
	var slider = el.find('.list');
	var slides = slider.find('li');
	var nbSlides = slides.length;
	var prevBtn = el.find('.arrow.left');
	var nextBtn = el.find('.arrow.right');
	var currentIndex = 0;

	nextBtn.click( function() { if( currentIndex + 1 < nbSlides - (that.numEls-1) ) that.setSlide( currentIndex + 1 ); })
	prevBtn.click( function() { if( currentIndex > 0 ) that.setSlide( currentIndex - 1 ); })
	
	this.setSlide = function( index ) {
		currentIndex = index;
		slides.stop(true).transition({ x: (-currentIndex * 100) + "%" }, 500, "easeInOutQuad" );
	}
}

$(document).ready(function() {

	var w = $(window);
	var	ww, wh;

	var sections = $('section');
	var stepNav = $('.stepNav');
	var pucesCtn = stepNav.find('.puces');
	var currentStep = -1;
	var tweening = false;

	$('input').change(function() {
		$(this).parents('.step').addClass('ready')
		$(window).trigger('choiceMade');
	})

	$('.step').each( function(index, item) {
		var step = $(item);
		var puce =  $('<div class="puce"></div>').data('index', index ).data('step', step ).appendTo(pucesCtn);
	})

	$('section[data-menu]').each(function(index, item){
		var menu = $('.subnav ul');
		var menuLi = $('<li>'+$(item).data('menu')+'</li>').appendTo(menu);	
		$(item).data('menuEl', menuLi)
	});

	var puces = pucesCtn.find('.puce');

	function setSection( index ) {

		var currentStepEl = puces.eq(currentStep).data('step');
		if( currentStep == -1 ) currentStepEl = $('.introBloc');
		var nextStepEl = puces.eq(index).data('step');

		if( index > currentStep ) {

			if( currentStepEl.hasClass('slide') ) {

				if( currentStepEl.data('index') == currentStepEl.parent().data('slides') - 1 ) {
					currentStepEl.parent().transition({ x: "-100%" }, 700, "easeInOutQuart" );
					if( nextStepEl.hasClass('slide') ) {
						nextStepEl.parent().find('.slide').css({ x: "100%" });
						nextStepEl.css({ x: 0 })
						nextStepEl.parent().css({ x: "100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
					} else {
						nextStepEl.css({ x: "100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
					}
				} else {
					currentStepEl.transition({ x: "-100%" }, 700, "easeInOutQuart" );
					nextStepEl.css({ x: "100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
				}

			} else {

				currentStepEl.transition({ x: "-100%" }, 700, "easeInOutQuart" );
				if( nextStepEl.hasClass('slide') ) {
					nextStepEl.parent().find('.slide').css({ x: "100%" });
					nextStepEl.css({ x: 0 })
					nextStepEl.parent().css({ x: "100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
				} else {
					nextStepEl.css({ x: "100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
				}

			}
			
		} else {

			if( currentStepEl.hasClass('slide') ) {

				if( currentStepEl.data('index') > 0 ) {
					
					currentStepEl.transition({ x: "100%" }, 700, "easeInOutQuart" );
					nextStepEl.css({ x: "-100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );

				} else {

					currentStepEl.parent().transition({ x: "100%" }, 700, "easeInOutQuart" );
					if( nextStepEl.hasClass('slide') ) {
						nextStepEl.parent().find('.slide').css({ x: "-100%" });
						nextStepEl.css({ x: 0 })
						nextStepEl.parent().css({ x: "-100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
					} else {
						nextStepEl.css({ x: "-100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
					}
					
				}

			} else {

				currentStepEl.transition({ x: "100%" }, 700, "easeInOutQuart" );
				if( nextStepEl.hasClass('slide') ) {
					nextStepEl.parent().find('.slide').css({ x: "-100%" });
					nextStepEl.css({ x: 0 })
					nextStepEl.parent().css({ x: "-100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
				} else {
					nextStepEl.css({ x: "-100%" }).transition({ x: 0 }, 700, "easeInOutQuart" );
				}

			}
		}

		if( nextStepEl.data('menuEl') != null ) {
			$('.subnav ul li').filter('.active').removeClass('active');
			nextStepEl.data('menuEl').addClass('active');
		} else {
			$('.subnav ul li').filter('.active').removeClass('active');
			nextStepEl.parent().data('menuEl').addClass('active');
		}

		puces.eq(currentStep).removeClass('active');
		puces.eq(index).addClass('active');

		currentStep = index; 

		if( index > 0 ) stepNav.find('.btn.prev').addClass('visible');
		else stepNav.find('.btn.prev').removeClass('visible'); 

		if( nextStepEl.hasClass('ready') ) stepNav.find('.btn.next').addClass('visible');
		else stepNav.find('.btn.next').removeClass('visible');
		
	}

	stepNav.find('.btn.start').click( function() {
		$(this).removeClass('visible');
		pucesCtn.addClass('visible');
		setSection( 0 );
	})

	stepNav.find('.btn.next').click( function() {
		setSection( currentStep + 1 );
	})

	stepNav.find('.btn.prev').click( function() {
		setSection( currentStep - 1 );
		stepNav.find('.btn.next').addClass('visible');
	})

	var versions = new MiniSlider($('.versions'),3);
	var selleries = new MiniSlider( $('.interior .upholstery'),6);
	var boiseries = new MiniSlider( $('.interior .wood'),6);

	$(window).on('choiceMade', function() {
		stepNav.find('.btn.next').addClass('visible');
	})
		
	w.resize(function(){ 

		ww = w.width();
		wh = w.height();

		if( ww > 800 ) versions.numEls = 3;
		else if( ww > 550 ) versions.numEls = 2;
		else versions.numEls = 1;

		if( ww > 900 ) selleries.numEls = 6;
		else if( ww > 800 ) selleries.numEls = 5;
		else if( ww > 700 ) selleries.numEls = 4;
		else if( ww > 560 ) selleries.numEls = 3;
		else if( ww > 420 ) selleries.numEls = 2;
		else selleries.numEls = 1;

		if( ww > 900 ) boiseries.numEls = 6;
		else if( ww > 800 ) boiseries.numEls = 5;
		else if( ww > 700 ) boiseries.numEls = 4;
		else if( ww > 560 ) boiseries.numEls = 3;
		else if( ww > 420 ) boiseries.numEls = 2;
		else boiseries.numEls = 1;

	});

})