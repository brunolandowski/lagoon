<?php 

$pageCSS = 'videos.css';
$pageJS = array('videos.js');
$className = 'videos';

include "header.php";
?>	
	<section>

		<div class="intro">
            <h1>Videos</h1>
            <h2>
            	Welcome to Lagoon's video site, home to the world leader in cruising catamarans. Here you will find the full selection of Lagoon catamaran videos, as well as coverage of the Lagoon Escapade owners' meeting. Lagoon invites you to sit back and enjoy the film...
            </h2>
        </div>

         <ul class="sorts">
            <li data-tag="all" class="sort active">tout</li>
            <li data-tag="sail" class="sort">Voile</li>
            <li data-tag="motor" class="sort">Moteur</li>
            <li data-tag="factory" class="sort">Usines</li>
            <li data-tag="event" class="sort">évènements</li>
        </ul>
		

		<div class="videoContainer">
			<div class="line">
		        <div class="video sail rollable" data-tag="sail" data-video="Pwr9yT9l2Es">
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/videos/video_1.jpg" alt="">
		            </div></div>
		            <div class="text">
		                <h4 class="title">560</h4>
		                <div class="desc">VPLP, Nauta Design, and Lagoon created a luxurious, high performance ocean-going catamaran: once more taking a leap ahead in terms of comfort, ergonomics, and style.</div>
		                <div class="cta rollable">Voir cette vidéo</div>
		            </div>
		        </div>
		        <div class="video motor rollable" data-tag="motor" data-video="Pwr9yT9l2Es">
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/videos/video_2.jpg" alt="">
		            </div></div>
		            <div class="text">
		                <h4 class="title">630 MY</h4>
		                <div class="desc">The 630 MY: Life on board a superb blue water cruising catamaran, along the French Riviera and in the Bahamas islands.</div>
		                <div class="cta rollable">Voir cette vidéo</div>
		            </div>
		        </div>
		        <div class="video event rollable"  data-tag="event" data-video="qExtbA6WMmo">
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/videos/video_3.jpg" alt="">
		            </div></div>
		            <div class="text">
		                <h4 class="title">LAGOON IS ONLY 30!</h4>
		                <div class="desc">Celebrating 30 years of passion, innovation and "Lagoon Attitude"</div>
		                <div class="cta rollable">Voir cette vidéo</div>
		            </div>
		        </div>
	        </div>

        	<div class="line">
		        <div class="video sail rollable"  data-tag="sail" data-video="3pZdRrE2OAI">
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/videos/video_4.jpg" alt="">
		            </div></div>
		            <div class="text">
		                <h4 class="title">39</h4>
		                <div class="desc">The filiation with the new Lagoon generation is apparent on first sight: vertical, bevelled bows, aft centered mast for sailing performance and ease of handling ... a strong character indeed!</div>
		                <div class="cta rollable">Voir cette vidéo</div>
		            </div>
		        </div>
		        <div class="video sail rollable"  data-tag="sail" data-video="Pwr9yT9l2Es">
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/videos/video_5.jpg" alt="">
		            </div></div>
		            <div class="text">
		                <h4 class="title">Seventy 7 construction</h4>
		                <div class="desc">Relive the key moments of the construction of the Lagoon fleet flagship from the preparation of the moulds to her first sailing by the beautiful city of Bordeaux.</div>
		                <div class="cta rollable">Voir cette vidéo</div>
		            </div>
		        </div>
		        <div class="video sail rollable"  data-tag="sail" data-video="yOjlt7aux30">
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/videos/video_6.jpg" alt="">
		            </div></div>
		            <div class="text">
		                <h4 class="title">52 F</h4>
		                <div class="desc">52: A major (r)evolution in the world of cruising catamarans</div>
		                <div class="cta rollable">Voir cette vidéo</div>
		            </div>
		        </div>
	        </div>
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
    
    <section id="videoPopin">
    	<div class="close rollable"></div>
    	<div class="bloc">            
            <div class="player"></div>
        </div>
    </section>

<?php 
include "footer.php";
?>