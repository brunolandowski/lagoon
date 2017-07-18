<?php 

$pageCSS = 'home.css';
$pageJS = array('home.js', 'newsletter_form.js');
$className = 'home';

include "header.php";
?>
    <section class="hiddenBlock sliderFull">
        <div class="slides">
            <div class="slide">
                <div class="image coverImg" >
                    <img src="dynamic/home/sliderIntro_1.jpg" alt="">
                </div>
                <div class="text">
                    <h3 class="title">Les images du 630 sont disponibles</h3>
                    <div class="desc">C'est en 2014 que Lagoon lance le MY 630, inspiré de son homologue à voile le Lagoon 620. Ce catamaran à moteur d'une longueur de 64 pieds (19,50 m) permet au chantier de revenir dans le monde du motoryacht après l'arrêt de la production du MY 44 en 2006. En 2017, le chantier bordelais propose désormais une nouvelle option sur le plus grand de ses modèles à moteur, la plage avant rigide.</div>
                    <a class="cta rollable">Découvrir les images</a>
                </div>
            </div>
            <div class="slide">
                <div class="image coverImg" >
                    <img src="dynamic/home/sliderIntro_2.jpg" alt="">
                </div>
                <div class="text">
                    <h3 class="title">DIscover 630 MY</h3>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                    <a class="cta rollable">Voir les photos du Seventy 7</a>
                </div>
            </div>
            <div class="slide">
                <div class="image coverImg" >
                    <img src="dynamic/home/sliderIntro_1.jpg" alt="">
                </div>
                <div class="text">
                    <h3 class="title">DIscover  Seventy  7</h3>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                    <a class="cta rollable">Voir les photos du Seventy 7</a>
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

    <section id="pressNews">
        <div class="text">
        <div class="date">05 avril 2017</div>
            <h2 class="title">Les nouveaux communiqués de presse sont en ligne</h2>
            <a href="presse.php" class="cta rollable">Voir les communiqués de presse</a>
        </div>
    </section>

    <section id="magazine" class="hiddenBlock">
        <div class="content" class="cover">
            <div class="text">
                <h2 class="title">Le magazine  #17</h2>
                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </div>
                <a href="" class="cta rollable">Découvrir le dernier numéro</a>
            </div>
        </div>
        <div class="couv coverImg" >
            <img src="dynamic/home/mag.jpg" alt="">
        </div>
    </section>

     <section id="accountRequest" class="hiddenBlock bg-scroll">
        <div class="bg cover"></div>
        <div class="text">
            <h2 class="title">Demander un accès</h2>
            <div class="desc">Lagoon is the world leader in sailing catamaran cruisers. Lagoon has been building luxury catamarans since 1984 and has kept developing its offer to satisfy all your expectations</div>
            <a href="" class="cta rollable">Faire ma demande</a>
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

<?php 
include "footer.php";
?>