<?php 

$pageCSS = 'article.css';
//$pageJS = array('article.js');
$className = 'article';

include "header.php";
?>	
    <section class='single-news-content'>
     	<div class="bg coverImg">
            <img src="dynamic/news/header.jpg" alt="">
        </div>
    	<div class="content">
    		<div class="text">
    			<div class="date">12 juin 2017</div>
                <h1 class="title">The 560: the 100th hull comes out of the yard!</h1>
    			<div class="desc">
    				<p>Lagoon achieved a new sales record in the category of 56-foot catamarans. Indeed, after the 42 and the 52, it is time for the 560 to celebrate her 100th unit! A blue sky and radiant faces were present during this event bringing together everyone who participated in the construction of this catamaran.</p>
    				<p>	The 560, launched in 2010 and designed by the VPLP architects for the exterior and the Nauta Design for the interior, focuses on large spaces and unrivaled arrangement possibilities. This model offers up to five completely independent cabins. She also offers a choice between a side galley in the port hull, which unveils an incredible saloon; and an open plan galley next to the saloon. To put it in a nutshell, a unique and volatile model in the world of 56-foot catamarans!</p>
    				<p>This 560 No.100 is heading to Italy in the end of April.</p>
    				<p>For more information on the 560, <a href="">click here!</a></p>
					<br>
    				<p><img src="dynamic/news/cata-lagoon-news-560-100.jpg" alt=""></p>    				
	    		</div>		    		
    		</div>
    	</div>
    </section>

    <section class="social hiddenBlock">
        <h3 class="title">PARTAGER</h3>
        <a target="_blank" href="http://www.facebook.com/sharer.php?u=#" class="rollable hiddenBlock shareBtn facebook">facebook</a>
        <a target="_blank" href="http://www.tumblr.com/share/link?url=#" class="rollable hiddenBlock shareBtn tumblr">tumblr</a>
        <a target="_blank" href="https://twitter.com/share?url=#&text=@@&hashtags=@@" class="rollable hiddenBlock shareBtn twitter">flicker</a>
    </section>

    <section class="crossContent">
        
        <h3 class="title hiddenBlock">A voir également</h3>

         <a href="article.php" class="article sail rollable prev hiddenBlock">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/news/new_1.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">12 juin 2017</div>
                <h4 class="title">The 560: the 100th hull comes out of the yard!</h4>
                <div class="desc">Lagoon achieved a new sales record in the category of 56-foot catamarans. Indeed, after the 42 and the 52, it is time for the 560 to celebrate her 100th unit! A blue sky and </div>
                <div class="cta rollable">Lire cet article</div>
            </div>
        </a>
        <a href="article.php" class="article motor rollable next hiddenBlock">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/news/new_2.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">05 Juillet 2017</div>
                <h4 class="title">Not one but two new models!</h4>
                <div class="desc">It is with great pleasure that we announce the launch of two new Lagoon models: the 40 and 50. Both will be unveiled next Fall. For now, see below the first 3D images of new theses 2 new catamarans and stay connected for</div>
                <div class="cta rollable">Lire cet article</div>
            </div>
    </section>




    <section id="newsletter" class="hiddenBlock cover">
        <div class="text">
            <h4 class="title">Newsletter</h4>
            <div class="desc">Lagoon is the world leader in sailing catamaran cruisers. Lagoon has been building luxury catamarans since 1984 and has kept developing its offer to satisfy all your expectations</div>
            <div id="newsform">
                <input type="text" name="email" placeholder="VOTRE EMAIL">
                <input type="text" name="lastname" placeholder="VOTRE EMAIL">
                <div class="cta rollable">Je m’abonne</div>
                <div class="message success">Votre demande a bien été enregistrée</div>
                <div class="message error">Une erreur s'est produite, veuillez réessayer ultérieurement</div>
                <div class="message wrong">Veuillez renseigner un email valide</div>
            </div>
        </div>          
    </section>

<?php 
include "footer.php";
?>