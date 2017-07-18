<?php 

$pageCSS = 'configurator.css';
$pageJS = array('configurator.js');
$className = 'configurator';

include "header.php";
?>	
	<div class="subnav">
		<ul></ul>	
		<div class="cta quoteRequestBtn rollable">Demander un devis</div>
		<div class="cta backBtn rollable">Retour au modèle</div>
		<div class="cta saveBtn rollable"></div>
		<div class="cta PDFBtn rollable"></div>
	</div>

	<div class="wrapper">

		<div class="stepNav">
			
			<div class="btn rollable prev">Étape précédente</div>
			<div class="btn rollable next">Étape suivante</div>
			<div class="btn rollable visible start">Débuter le configuration</div>

			<div class="puces"></div>
		</div>
	
		<section class="introBloc" >
	        <div class="bg coverImg">
	            <img src="dynamic/configurator/header.jpg" alt="">
	        </div>	        
            <div class="text">
                <h1 class="title">Configurer votre 42</h1>
                <h2 class="desc">
                	<p>Ce configurateur vous propose de définir complètement votre catamaran Lagoon, en termes d’ambiances (tissus, cuir, essences de bois) et d’options. Une fois votre sélection achevée, vous aurez une définition aboutie de votre bateau, que vous pourrez directement soumettre à un distributeur Lagoon, lequel vous fera alors un devis.</p>
                	<p>Vous pouvez configurer plusieurs bateaux, et les sauvegarder dans votre espace Club Lagoon</p>
                </h2>
            </div>
	    </section>  

	    <section class="versions step" data-menu="Aménagement">
	    	<div class="text">
	    		<h3 class="title">Choix de l’aménagement</h3>
	    	</div>
	        
	        <div class="list">
	            <ul>
	               	<li >
	               		<label for="v4">
		               		<div class="picture"><img src="dynamic/sail/version_4cabs.png" alt=""></div>
		               		version 4 cabines
		               		<input type="radio" name="version" value="v4" id="v4">
	               		</label>
	               	</li>
	               	<li >
	               		<label for="v3">
		               		<div class="picture"><img src="dynamic/sail/version_3cabs.png" alt=""></div>
		               		version 3 cabines
		               		<input type="radio" name="version" value="v3" id="v3">
	               		</label>
	               	</li>
	               	<li >
	               		<label for="vs">
		               		<div class="picture"><img src="dynamic/sail/version_salon.png" alt=""></div>
		               		Salon
		               		<input type="radio" name="version" value="vs" id="vs">
	               		</label>
	               	</li>
	               	<li >
	               		<label for="v6">
		               		<div class="picture"><img src="dynamic/sail/version_4cabs.png" alt=""></div>
		               		version 6 cabines
		               		<input type="radio" name="version" value="v6" id="v6">
	               		</label>
	               	</li>
	            </ul>
	           <div class="arrow rollable left"></div>
	           <div class="arrow rollable right"></div>
	       </div>
    	</section>

    	<section class="interior slidesCtn" data-slides="2" data-menu="Boiserie & sellerie" >
    		<div class="coverImg">
    			<img src="dynamic/configurator/default-interior.jpg" alt="">
    		</div>

    		<div class="slide upholstery step" data-index="0">
		    	<div class="text">
		    		<h3 class="title">Choix de sellerie</h3>
		    	</div>	
		    	<div class="list">
	            	<ul>
						<li>
		               		<label for="Tissus_sharkbrown">
			               		<div class="picture"><img src="dynamic/configurator/Tissus_sharkbrown.jpg" alt=""></div>
			               		Fabric Shark Brown      <div class="grey">Standard</div>
			               		<input type="radio" name="upholstery" value="Tissus_sharkbrown" id="Tissus_sharkbrown">
			               	</label>
			            </li>
						<li>
		               		<label for="Tissus_stormgrey">
			               		<div class="picture"><img src="dynamic/configurator/Tissus_stormgrey.jpg" alt=""></div>
			               		Fabric Storm grey      <div class="grey">Spéciale</div>
			               		<input type="radio" name="upholstery" value="Tissus_stormgrey" id="Tissus_stormgrey">
			               	</label>
			            </li>
						<li>
		               		<label for="Tissus_urus_beige">
			               		<div class="picture"><img src="dynamic/configurator/Tissus_urus_beige.jpg" alt=""></div>
			               		Fabric Urus beige      <div class="grey">Spéciale</div>
			               		<input type="radio" name="upholstery" value="Tissus_urus_beige" id="Tissus_urus_beige">
			               	</label>
			            </li>
						<li>
		               		<label for="Tissus_chocolate">
			               		<div class="picture"><img src="dynamic/configurator/Tissus_chocolate.jpg" alt=""></div>
			               		Fabric Chocolate <div class="grey">Spéciale</div>
			               		<input type="radio" name="upholstery" value="Tissus_chocolate" id="Tissus_chocolate">
			               	</label>
			            </li>
						<li>
		               		<label for="PVC_snowhite">
			               		<div class="picture"><img src="dynamic/configurator/PVC_snowhite.jpg" alt=""></div>
			               		PVC Snow White <div class="grey">Spéciale</div>
			               		<input type="radio" name="upholstery" value="PVC_snowhite" id="PVC_snowhite">
			               	</label>
			            </li>
						<li>
		               		<label for="cuir_devon010">
			               		<div class="picture"><img src="dynamic/configurator/cuir_devon010.jpg" alt=""></div>
			               		Leather Devon 010 <div class="grey">Spéciale</div>
			               		<input type="radio" name="upholstery" value="cuir_devon010" id="cuir_devon010">
			               	</label>
			            </li>

			            <li>
		               		<label for="cuir_devon217">
			               		<div class="picture"><img src="dynamic/configurator/cuir_devon217.jpg" alt=""></div>
			               		Leather Devon 217 <div class="grey">Spéciale</div>
			               		<input type="radio" name="upholstery" value="cuir_devon217" id="cuir_devon217">
			               	</label>
			            </li>

		            </ul>
		           <div class="arrow rollable left"></div>
		           <div class="arrow rollable right"></div>
		       </div>		        
	       </div>

	       <div class="slide wood step" data-index="1">
		    	<div class="text">
		    		<h3 class="title">Choix des essences de bois</h3>
		    	</div>	
		    	<div class="list">
	            	<ul>		               	
		               	<li class="version">
		               		<label for="bois_alpi_chene">
			               		<div class="picture"><img src="dynamic/configurator/bois_alpi_chene.jpg" alt=""></div>
			               		Alpi chêne blond / <br> Plancher Milano <div class="grey">Standard</div>
			               		<input type="radio" name="version" value="bois_alpi_chene" id="bois_alpi_chene">
		               		</label>
		               	</li>
		               	<li class="version">
		               		<label for="bois_alpi_teck">
			               		<div class="picture"><img src="dynamic/configurator/bois_alpi_teck.jpg" alt=""></div>
			               		Alpi teck mat / <br> Plancher chêne vieilli<div class="grey">Option</div>
			               		<input type="radio" name="version" value="bois_alpi_teck" id="bois_alpi_teck">
		               		</label>
		               	</li>
		            </ul>
		           <div class="arrow rollable left"></div>
		           <div class="arrow rollable right"></div>
		       </div>		        
	       </div>
    	</section>

    	<section class="horzRadioList step" data-menu="Décoration de coque" >
	    	<div class="text">
	    		<h3 class="title">Packs d’équipements</h3>
	    	</div>
	        
	        <div class="list">
	            <ul>
	               	<li >
	               		<label for="pckEss">
		               		<div class="name">Equipement Essential</div>
							Drisses de pavillon sur barres de fleches<br>Coussin assise poste de barre dark grey<br>Reservoir gasoil supplementaire (300lt compartiment moteur babord) <br>Pack navigation b&g 2017<br>Eclairage indirect cabines et carre<br>Controleur de batterie<br>Vide poche en cuir dans cabines<br>Balcons avant avec sieges bois<br>Meuble de rangement cockpit<br>Systeme relevage annexe (manuel)<br>2 batteries de servitude supplementaires 140a <br>Haut parleurs etanches de cockpit<br>Winch electrique de manoeuvre babord 46.2 staeh <br>Circuit electrique avec chargeur de batteries 40a <br>Hublots arrieres dans cabines arrieres avec rideaux <br>Lecteur fusion ms + 2 hp interieur dans le carre <br>Meuble haut de rangement tribord dans carre<br>
							<input type="radio" name="version" value="pckEss" id="pckEss">
	               		</label>
	               	</li>
	               	<li >
	               		<label for="pckCnfrt">
		               		<div class="name">Equipement Confort</div>
							Contient l'Equipement Essential et :<br><br>Pompe a pied eau douce/eau de mer <br>Prise eau douce de quai<br>Pompe de lavage pont eau de mer/eau douce<br>
							<input type="radio" name="version" value="pckCnfrt" id="pckCnfrt">
	               		</label>
	               	</li>
	            </ul>
	       </div>
    	</section>

    	<section class="options slidesCtn" data-slides="3" data-menu="options">
	    	<div class="text">
	    		<h3 class="title">Choix des équipements </h3>
	    	</div>

	       	<div class="slide step checkFull" data-index="0">
	       		<div class="subtitle">Gréement et voiles</div>
	        	<div class="list">
		            <ul>
						<li >
							<label for="code0">
								<input type="checkbox" name="sail" value="code0" id="code0">
								CODE 0 MYLAR NOIR
							</label>
						</li>
						<li >
							<label for="code0Tang">
								<input type="checkbox" name="sail" value="code0Tang" id="code0Tang">
								GREEMENT CODE 0 + TANGONET
							</label>
						</li>
						<li >
							<label for="spi">
								<input type="checkbox" name="sail" value="spi" id="spi">
								GREEMENT SPI ASYMETRIQUE
							</label>
						</li>
						<li >
							<label for="reenforced">
								<input type="checkbox" name="sail" value="reenforced" id="reenforced">
								ENSEMBLE VOILES STANDARDS RENFORCEES, AVEC LAZY BAG + HOUSSE
							</label>
						</li>
						<li >
							<label for="lazy">
								<input type="checkbox" name="sail" value="lazy" id="lazy">
								LAZY BAG + HOUSSE
							</label>
						</li>
						<li >
							<label for="dracon">
								<input type="checkbox" name="sail" value="dracon" id="dracon">
								PLUS-VALUE POUR GRAND-VOILE A CORNE EN DACRON A LA PLACE DU STANDARD
							</label>
						</li>
		            </ul>
		        </div>
	       	</div>

	       	<div class="slide step checkHalf" data-index="1">
	       		<div class="subtitle">Equipement de pont</div>
	        	<div class="list">
		            <ul>
						<li>
							<label for="matelas">
								<input type="checkbox" name="deck" value="matelas" id="matelas">
								2 MATELAS BAIN DE SOLEIL POUR TRAMPOLINE
							</label>
						</li>
						<li>
							<label for="douchette">
								<input type="checkbox" name="deck" value="douchette" id="douchette">
								2ème DOUCHETTE COCKPIT EAU CHAUDE / EAU FROIDE
							</label>
						</li>
						<li>
							<label for="echelle">
								<input type="checkbox" name="deck" value="echelle" id="echelle">
								2ème ECHELLE DE BAIN AVEC 2ème DOUCHETTE COCKPIT EAU CHAUDE / EAU FROIDE
							</label>
						</li>
						<li>
							<label for="bainSoleil">
								<input type="checkbox" name="deck" value="bainSoleil" id="bainSoleil">
								BAIN DE SOLEIL SUR ROOF
							</label>
						</li>
						<li>
							<label for="bimini">
								<input type="checkbox" name="deck" value="bimini" id="bimini">
								BIMINI COMPOSITE AVEC PARE BRISE, TOILES DE TOUR ET ESCALIER ACCES ROOF
							</label>
						</li>
						<li>
							<label for="coussinsBarre">
								<input type="checkbox" name="deck" value="coussinsBarre" id="coussinsBarre">
								COUSSIN D'ASSISE DE POSTE DE BARRE
							</label>
						</li>
						<li>
							<label for="coussinCockpit">
								<input type="checkbox" name="deck" value="coussinCockpit" id="coussinCockpit">
								COUSSINS DE COCKPIT ARRIERE
							</label>
						</li>
						<li>
							<label for="escalier">
								<input type="checkbox" name="deck" value="escalier" id="escalier">
								ESCALIER D'ACCES AU ROOF PAR POSTE DE BARRE
							</label>
						</li>
		            </ul>
		        </div>
	       	</div>

	       	<div class="slide step checkFull" data-index="2">
	       		<div class="subtitle">Motorisation</div>
	        	<div class="list">
		            <ul>
						<li >
							<label for="standart">
								<input type="checkbox" name="motor" value="standart" id="standart">
								MOTORISATION STANDARD 2 x 45 CV (Yanmar 4JH45)
							</label>
						</li>
						<li >
							<label for="yanmar">
								<input type="checkbox" name="motor" value="yanmar" id="yanmar">
								MOTORISATION 2 x 57 CV (Yanmar 4JH57)
							</label>
						</li>
						<li >
							<label for="tripleHelice">
								<input type="checkbox" name="motor" value="tripleHelice" id="tripleHelice">
								HÉLICES TRIPALES REPLIABLES
							</label>
						</li>
		            </ul>
		        </div>
	       	</div>


    	</section>

    </div>

<?php 
include "footer.php";
?>