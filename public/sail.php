<?php 

$pageCSS = 'sail.css';
$pageJS = array('modele.js', 'newsletter_form.js');
$className = 'sail';

include "header.php";
?>	
	<div class="subnav">
		<ul>
			<li data-anchor-link="presentation">Présentation</li>
			<li data-anchor-link="video">Video</li>
			<li data-anchor-link="map">Plans</li>
			<li data-anchor-link="specs">Spécifications techniques</li>
            <li data-anchor-link="view360">Vue 360°</li>
			<li data-anchor-link="gallery">galerie</li>
		</ul>	
		<div class="cta quoteRequestBtn rollable">Demander un devis</div>

        <div class="quoteAsking">
            <div class="close rollable"></div>
            <div class="title">demander un devis <span> pour le 42</span></div>
            <form method="post" class="bloc">
                <div class="form">
                    <input name= "firstname" type="text" placeholder="PRÉNOM">
                    <input name= "lastname" type="text" placeholder="NOM">
                    <input name= "email" type="text" placeholder="EMAIL">
                    <input name= "phone" type="text" placeholder="TÉLÉPHONE (optionnel)">
                    <input name= "city" type="hidden" placeholder="">                    
                </div>

                <div class="map">
                    <div class="baseline">Sélectionnez votre interlocuteur privilégié sur la carte :</div>
                    <div id="mapQuote"></div>
                </div>
                <div class="text"><button type="submit" class="rollable cta">J'envoie ma demande</button></div>
            </form>
        </div>
	</div>

    <div class="toolbox">
        <a href="" data-text="configurer" class="btn rollable config"></a>
        <a href="" data-text="brochures" class="btn rollable docs"></a>
        <a href="" data-text="location" class="btn rollable charter"></a>
    </div>

    <section data-anchor="presentation" class="hiddenBlock sliderFull">
        <div class="slides">
            <div class="slide">
                <div class="image coverImg">
                    <img 
                        src="dynamic/sail/slider_1.jpg"                 
                        srcset="
                            dynamic/sail/slider_1.jpg 2880w,
                            dynamic/sail/slider_1_1024.jpg 2048w,
                            dynamic/sail/slider_1_760.jpg 1520w,
                            dynamic/sail/slider_1_375.jpg 750w"

                        sizes="100vw"
                        alt="">
                </div>
                <div class="text">
                    <h1 class="title">Discover 42</h1>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                </div>
            </div>
            <div class="slide">
                <div class="image coverImg">
                    <img 
                        src="dynamic/sail/slider_2.jpg"                 
                        srcset="
                            dynamic/sail/slider_2.jpg 2880w,
                            dynamic/sail/slider_2_1024.jpg 2048w,
                            dynamic/sail/slider_2_760.jpg 1520w,
                            dynamic/sail/slider_2_375.jpg 750w"

                        sizes="100vw"
                        alt="">
                </div>
                <div class="text">
                    <h2 class="title">Discover 42</h2>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                </div>
            </div>
            <div class="slide">
                <div class="image coverImg">
                    <img 
                        src="dynamic/sail/slider_1.jpg"                 
                        srcset="
                            dynamic/sail/slider_1.jpg 2880w,
                            dynamic/sail/slider_1_1024.jpg 2048w,
                            dynamic/sail/slider_1_760.jpg 1520w,
                            dynamic/sail/slider_1_375.jpg 750w"

                        sizes="100vw"
                        alt="">
                </div>
                <div class="text">
                    <h2 class="title">Discover 42</h2>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                </div>
            </div>
            <div class="animMask mask1"></div>
            <div class="animMask mask2"></div>
        </div>
        <div class="puces">
            <div data-index="0" class="puce rollable active"></div>
            <div data-index="1" class="puce rollable"></div>
            <div data-index="2" class="puce rollable"></div>
            <div data-index="3" class="puce rollable"></div>
            <div data-index="4" class="puce rollable"></div>
        </div>
    </section>

    <section class="hiddenBlock fullImage_text left">
        <div class="bg coverImg">
            <img 
                src="dynamic/sail/fullimage_text_1.jpg"                 
                srcset="
                    dynamic/sail/fullimage_text_1.jpg 2880w,
                    dynamic/sail/fullimage_text_1_1024.jpg 2048w,
                    dynamic/sail/fullimage_text_1_760.jpg 1520w,
                    dynamic/sail/fullimage_text_1_375.jpg 750w"

                sizes="100vw"
                alt="">
        </div>
       	<div class="content">
        	<div class="text">
        		<h3 class="title">Un plan de pont astucieux</h3>
				<div class="desc">Le mat reculé et le foc auto vireur, gage de performance à la voile et de facilité d’utilisation, offrent la possibilité de regrouper toutes les manœuvres à un seul endroit.</div>
				<div class="title">Un poste de barre ergonomique, au niveau de la cloison de roof</div>
				<div class="desc">Communication directe entre le cockpit et le carré, Circulation améliorée, en avant et en arrière du siège du barreur, un accès direct au roof pour faciliter l’accès à la bôme, un bimini composite avec panneau coulissant pour garantir une bonne visibilité sur les voiles, une poutre de fermeture pour sécuriser le poste de barre en navigation.</div>
			</div>
		</div>
    </section>

    <section data-anchor="video" class="hiddenBlock playerVideoFull" data-id="oGuyQcK56Aw">
    	<div class="player"></div>
    </section>
	
	<section class="hiddenBlock fullImage_text left lineMob ">
        <div class="bg coverImg">
            <img 
                src="dynamic/sail/fullimage_text_2.jpg"                 
                srcset="
                    dynamic/sail/fullimage_text_2.jpg 2880w,
                    dynamic/sail/fullimage_text_2_1024.jpg 2048w,
                    dynamic/sail/fullimage_text_2_760.jpg 1520w,
                    dynamic/sail/fullimage_text_2_375.jpg 750w"

                sizes="100vw"
                alt="">
        </div>
       	<div class="content">
        	<div class="text">
        		<h3 class="title">Un cockpit cosy, dessiné par des courbes douces et élégantes</h3>
				<div class="desc">
                    <p>Un seul niveau depuis la plateforme arrière vers le carré : une « révolution » structurelle,</p>
				    <p>Une toute nouvelle ergonomie qui garantit un excellent agencement de l’espace et une circulation fluide à bord,</p>
				    <p>Une grande baie vitrée, qui occupe toute la largeur du roof, et permet une liaison avec les volumes intérieurs sans comparaison.</p>
				    <p>Les marches suspendues, au niveau des jupes arrière, offrent une toute nouvelle perception du bateau : une plateforme unie, large et accueillante, digne d’un grand bateau.</p>
                </div>
			</div>
		</div>
    </section>

	<section  class="hiddenBlock fullImage_text right lineMob">
        <div class="bg coverImg">
            <img 
                src="dynamic/sail/fullimage_text_3.jpg"                 
                srcset="
                    dynamic/sail/fullimage_text_3.jpg 2880w,
                    dynamic/sail/fullimage_text_3_1024.jpg 2048w,
                    dynamic/sail/fullimage_text_3_760.jpg 1520w,
                    dynamic/sail/fullimage_text_3_375.jpg 750w"

                sizes="100vw"
                alt="">
        </div>
       	<div class="content">
        	<div class="text">
        		<h3 class="title">Lorem ipsum</h3>
        		<div class="desc">
                    <p>L’influence de l’architecture organique résonne dans les volumes intérieurs.</p>
                    <p>De jolis bois moulés soulignent les courbes douces du mobilier intérieur, dessiné avec soin par Nauta. Encore une fois, le cabinet de design italien marie élégance et fonctionnalité, et nous offre deux versions sur ce nouveau modèle</p>
                </div>
			</div>
		</div>
    </section>

    <section data-anchor="map" class="hiddenBlock versions" >
    	<div class="text">
    		<h3 class="title">3 ou 4 cabines doubles...<br> et quelles cabines !</h3>
    		<div class="desc">Lits doubles island bed pour les cabines arrière et lits avec accès latéraux pour les cabines avant. Les cabines arrière profitent d’une salle d’eau avec douche séparée. De très grands vitrages dans les cabines offrent une belle lumière et une magnifique vue vers l’extérieur. Les vitrages verticaux du roof illuminent le carré : une ambiance claire et douce parfaitement équilibrée entre l’espace cuisine et l’espace salon. La cuisine, en « U », parfaitement équipée avec de larges surfaces de travail et de nombreux rangements, est tournée vers le cockpit extérieur. Le soin apporté au détail et l’exploitation des volumes font de ce nouvel intérieur un espace unique et agréable à vivre. </div>
    	</div>
        
        <div class="list">
            <ul>
               	<li class="version" data-legend="version 4 cabines" data-zoom="dynamic/sail/version_4cabs.png" style="background-image:url('dynamic/sail/version_4cabs.png');">version 4 cabines</li>
               	<li class="version" data-legend="version 3 cabines" data-zoom="dynamic/sail/version_3cabs.png" style="background-image:url('dynamic/sail/version_3cabs.png');">version 3 cabines</li>
               	<li class="version" data-legend="Salon" data-zoom="dynamic/sail/version_salon.png" style="background-image:url('dynamic/sail/version_salon.png');">Salon</li>
               	<li class="version" data-legend="version 3 cabines" data-zoom="dynamic/sail/version_3cabs.png" style="background-image:url('dynamic/sail/version_3cabs.png');">version 3 cabines</li>
               	<li class="version" data-legend="version 4 cabines" data-zoom="dynamic/sail/version_4cabs.png" style="background-image:url('dynamic/sail/version_4cabs.png');">version 4 cabines</li>
            </ul>
           <div class="arrow rollable left"></div>
           <div class="arrow rollable right"></div>
       </div>
    </section>

    <section  class="hiddenBlock fullImage_text gradient bg-scroll right">
        <div class="bg cover" style="background-image: url('static/img/modele/knowledge.jpg');"></div>
        <div class="content">
            <div class="text">
                <h4 class="title">Le savoir-faire Lagoon</h4>
                <div class="desc">
                    <p>Moulage en infusion et injection : gain de poids, structure optimisée et protection de l’environnement et des hommes,</p>
                    <p>Menuiserie intérieure en bois reconstitué Alpi® pour favoriser la longévité des boiseries et le développement durable,</p>
                    <p>Les vitrages verticaux : meilleure protection du soleil, optimisation du volume et de la hauteur sous barrot,</p>
                    <p>Nacelle en aile de mouette : meilleur confort dans la mer formée,</p>
                    <p>Poutre centrale recevant la ferrure d’étai, le davier de mouillage et le tangonnet de code 0.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="halfSquare left lineMob">
        <div class="content">
            <div class="text hiddenBlock">
                <h3 class="title">Le gréement : performance et facilité d'utilisation</h3>
                <div class="desc">
                    <p>Le mât reculé présente de nombreux avantages sur un catamaran de croisière :</p>
                    <p>Un génois auto-vireur pour une grande facilité d'utilisation,</p>
                    <p>Un plus grand triangle avant pour un choix plus important de voiles de portant,</p>
                    <p>Une bôme plus courte pour une grande facilité de manœuvre,</p>
                    <p>Une grand voile plus large en haut, profitant de vents moins perturbés pour un réel gain en performance,</p>
                    <p>Le recentrage des poids qui réduit considérablement le tangage.</p>
                </div>
                <a href="" class="cta rollable">Voir le blog</a>
            </div>
        </div>   
        <div class="image coverImg">
            <img 
                src="dynamic/sail/halfSquare_1.jpg"                 
                srcset="
                    dynamic/sail/halfSquare_1.jpg 2000w,
                    dynamic/sail/halfSquare_1_1024.jpg 1024w,
                    dynamic/sail/halfSquare_1_760.jpg 1520w,
                    dynamic/sail/halfSquare_1_375.jpg 750w"

                sizes="(min-width: 561px) 50vw, 100vw"
                alt="">
        </div>             
    </section>

    <section class="hiddenBlock awards miniSlider">
        <div class="text"><h3 class="title">Récompenses du Lagoon 42</h3></div>
        <div class="list">
            <ul>
                <li>
                    <div class="visu"><img src="dynamic/sail/award_1.png" alt=""></div>
                    <div class="text">Sailing today<br>awards 2016 multihull</div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/award_2.png" alt=""></div>
                    <div class="text">SAIL Best boats 2016<br> Cruising World</div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/award_3.png" alt=""></div>
                    <div class="text"> Asia boating <br>award 2016</div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/award_4.png" alt=""></div>
                    <div class="text">Boat of the year <br>2017</div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/award_1.png" alt=""></div>
                    <div class="text">Sailing today <br>awards 2016 multihull</div>
                </li>
            </ul>
           <div class="arrow rollable left"></div>
           <div class="arrow rollable right"></div>
        </div>
    </section>
    
    <section class="hiddenBlock bg-scroll">
        <div class="bg coverImg" >
            <img 
                src ="dynamic/sail/imageFull.jpg"                 
                srcset="
                    dynamic/sail/imageFull.jpg 2880w,
                    dynamic/sail/imageFull_1024.jpg 2048w,
                    dynamic/sail/imageFull_760.jpg 1520w,
                    dynamic/sail/imageFull_375.jpg 750w"

                sizes="100vw"
                alt=""></div>
    </section>
    
    <section data-anchor="specs" class="specs">
        <div class="line hiddenBlock"><h3 class="title">Spécifications</h3></div>
        <div class="line hiddenBlock">
            <div class="job"><div class="content">Architecte naval<div class="name">Van Peteghem-Lauriot Prévost</div></div></div>
        </div>
        <div class="line hiddenBlock">
            <div class="job"><div class="content">Style extérieur<div class="name">Design intérieur</div></div></div>
            <div class="job"><div class="content">Design intérieur<div class="name">Nauta Design</div></div></div>
        </div>
        <div class="blocs hiddenBlock">
            <div class="bloc">
                <div class="content">
                    <div class="spec">Longueur hors tout <div class="value">12,80m</div></div>
                    <div class="spec">Largeur hors tout <div class="value">7,70m</div></div>
                    <div class="spec">Tirant d’eau <div class="value">1,25m</div></div>
                    <div class="spec">Tirant d’air <div class="value">20,65m</div></div>
                    <div class="spec">Déplacement lège (CE) <div class="value">12 t</div></div>
                </div>
            </div>
            <div class="bloc">
                <div class="content">
                    <div class="spec">Surface de voile au près<div class="value">90 m²</div></div>
                    <div class="spec">Grand-voile lattée<div class="value">55m²</div></div>
                    <div class="spec">Grand-voile à corne (opt.)<div class="value">59m²</div></div>
                    <div class="spec">Foc autovireur sur enrouleur<div class="value">35m²</div></div>
                    <div class="spec">Code 0 (opt.)<div class="value">68m²</div></div>
                </div>
            </div>
            <div class="bloc">
                <div class="content">
                    <div class="spec">Moteur std<div class="value">2 x 45 cv YANMAR 4JH45</div></div>
                    <div class="spec">Capacité réservoir carburant<div class="value">300 l (+300l en option)</div></div>
                    <div class="spec">Capacité réservoir eau<div class="value">300 l (+300l in option)</div></div>
                    <div class="spec">Nb de couchages<div class="value">6 à 12</div></div>
                    <div class="spec">Homologation CE<div class="value">A :12 ; B :14 ; C : 20 ; D: 30</div></div>
                </div>
            </div>
        </div>       
    </section>

    <section data-anchor="view360" class="hiddenBlock">
        <script src="static/js/vendor/embedpano.js"></script>
        <div id="krpanoDIV" style="width:100%;height:100%;"></div>
        <script> 
            embedpano({
                swf     :"static/pano/krpano.swf", 
                flash   :"fallback",
                html5   :"only+webgl", 
                xml     :"dynamic/sail/pano/42.xml", 
                target  :"krpanoDIV",
                mwheel  :false
            });
        </script>
    </section>
    
    <section data-anchor="gallery" class="hiddenBlock gallery">
        <h3 class="title">galerie</h3>
        <ul class="sorts">
            <li data-tag="all" class="sort active">tout</li>
            <li data-tag="sdb" class="sort">cabines et salles de bain</li>
            <li data-tag="cpt" class="sort">carré cockpit</li>
            <li data-tag="nav" class="sort">en navigation</li>
        </ul>
        <div class="list">
            <div class="line hiddenBlock full">
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_1.jpg" data-id="gallery_1" data-legend="gallery_1">
                    <img src='dynamic/sail/gallery_1.jpg' alt=""/>
                </div>                    
                <div data-tag="cpt" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_2.jpg" data-id="gallery_2" data-legend="gallery_2">
                    <img src='dynamic/sail/gallery_2.jpg' alt=""/>
                </div>                    
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_3.jpg" data-id="gallery_3" data-legend="gallery_3">
                    <img src='dynamic/sail/gallery_3.jpg' alt=""/>
                </div>                    
            </div>
                    
            <div class="line hiddenBlock full">
                    
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_4.jpg" data-id="gallery_4" data-legend="gallery_4">
                    <img src='dynamic/sail/gallery_4.jpg' alt=""/>
                </div>                    
                <div data-tag="sdb" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_5.jpg" data-id="gallery_5" data-legend="gallery_5">
                    <img src='dynamic/sail/gallery_5.jpg' alt=""/>
                </div>                    
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_6.jpg" data-id="gallery_6" data-legend="gallery_6">
                    <img src='dynamic/sail/gallery_6.jpg' alt=""/>
                </div>
                    
            </div>
                    
            <div class="line hiddenBlock full">                    
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_7.jpg" data-id="gallery_7" data-legend="gallery_7">
                    <img src='dynamic/sail/gallery_7.jpg' alt=""/>
                </div>                    
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_8.jpg" data-id="gallery_8" data-legend="gallery_8">
                    <img src='dynamic/sail/gallery_8.jpg' alt=""/>
                </div>                    
                <div data-tag="sdb" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_9.jpg" data-id="gallery_9" data-legend="gallery_9">
                    <img src='dynamic/sail/gallery_9.jpg' alt=""/>
                </div>
            </div>

            <div class="line hiddenBlock full">
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_10.jpg" data-id="gallery_10" data-legend="gallery_10">
                    <img src="dynamic/sail/gallery_10.jpg" alt="" />
                </div>
                <div data-tag="sdb" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_11.jpg" data-id="gallery_11" data-legend="gallery_11">
                    <img src="dynamic/sail/gallery_11.jpg" alt="" />
                </div>
                <div data-tag="nav" class="photo rollable coverImg" data-zoom="dynamic/sail/gallery_12.jpg" data-id="gallery_12" data-legend="gallery_12">
                    <img src="dynamic/sail/gallery_12.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="hiddenBlock quoteRequest">
        <div class="cta quoteRequestBtn rollable">Demander un devis</div>
    </section>

    <section class="hiddenBlock press miniSlider">
        <div class="text"><h3 class="title">Revues de presse</h3></div>
        <div class="list">
            <ul>
                <li>
                    <div class="visu"><img src="dynamic/sail/press_1.jpg" alt=""></div>
                    <div class="text">
                        <div class="name">The World of Yachts</div>
                        <div class="date">01/2017</div>
                        <div class="desc">Starke Leistung, eine innovative Rigg-Geometrie, spannende Ideen und mehr Freude am Segeln: Der neue LAGOON 42 </div>
                    </div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/press_2.jpg" alt=""></div>
                    <div class="text">
                        <div class="name">Yachts</div>
                        <div class="date">09/2016</div>
                        <div class="desc">The central position of the mast offers numerous advantages: an aerodynamically effective </div>
                    </div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/press_3.jpg" alt=""></div>
                    <div class="text">
                        <div class="name">The World of Yachts</div>
                        <div class="date">08/2016</div>
                        <div class="desc">As with other recent Lagoons, the entire sail plan and rig have been shifted aft, which opens </div>
                    </div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/press_4.jpg" alt=""></div>
                    <div class="text">
                        <div class="name">Yachts Magazine</div>
                        <div class="date">04/2016</div>
                        <div class="desc">Starke Leistung, eine innovative Rigg-Geometrie, spannende Ideen und mehr Freude am Segeln: Der neue LAGOON 42</div>
                    </div>
                </li>
                <li>
                    <div class="visu"><img src="dynamic/sail/press_1.jpg" alt=""></div>
                    <div class="text">
                        <div class="name">Yachts</div>
                        <div class="date">012/2015</div>
                        <div class="desc">The central position of the mast offers numerous advantages: an aerodynamically effective </div>
                    </div>
                </li>
            </ul>
           <div class="arrow rollable left"></div>
           <div class="arrow rollable right"></div>
        </div>
    </section>

    <section id="newsletter" class="hiddenBlock cover">
        <div class="text">
            <h4 class="title">Newsletter</h4>
            <div class="desc">Lagoon is the world leader in sailing catamaran cruisers. Lagoon has been building luxury catamarans since 1984 and has kept developing its offer to satisfy all your expectations</div>
            <form id="newsform" method="post">
                <input type="email" name="email" id="newsletter_email" placeholder="Votre email">
                <input type="text" name="lastname" id="newsletter_lastname" placeholder="Votre nom">
                <button type="submit" class="cta rollable">Je m’abonne</button>
                <div class="message success" style="display: none;">Votre demande a bien été enregistrée</div>
                <div class="message error" style="display: none;">Une erreur s'est produite, veuillez réessayer ultérieurement</div>
                <div class="message wrong" style="display: none;">Veuillez renseigner un email valide</div>
            </form>
        </div>          
    </section>

    <script>
        var sites = [
            ['TwinStar Yachting', 50.9708596386998, 11.3475036621094, 1, '190'],
            ['Yacht Voyage', 17.0200004577637, -61.7799987792969, 2, '180'],
            ['MASTER YACHTING', 48.2000007629395, 16.3700008392334, 3, '109'],
            ['Mare Yachting d.o.o.', 43.7190707130757, 15.9000492095947, 4, '189'],
            ['NAUTIKA CENTAR NAVA', 43.5, 16.4200000762939, 5, '222'],
            ['Yachting 2000', 44.0552714937904, 15.2974319458008, 6, '212'],
            ['Bestsail Murter (Marina Betina)', 43.824751408917, 15.5928933620453, 7, '203'],
            ['Bestsail Split (Marina Kastela)', 43.763163110395, 16.404937505722, 8, '204'],
            ['Yachting 2000', 43.7194429100816, 15.8999633789062, 9, '213'],
            ['DREAM YACHT CROATIA d.o.o. - Marina Zaton (Sibenik)', 43.7275, 15.83, 10, '245'],
            ['DREAM YACHT CROATIA d.o.o. - ACI Marina (Dubrovnik)', 42.67, 18.12638888888889, 11, '246'],
            ['DREAM YACHT CROATIA d.o.o. - Marina Baotic (Trogir)', 43.5144444, 16.235277777777778, 12, '247'],
            ['DREAM YACHT CROATIA d.o.o - Marina Kotor', 42.4408333, 18.776666666666667, 13, '248'],
            ['CAT MARINA', 38.3699989318848, -0.479999989271164, 14, '141'],
            ['BBMED - MULTIHULL PALMA MEDITERRANEO S.L.', 39.5004997253418, 2.7491500377655, 15, '99'],
            ['OCEAN CAT', 37.1100006103516, -6.76000022888184, 16, '150'],
            ['CATAMARANS BARCELONA XXI S.L', 41.3800010681152, 2.19000005722046, 17, '185'],
            ['Yacht Voyage', 39.568034, 2.642637, 18, '164'],
            ['Bestsail Palma de Mallorca', 39.5678524888689, 2.63182640075684, 19, '197'],
            ['KVO Location', 41.4748649597168, 9.07141971588135, 20, '104'],
            ['VENT PORTANT', 46.1500015258789, -1.14999997615814, 21, '93'],
            ['MEREX Yachts', 44.8600006103516, -0.540000021457672, 22, '92'],
            ['APACA', 43.0847129821777, 6.15798711776733, 23, '102'],
            ['Seaways Yachting', 43.5665041, 7.076748199999997, 24, '198'],
            ['Bestsail Antibes Golfe Juan', 43.5642383635387, 7.0740795135498, 25, '199'],
            ['Poe Location', 43.10222, 6.18444, 26, '211'],
            ['Ajaccio Marine Center', 41.917795, 8.742224, 27, '219'],
            ['Atlantique Concept Voile', 47.43119, -3.22145, 28, '225'],
            ['ECKER YACHT & FLUG GmbH', 39.0060005187988, 22.9599990844727, 29, '140'],
            ['KIRIACOULIS MEDITERRANEAN', 37.9099998474121, 23.7199993133545, 30, '78'],
            ['ISTION YACHTING LEFKAS ', 38.8303833007812, 20.7121486663818, 31, '187'],
            ['ISTION YACHTING KOS', 36.8904685974121, 27.3024654388428, 32, '188'],
            ['ISTION YACHTING ATHENS', 37.9274101257324, 23.6902141571045, 33, '186'],
            ['ECKER YACHT & FLUG GmbH', 38.8300018310547, 20.7099990844727, 34, '184'],
            ['DIVINE YACHTS', 37.9309719751606, 23.6923277378082, 35, '191'],
            ['Bestsail Lavrion', 37.7120297554717, 24.0559065341949, 36, '205'],
            ['Bestsail Kos', 36.8917631359987, 27.3011219501495, 37, '206'],
            ['Sail Aegean', 39.360093, 22.935534, 38, '228'],
            ['Sail Aegean,', 39.122311, 23.728123, 39, '229'],
            ['Dream Yacht Mediterranee - Marina Alimos (Athens)', 37.9188889, 23.700833333333332, 40, '232'],
            ['Dream Yacht Mediterranee - Lavrio Port', 37.7072222, 24.066111111111113, 41, '233'],
            ['Dream Yacht Mediterranee - Paroikia Port (Paros)', 37.0875, 25.15222222222222, 42, '236'],
            ['Dream Yacht Mediterranee - Skiathos Marina (Skiathos)', 39.165, 23.493055555555557, 43, '237'],
            ['Dream Yacht Mediterranee - Gouvia Marina (Corfu)', 39.6502778, 19.849444444444444, 44, '238'],
            ['Dream Yacht Mediterranee - Lefkas Marina (Lefkas)', 38.8297222, 20.71472222222222, 45, '239'],
            ['Dream Yacht Mediterranee - Kos Marina (Kos)', 36.8933333, 27.3, 46, '240'],
            ['Dream Yacht Mediterranee - Mandraki Port (Rhodos)', 36.4508333, 28.22611111111111, 47, '241'],
            ['DREAM YACHT CHARTER TURKEY - Ece Marina (Fethiye)', 36.6319444, 29.102777777777778, 48, '243'],
            ['Yacht Voyage', 12.039999961853, -61.75, 49, '181'],
            ['VENTOFRESCO Srl', 40.5299987792969, 17.4400005340576, 50, '81'],
            ['SICILY CATAMARAN CHARTERS SRL', 38.1300010681152, 13.2200002670288, 51, '115'],
            ['Yacht Voyage', 40.914583, 9.520848, 52, '217'],
            ['GULLIVER YACHTS', 41.7400016784668, 12.25, 53, '158'],
            ['Bestsail Punta Ala', 42.8038238179525, 10.7346725463867, 54, '200'],
            ['Bestsail Palermo', 38.1449863152396, 13.3709943294525, 55, '201'],
            ['Bestsail Milazzo', 38.2178937263925, 15.2409017086029, 56, '202'],
            ['Yachting 2000', 43.3943210984937, 10.4246520996094, 57, '214'],
            ['NORTH SARDINIA SAIL', 40.977825, 9.51416, 58, '215'],
            ['NORTH SARDINIA SAIL', 43.404736, 10.406971, 59, '216'],
            ['VPM Bestsail Yacht Charters Malta', 35.8873377356434, 14.5205998420715, 60, '192'],
            ['Yacht Voyage', 42.4199981689453, 18.7600002288818, 61, '166'],
            ['TAHITI YACHT CHARTER', -16.7299995422363, -151.479995727539, 62, '137'],
            ['Private Charter', -17.51806, -149.53361, 63, '210'],
            ['Sea Way, Lda', 38.701855514061, -9.16946411132812, 64, '172'],
            ['Marlin Boat Tours', 38.699444, -9.178737, 65, '218'],
            ['Sea Sky, Lda', 38.474491, -8.885837, 66, '223'],
            ['VPM Bestsail Yacht Charters Seychelles', -4.66334557980575, 55.4998826980591, 67, '138'],
            ['Wind Seychelles', 55.64, -4.6411111, 68, '226'],
            ['MARINE CAT SEY', -4.6411111, 55.64, 69, '227'],
            ['Vi-Dream Co.Ltd', 8.1710517255393, 98.3385632161866, 70, '177'],
            ['ECKER YACHT & FLUG GmbH', 36.75, 28.9400005340576, 71, '183'],
            ['Bestsail Fethiye', 36.6228212803516, 29.1026973724365, 72, '207'],
            ['Bestsail Marmaris', 36.8516725784107, 28.2792592048645, 73, '208'],
            ['SUNNY HOLIDAYS', 27.255278, 37.000109, 74, '220'],
            ['YaKSEL YATCILIK TURIZM VE TIC.A.S.', 28.277222, 36.851465, 75, '221']
        ];
    </script>
    <script>
        function initMap() {

            var map = new google.maps.Map(document.getElementById('mapQuote'), {
                zoom: 3,
                 center: {lat: 30, lng: 0},
                scrollwheel: false,
                mapTypeControl: false,
                zoomControl: true,
                zoomControlOptions: { position: google.maps.ControlPosition.RIGHT_BOTTOM },
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [
                    {
                        "featureType":"landscape",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":65},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"poi",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":51},
                            {"visibility":"simplified"}
                        ]
                    },
                    {
                        "featureType":"road.highway",
                        "stylers":[
                            {"saturation":-100},
                            {"visibility":"simplified"}
                        ]
                    },
                    {
                        "featureType":"road.arterial",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":30},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"road.local",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":40},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"transit",
                        "stylers":[
                            {"saturation":-100},
                            {"visibility":"simplified"}
                        ]
                    },
                    {
                        "featureType":"administrative.country",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":50},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"administrative.country",
                        "elementType":"geometry.stroke",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":60},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"administrative.province",
                        "stylers":[
                            {"visibility":"off"}
                        ]
                    },
                    {
                        "featureType":"water",
                        "elementType":"labels",
                        "stylers":[
                            {"visibility":"on"},
                            {"lightness":30},
                            {"saturation":-100}
                        ]
                    },
                    {
                        "featureType":"water",
                        "elementType":"geometry",
                        "stylers":[
                            {"hue":"#00adbb"},
                            {"lightness":50},
                            {"saturation":-100}
                        ]
                    }
                ]
            });

            var infowindow = new google.maps.InfoWindow({ content: "formulaire", pixelOffset: new google.maps.Size(-33, 10 ) });

            var imageMapMarker = {
                url:  'static/img/common/map_marker.png',
                size: new google.maps.Size(130, 90),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(13, 40),
                scaledSize: new google.maps.Size(65, 45)
            };

            var markersList = [];

            function setMarkers(map, markers) {
                for (var i = 0; i < markers.length-1; i++) {
                    var site = markers[i];
                    var siteLatLng = new google.maps.LatLng(site[1], site[2]);

                    var marker = new google.maps.Marker({
                        position: siteLatLng,
                        map: map,
                        icon: imageMapMarker,
                        title: site[0],
                        zIndex: site[3],
                        customInfo: site[4]
                    });

                    markersList.push( marker );

                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.setContent(this.title);
                        infowindow.open(map, this);
                        window.currentMapID = this.customInfo;
                    });
                }
            }

            setMarkers( map, sites );

            var markerCluster = new MarkerClusterer( map, markersList,
                { imagePath: 'static/img/common/m'}
            );

             google.maps.event.addListener(infowindow, 'domready', function() {

                var iwOuter = $('.gm-style-iw').css({'background-color' : '#00adbb', color: "#FFF", 'text-align': 'center' });;

                var iwBackground = iwOuter.prev();

                iwBackground.children(':nth-child(4)').css({'background-color' : '#00adbb', color: "#FFF" });
                iwBackground.children(':nth-child(1)').css({'display' : 'none' });
                iwBackground.children(':nth-child(2)').css({'box-shadow' : 'none' });

                
                var trail = iwBackground.children(':nth-child(3)');
                trail.children(':nth-child(1)').find('div').css({ left: '10px', 'background-color' : "#00adbb", 'box-shadow': 'none'})
                trail.children(':nth-child(2)').find('div').css({ left: '-4px', 'background-color' : "#00adbb", 'box-shadow': 'none'})
                
                
                var iwCloseBtn = iwOuter.next();
                iwCloseBtn.css({ display: 'none'});

                // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
                if($('.iw-content').height() < 140){
                  $('.iw-bottom-gradient').css({display: 'none'});
                }
              });
        }
      
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANtPH_JhE-vdQqaEuIQ4Zg9ELcDzbogF4&libraries=places&callback=initMap" async defer></script>

<?php 
include "footer.php";
?>