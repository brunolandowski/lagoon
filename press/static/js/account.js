$(document).ready(function() {

	var w = $(window);
	var	ww, wh;

	$('.subnav ul li').click(function() {
		$('.subnav ul li').filter('.active').removeClass('active');
		$(this).addClass('active');
		
		var tab = $(this).data('tab');

		$('.tab').hide();
		$('.tab[data-tab='+tab+']').show();
	})

	w.resize(function(){ 

		ww = w.width();
		wh = w.height();

	});

	w.resize();

})