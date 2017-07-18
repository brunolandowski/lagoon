// open popup when click on item
$( ".slideEvent .items" ).click(function() {
  var dataitem = $(this).data("item");
  console.log(dataitem);
  $(".popup[data-item='"+ dataitem +"']").fadeIn();
});

$( ".popup" ).click(function() {
 $(this).fadeOut();
});

$(".popup").on('click', ':not(.items)', function (e) {
     e.stopPropagation()
    
});