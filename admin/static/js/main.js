$(document).ready( function() {

	var win = $(window);
	var	ww, wh;

	$('.edit .content .bloc .head').click( function() {
		$(this).parent().toggleClass('collapse');
	})

	tinymce.init({ 
		selector:'textarea.editor',
		menubar: false,
		plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		],
		toolbar: 'undo redo | insert | styleselect | bold italic underline blockquote code | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700',
			'//www.tinymce.com/css/codepen.min.css']
	});

	tinymce.init({ 
		selector:'textarea.min-editor',
		menubar: false,
		plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		],
		toolbar: 'undo redo | bold italic underline code',
		content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700',
			'//www.tinymce.com/css/codepen.min.css']
	});

	win.resize( function() {
		wh =  $(window).height();
		$('.squareMenu').each( function(index, item) {
			if( wh < $(this).find('.items').height() + $('header').height() + 40 ) {
				$(this).addClass('fixed');
			} else {
				$(this).removeClass('fixed');
			}
		})

	})

	win.resize();


	

})
