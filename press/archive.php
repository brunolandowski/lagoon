<?php 

$pageCSS = 'archive.css';
$pageJS = array('archive.js');
$className = 'archive';

include "header.php";
?>	
	<section>

		<div class="intro">
            <h1>Évènements</h1>
            <h2>
            	Welcome to Lagoon's video site, home to the world leader in cruising catamarans. Here you will find the full selection of Lagoon catamaran videos, as well as coverage of the Lagoon Escapade owners' meeting. Lagoon invites you to sit back and enjoy the film...
            </h2>
        </div>	

		<div class="archiveContainer">
			<div class="line">
		        <a href="folder.php" class="folder rollable" data-tag="sail" >
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/news/new_1.jpg" alt="">
		            </div></div>
		            <div class="text">
		            	<div class="date">12 juin 2017</div>
		                <h4 class="title">SAILING4HANDICAP</h4>
		                <div class="desc">C'est en 2014 que Lagoon lance le MY 630, inspiré de son homologue à voile le Lagoon 620. Ce catamaran à moteur d'une longueur de 64 pieds (19,50 m) permet </div>
		                <div class="cta rollable">Ouvrir le dossier</div>
		            </div>
		        </a>
		        <a href="folder.php" class="folder rollable" data-tag="motor" >
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/news/new_2.jpg" alt="">
		            </div></div>
		            <div class="text">
		            	<div class="date">12 juin 2017</div>
		                <h4 class="title">630 MY</h4>
		                <div class="desc">The 630 MY: Life on board a superb blue water cruising catamaran, along the French Riviera and in the Bahamas islands.</div>
		                <div class="cta rollable">Ouvrir le dossier</div>
		            </div>
		        </a>
		        <a href="folder.php" class="folder rollable"  data-tag="event" >
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/news/new_3.jpg" alt="">
		            </div></div>
		            <div class="text">
		            	<div class="date">12 juin 2017</div>
		                <h4 class="title">LAGOON IS ONLY 30!</h4>
		                <div class="desc">Celebrating 30 years of passion, innovation and "Lagoon Attitude"</div>
		                <div class="cta rollable">Ouvrir le dossier</div>
		            </div>
		        </a>
	        </div>

        	<div class="line">
		        <a href="folder.php" class="folder rollable"  data-tag="sail" >
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/news/new_4.jpg" alt="">
		            </div></div>
		            <div class="text">
		            	<div class="date">12 juin 2017</div>
		                <h4 class="title">39</h4>
		                <div class="desc">The filiation with the new Lagoon generation is apparent on first sight: vertical, bevelled bows, aft centered mast for sailing performance and ease of handling ... a strong character indeed!</div>
		                <div class="cta rollable">Ouvrir le dossier</div>
		            </div>
		        </a>
		        <a href="folder.php" class="folder rollable"  data-tag="sail" >
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/news/new_5.jpg" alt="">
		            </div></div>
		            <div class="text">
		            	<div class="date">12 juin 2017</div>
		                <h4 class="title">Seventy 7 construction</h4>
		                <div class="desc">Relive the key moments of the construction of the Lagoon fleet flagship from the preparation of the moulds to her first sailing by the beautiful city of Bordeaux.</div>
		                <div class="cta rollable">Ouvrir le dossier</div>
		            </div>
		        </a>
		        <a href="folder.php" class="folder rollable"  data-tag="sail" >
		            <div class="image"><div class="imageContent coverImg" >
		                <img src="dynamic/news/new_6.jpg" alt="">
		            </div></div>
		            <div class="text">
		            	<div class="date">12 juin 2017</div>
		                <h4 class="title">52 F</h4>
		                <div class="desc">52: A major (r)evolution in the world of cruising catamarans</div>
		                <div class="cta rollable">Ouvrir le dossier</div>
		            </div>
		        </a>
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