
var GalleryVideo = function( el ) {
	var that = this;
	var sortsBtn = el.find('.sorts .sort');
	var container = el.find('.videoContainer');
	var videos = container.find('.video');
	var currentTag = "all";
	var processing = false;
	var visiblesVideos = videos; 

	function videoCliked() {	
		var videoID = $(this).data('video');
		$('#videoPopin').fadeIn();
		window.player.loadVideoById( videoID );
	}

	sortsBtn.click(function() {
		var tag = $(this).data("tag");
		if ( tag == currentTag || processing ) return;
		processing = true;

		currentTag = tag;

		sortsBtn.filter('.active').removeClass('active');
		$(this).addClass('active');

		visiblesVideos.each( function( index, item ) {
			$(item).stop(true).transition({ y: '10%', opacity: 0, delay: index * 50 }, 400, "easeInQuad" );
		});

		
		$('body,html').animate({ scrollTop: 0 }, visiblesVideos.length*50+410, "easeInOutQuad", function() {
			
			visiblesVideos.hide();

			if( tag == "all" ) visiblesVideos = videos;
			else visiblesVideos = videos.filter("[data-tag="+tag+"]");
			container.empty();
			var line;
			var count = 0;

			visiblesVideos.each(function(index, item){
				if( index % 3 == 0 ) {
					count = 0;
					line = $('<div class="line full"></div>').appendTo(container);					
				}
				$(item).appendTo(line);
				$(item).show().stop(true).css({ y: '10%', opacity: 0 });
				++count;
			})

			if( count < 3 ){
				$('<div class="video">').appendTo(line);
				if( count < 2 ) $('<div class="video">').appendTo(line);
			}

			setTimeout(function() {
				visiblesVideos.each( function( index, item ){
					$(item).transition({ y: 0, opacity: 1, delay: 100+index * 50 }, 400, "easeOutQuad");
				})
			}, 200)

			$(window).resize();

			visiblesVideos.click( videoCliked ).mouseover( function() {
				$(this).addClass('over');
			}).mouseout( function() {
				$(this).removeClass('over');
			});

			var lastLine = container.find('.line').last();
			if( lastLine.children().length < 3 ) lastLine.removeClass('full');

			setTimeout(function() {
				processing = false;
				$(window).resize();
			}, visiblesVideos.length * 50 + 700 )
		})
	})

	videos.click( videoCliked );

	var lastLine = container.find('.line').last();
	if( lastLine.children().length < 3 ) lastLine.removeClass('full');
}

$(document).ready(function() {

	var w = $(window);
	var	ww, wh;

	w.resize(function(){ 

		ww = w.width();
		wh = w.height();

	});

	w.resize();

	var gallery = new GalleryVideo($('section'));

	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag );
	
	window.onYouTubePlayerAPIReady = function() {
		window.playerEl = $('#videoPopin .player').attr('id', 'ytplayer');
		window.player = new YT.Player('ytplayer', { 
				height: '100%',
			    width: '100%',
			    playerVars: { 'rel': 0, 'showinfo': 0 }
		});
	}

	$('#videoPopin .close').click( function() {
		$('#videoPopin').fadeOut();
		window.player.pauseVideo()
	})
})