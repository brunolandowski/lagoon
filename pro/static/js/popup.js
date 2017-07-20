// open popup when click on item
$( ".likefacebook .popuplaunch .items" ).click(function() {
  var dataitemfacebook = $(this).data("item");
  $(".popup[data-item='"+ dataitemfacebook +"']").fadeIn();
});

$( ".actu .popuplaunch .items button" ).click(function() {
  var dataitemactu = $(this).closest(".items").data("item");
  $(".popup[data-item='"+ dataitemactu +"']").fadeIn();
});

$( ".popup" ).click(function() {
 $(this).fadeOut();
});

$(".popup").on('click', ':not(.items)', function (e) {
     e.stopPropagation()
    
});