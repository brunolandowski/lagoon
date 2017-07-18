/* globals $:false, SliderFull */

$(document).ready(function() {

	
	$('body').on('click', '.pressFolders .btn.addVisio, .presseComms .comm .btn.addVisio', function() {

		var filename = $(this).data('visiofilename');
		var fileid = $(this).data('id');
		var title = $(this).data('title');

		var data = {
            'title': title,
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
               		$('<div class="media rollable" data-id="'+fileid+'"><div class="visu"><img src="'+response+'" alt=""></div><div class="title">'+title+'</div><div class="name">'+filename+'</div><div class="removeBtn"></div></div>').appendTo('#visio .medias');
               		$('#visio').addClass('opened');
               		$("#visio .medias").scrollTop($("#visio .medias").prop("scrollHeight"));
               } 
            }
        });
	})
	
});