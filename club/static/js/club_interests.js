/* globals $:false, SliderFull */

$(document).ready(function() {

	var gallery = $('.gallery')
	var photos = gallery.find('img')

	$('body').on('click', '.photo-container .actions .btn.add, #zoomSlider .legend .btn.add', function() {

		var filename = $(this).data('legend');
		var fileid = $(this).data('id');

		var data = {
            'title': gallery.data('folder'),
            'filename': filename,
            'picture': fileid,
            'action': 'addItem'
        };

        $.ajax({
            url: "_ws.php",
            data: data,
            type: 'POST',
            success: function(response) {
               if( response != 'KO' ) {
               		$('<div class="media rollable" data-id="'+fileid+'"><div class="visu"><img src="'+response+'" alt=""></div><div class="title">'+gallery.data('folder')+'</div><div class="name">'+filename+'</div><div class="removeBtn"></div></div>').appendTo('#visio .medias');
               		$('#visio').addClass('opened');
               		$("#visio .medias").scrollTop($("#visio .medias").prop("scrollHeight"));
               } 
            }
        });
	})

	$('body').on('click', '.photo-container .actions .btn.download, #zoomSlider .legend .btn.download', function() {
		
		////////////////////////////////////////////////////////
		////////////////////////////////////////////////////////


		// 					DOWNLOAD ZIP


		////////////////////////////////////////////////////////
		////////////////////////////////////////////////////////
	})

	$('body').on('click', '.photo-container .image-thumb', function() {
		var legend = $(this).parent().find('.name').html();
		var id =  $(this).parent().data('id');
		legend += '<div class="btn rollable add" data-id="'+id+'" data-legend="'+$(this).parent().data('legend')+'" ></div>';
		legend += '<div class="btn rollable download" data-id="'+id+'"></div>';		

		new photoZoom( 
			gallery.data('folder'), 
			$(this).attr('src'), 
			legend
		)
	})

	$(window).resize(function() {
		gallery.justifiedGallery( {
			lastRow: 'nojustify',
        	rowHeight: 200,
        	maxRowHeight: 500,
        	captions: false,
        	margins : 10,
        	refreshSensitivity : 30
		})
	})
	
});