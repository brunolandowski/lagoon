
$(document).ready(function() {

	$('#countries').change( function(){
		filterBoats( currentBoatsList );
	})

	$('.charter .filters .drop-container').each(function(index, item) {
		var container = $(item);
		var btn = container.find('.btn');
		var drop = container.find('.dropbox');

		drop.click(function(event) {
			event.stopPropagation();
		});

		var opened = false;
		
		var listUpdate = function() {
			var list = drop.find('li.active');
			if( list.length == 0 ) {
				btn.html( btn.data('placeholder'));
			} else if( list.length == 1 ) {
				btn.html( list.eq(0).html() );
			} else {
				btn.html( btn.data('modelecount').replace( '{count}', list.length ) );
			}

			var boats = [];
			list.each( function( index, item ){
				boats.push( $(item).data('id') );
			})

			filterBoats( boats );
		}

		btn.click(function(event) {		
			if( opened ) {
				$(window).trigger('clickOut');
				event.preventDefault();
				event.stopPropagation();
				opened = false;
				container.removeClass('opened');
				drop.removeClass('visible');
			} else {
				$(window).trigger('clickOut');
				event.preventDefault();
				event.stopPropagation();
				opened = true;
				container.addClass('opened');
				drop.addClass('visible');
			}
		})

		drop.find('li').click(function() {
			$(this).toggleClass('active')
			listUpdate();
		})

		$(window).on('clickOut', function() {
			if( opened ) {
				opened = false;
				container.removeClass('opened');
				drop.removeClass('visible');
			}
		});

	})
})


