/* global YT */
'use strict';

var MiniSlider = function( el, num, zoomable ) {
	var that = this;
	that.numEls = num;
	var slider = el.find('.list');
	var slides = slider.find('li');
	var nbSlides = slides.length;
	var prevBtn = el.find('.arrow.left');
	var nextBtn = el.find('.arrow.right');
	var currentIndex = 0;

	if( slides.length <= num ) {
		prevBtn.hide();
		nextBtn.hide();
	}

	function slideCliked() {	
		if( $(this).data('zoom') == undefined ) return;
		var clicked = this;
		var list = [];
		var startIndex = 0;
		slides.each(function(index,item) {
			list.push( { legend : $(item).data('legend'), visu: $(item).data('zoom') });
			if( item == clicked ) startIndex = index;
		});
		new ZoomSlider( '' , list , startIndex )
	}

	if( zoomable ) slides.click( slideCliked );

	nextBtn.click( function() { if( currentIndex + 1 < nbSlides - (that.numEls-1) ) that.setSlide( currentIndex + 1 ); })
	prevBtn.click( function() { if( currentIndex > 0 ) that.setSlide( currentIndex - 1 ); })
	
	this.setSlide = function( index ) {
		currentIndex = index;
		slides.stop(true).transition({ x: (-currentIndex * 100) + "%" }, 500, "easeInOutQuad" );
	}
}

var Gallery = function( el ) {
	var that = this;
	var sortsBtn = el.find('.sorts .sort');
	var container = el.find('.list');
	var photos = container.find('.photo');
	var currentTag = "all";
	var processing = false;
	var visiblesPhotos = photos; 

	function photoCliked() {		
		
		if ( processing ) return;
		
		var clicked = this;
		var list = [];
		var startIndex = 0;

		visiblesPhotos.each(function(index,item) {
			list.push( { legend : $(item).data('legend'), visu: $(item).data('zoom') });
			if( item == clicked ) startIndex = index;
		});

		new ZoomSlider( sortsBtn.filter('.active').html() , list , startIndex )
	}

	sortsBtn.click(function() {
		var tag = $(this).data("tag");
		if ( tag == currentTag || processing ) return;
		processing = true;

		currentTag = tag;

		sortsBtn.filter('.active').removeClass('active');
		$(this).addClass('active');

		visiblesPhotos.each( function( index, item ) {
			$(item).stop(true).transition({ y: '10%', opacity: 0, delay: index * 50 }, 400, "easeInQuad" );
		});

		$('body,html').animate({ scrollTop: el.offset().top - $('.subnav').height() }, visiblesPhotos.length*50+410, "easeInOutQuad", function() {
			
			visiblesPhotos.hide();

			if( tag == "all" ) visiblesPhotos = photos;
			else visiblesPhotos = photos.filter("[data-tag="+tag+"]");
			container.empty();
			var line;
			visiblesPhotos.each(function(index, item){
				if( index % 3 == 0 ) {
					line = $('<div class="line full"></div>').appendTo(container);					
				}
				$(item).appendTo(line);
				$(item).show().stop(true).transition({ y: 0, opacity: 1, delay: index * 50 }, 400, "easeOutQuad");
			})

			visiblesPhotos.each( function( index, item ){
				var container = $(item);
				var cw = container.width();
				var ch = container.height();
				
				var img = container.find('img')
				var ratioImg = img[0].naturalWidth / img[0].naturalHeight;
				var ratioContainer = cw / ch;

				if( ratioContainer > ratioImg ) {
					var height = cw / ratioImg;
					img.css({ height: height, width : cw, x: 0, y: ( ch - height ) / 2  });
				} else {
					var width = ch * ratioImg;
					img.css({ height: ch, width : width, x: ( cw - width ) / 2 , y: 0 });
				}
			})

			visiblesPhotos.click( photoCliked );

			var lastLine = container.find('.line').last();
			if( lastLine.children().length < 3 ) lastLine.removeClass('full');

			setTimeout(function() {
				processing = false;
				$(window).resize();
			}, visiblesPhotos.length * 50 + 400 )
		})
	})

	photos.click( photoCliked );

	var lastLine = container.find('.line').last();
	if( lastLine.children().length < 3 ) lastLine.removeClass('full');
}

$(document).ready(function() {

	var introSlider = new SliderFull( $(".sliderFull")  );
	var subnav = $('.subnav');
	var toolbox = $('.toolbox');
	var anchors = $('*[data-anchor]');
	var anchorsLinks = $('.subnav li[data-anchor-link]');
	var currentAnchorIndex = -1;
	var subnavFixed = false;

	var w = $(window);
	var	ww, wh;

	anchorsLinks.click( function() {
		var anchorName = $(this).data('anchor-link');
		var scrollTop =  anchors.filter('[data-anchor='+anchorName+']').data('top') - subnav.height();
		$('body,html').animate({ scrollTop: scrollTop })
	})

	var versions = new MiniSlider($('.versions'),3, true);
	var awards = new MiniSlider($('.awards'),4, false);
	var gallery = new Gallery($('.gallery'));
	var press = new MiniSlider($('.press'),4, false);

	$('.quoteRequestBtn').click(function() {
		if( w.scrollTop() < subnav.data('top') ) $('body,html').animate({  scrollTop: subnav.data('top') });
		$('body').css({ overflow: 'hidden'})
		stopViewportScrolling(true);
		subnav.addClass('opened').find('.quoteAsking').addClass('opened');
	})

	subnav.find('.quoteAsking .close').click(function() {
		$('body').css({ overflow: ''})
		stopViewportScrolling(false);
		subnav.removeClass('opened').find('.quoteAsking').removeClass('opened');
	})

	w.scroll(function(e) {
		var scrollValue = w.scrollTop();

		if( scrollValue >= subnav.data('top') ) {
			if (!subnavFixed) {
				subnav.addClass('fixed')
				toolbox.addClass('fixed')
				subnavFixed = true;
			}
		} else {
			if (subnavFixed){ 
				subnav.removeClass('fixed')
				toolbox.removeClass('fixed')
				subnavFixed = false;
			}
		}

		if( anchors.length > 0 ) {
			var currentIndex = 0;
			for( var i = 0; i< anchors.length; ++i ){
				var anchor = anchors.eq(i);
				if( scrollValue + wh /2 > anchor.data('top') ) {
					currentIndex = anchor.data('anchor');
				} else {
					break;
				}
			}

			if( currentIndex != currentAnchorIndex ){
				anchorsLinks.filter('.active').removeClass('active');
				anchorsLinks.filter('[data-anchor-link='+currentIndex+']').addClass('active');
				currentAnchorIndex = currentIndex;
			}

		}

	});

	var resizedCount = 0;
	var calculatePosition = function() {

		anchors.each( function( index, item ){
			var matrix = $(item).css('transform');
			var regex = /matrix\(1, 0, 0, 1, [0-9.]+, ([0-9.]+)\)/;
			var Y ;
			
			if( matrix != 'none' ) {
				var match = matrix.match(regex);
				Y = parseInt( match[1] );
			} else Y = 0;
			$(item).data('top', $(item).offset().top - Y )
		})	
		++resizedCount;
		if( resizedCount < 3 ) {
			setTimeout( function() { calculatePosition() }, 1000 );
		}
		
	}

	w.resize(function(){ 

		ww = w.width();
		wh = w.height();

		if( ww > 800 ) versions.numEls = 3;
		else if( ww > 550 ) versions.numEls = 2;
		else versions.numEls = 1;

		if( ww > 750 ) awards.numEls = 4;
		else if( ww > 600 ) awards.numEls = 3;
		else if( ww > 450 ) awards.numEls = 2;
		else awards.numEls = 1;

		if( ww > 850 ) press.numEls = 4;
		else if( ww > 700 ) press.numEls = 3;
		else if( ww > 500 ) press.numEls = 2;
		else press.numEls = 1;

		subnav.data('top', $('header').height() );
		resizedCount = 0;
		calculatePosition();
		w.scroll();
	});

	w.resize();


	// Block video
	var $blockVideos = $('.playerVideoFull');
	if ($blockVideos.length > 0) {
		var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/player_api';
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		window.onYouTubePlayerAPIReady = function() {
            $blockVideos.each(function (index, item) {
            	var $item = $(item),
                    videoID = $item.data('id');
                if (videoID !== undefined && videoID !== '') {
                    $item.find('.player').attr('id', 'ytplayer_' + index);
                    var player = new YT.Player('ytplayer_' + index, {
                        height: '100%',
                        width: '100%',
                        videoId: videoID,
                        playerVars: {'rel': 0, 'showinfo': 0}
                    });
                }
            });
        }
	}
});