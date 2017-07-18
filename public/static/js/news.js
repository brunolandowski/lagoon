/* globals $:false, SliderFull */

$(document).ready(function() {

	var newsContainer = $('.newsContainer');
	$('.pagination').hide();

	$(window).scroll(function() {
     	if($(window).scrollTop() + $(window).height() == $(document).height()) {


     		//// CHARGEMENT NOUVEAUX ARTICLES EN AJAX ////////////////////////


     		setTimeout( function() {
     			var newArticles = $('<a href="article.php" class="new sail rollable" ><div class="image"><div class="imageContent coverImg" ><img src="dynamic/news/new_7.jpg" alt=""></div></div><div class="text"><div class="date">12 juin 2017</div><h4 class="title">Not one but two new models !</h4><div class="desc">It is with great pleasure that we announce the launch of two new Lagoon models: the 40 and 50... Both will be unveiled next Fall. For now, see below the first 3D images of new theses 2 new catamarans and stay con</div><div class="cta rollable">Lire cet article</div></div></a><a href="article.php" class="new sail rollable" ><div class="image"><div class="imageContent coverImg" ><img src="dynamic/news/new_8.jpg" alt=""></div></div><div class="text"><div class="date">12 juin 2017</div><h4 class="title">A 630 that adapts to her owner !</h4><div class="desc">Clifford Clarke, who became quadriplegic as a result of an accident, has recently taken delivery of his new 42... A keen sportsman, who took part in the Paralympic Games </div><div class="cta rollable">Lire cet article</div></div></a><a href="article.php" class="new motor rollable" ><div class="image"><div class="imageContent coverImg" ><img src="dynamic/news/new_9.jpg" alt=""></div></div><div class="text"><div class="date">12 juin 2017</div><h4 class="title">China (Shanghai) International Boat Show</h4>	                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</div><div class="cta rollable">Lire cet article</div></div></a>');
	        	newArticles.appendTo( newsContainer );	
     		}, 200 );	

     		////////////////////////////////////////////////////////////////        
	    }
  	});
});