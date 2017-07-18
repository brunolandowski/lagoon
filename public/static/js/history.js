$(document).ready(function() {
	
	var sections = $('section');
	var currentDateIndex = 0;
	var links;
	var sublinks;
	var tweening = false;

	//***************** BUILD SUBMENU ********************************************************************/

	var subMenu = $('<div class="subMenu"></div>').appendTo('body');
    var dates = $('<ul class="dates"></ul>').appendTo(subMenu);
	          

	sections.each( function(index, item) {
		var section = $(item);
		var link =  $('<li class="date">'+section.data('menu')+'</li>').data('index', index ).appendTo(dates);
		var slides = section.find('.slide');
		
		slides.each(function( index2, item2) {
			var sublink =  $('<div class="sublink"></div>').data('section', section ).data('index', index2 ).appendTo(link);
		})

		section.data('slides', slides );
		section.data('currentIndex', 0 );
		section.data('sublinks', link.find('.sublink') );

		

	})

	links = dates.find('.date');
	links.eq(0).addClass('active');

	sublinks = dates.find('.sublink');

	//***************************************************************************************************/

	sections.mousewheel(function(event) {
		if( tweening ) return;
		if( event.deltaY * event.deltaFactor < -50 ) {
			nextStep();
		} else if ( event.deltaY * event.deltaFactor > 50){
			prevStep();
		}	    
	});

	function prevStep() {
		var section = sections.eq( currentDateIndex );
		var currentSubIndex = section.data('currentIndex');
		if( currentSubIndex == 0 ) {
			if( currentDateIndex > 0 ) {
				linkClicked( currentDateIndex - 1 );
			}
		} else {
			sublinkClicked( currentSubIndex - 1 );
		}
	}

	function nextStep() {
		var section = sections.eq( currentDateIndex );
		var currentSubIndex = section.data('currentIndex');
		if( currentSubIndex < section.data('slides').length - 1 ) {
			sublinkClicked( currentSubIndex + 1 );			
		} else {
			if( currentDateIndex < sections.length - 1 ) {
				linkClicked( currentDateIndex + 1 );
			}
		}
	}

	function linkClicked( index ) {
		if( tweening ) return;
		tweening = true;
		links.filter('.active').removeClass('active');
		links.eq(index).addClass('active');		

		var nextSection = sections.eq( index );
		nextSection.data('slides').css({ x: "100%" }).eq(0).css({ x: 0 });
		nextSection.data('sublinks').removeClass('active').eq(0).addClass('active');
		nextSection.data('currentIndex', 0 );

		if( index > currentDateIndex ) {
			sections.eq( currentDateIndex ).stop(true).transition({ y: "-100%" }, 700, 'easeInOutQuart' );
			nextSection.stop(true).css({ y: "100%" }).transition({ y: 0 }, 700, 'easeInOutQuart' );
		} else {
			sections.eq( currentDateIndex ).stop(true).transition({ y: "100%" }, 700, 'easeInOutQuart' );
			nextSection.stop(true).css({ y: "-100%" }).transition({ y: 0 }, 700, 'easeInOutQuart' );
		}

		currentDateIndex = index;
		setTimeout( function() { tweening = false; } , 800 )
	}

	function sublinkClicked( index ) {
		if( tweening ) return;
		tweening = true;

		var section = sections.eq( currentDateIndex );

		section.data('sublinks').filter('.active').removeClass('active');
		section.data('sublinks').eq(index).addClass('active');

		var currentIndex = section.data('currentIndex');
		var slides = section.data('slides');

		if( index > currentIndex ) {
			slides.eq( currentIndex ).find('.text').stop(true).transition({ x: "-100%" }, 700, 'easeInOutQuart' );
			slides.eq( currentIndex ).stop(true).transition({ x: "-100%" }, 700, 'easeInOutQuart' );
			slides.eq( index ).stop(true).css({ x: "100%" }).transition({ x: 0 }, 700, 'easeInOutQuart' );
			slides.eq( index ).find('.text').stop(true).css({ x: "100%" }).transition({ x: 0 }, 700, 'easeInOutQuart' );
		} else {
			slides.eq( currentIndex ).find('.text').stop(true).transition({ x: "100%" }, 700, 'easeInOutQuart' );
			slides.eq( currentIndex ).stop(true).transition({ x: "100%" }, 700, 'easeInOutQuart' );
			slides.eq( index ).stop(true).css({ x: "-100%" }).transition({ x: 0 }, 700, 'easeInOutQuart' );
			slides.eq( index ).find('.text').stop(true).css({ x: "-100%" }).transition({ x: 0 }, 700, 'easeInOutQuart' );
		}

		section.data('currentIndex', index );
		setTimeout( function() { tweening = false; } , 800 )
	}

	links.click( function() {
		var index = $(this).data('index');
		linkClicked( index );
	})

	sublinks.click( function(evt) {
		evt.stopPropagation();
		var index = $(this).data('index');
		sublinkClicked( index );
	})
	

})