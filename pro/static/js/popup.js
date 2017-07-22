$( ".likefacebook .popuplaunch .items button" ).click(function() {
  var dataitemfacebook = $(this).closest(".items").data("item");
  $(".popup[data-item='"+ dataitemfacebook +"']").fadeIn();
  $("body").css("overflow","hidden");
});

$( ".actu .popuplaunch .items button" ).click(function() {
	  var dataitemactu = $(this).closest(".items").data("item");
	  $(".popup[data-item='"+ dataitemactu +"']").fadeIn();
	  $("body").css("overflow","hidden");
});

$( ".popup" ).click(function() {
	 $(this).fadeOut();
	 $("body").css("overflow","scroll");
	});

	$(".popup").on('click', ':not(.items)', function (e) {
	     e.stopPropagation()
	    
	});