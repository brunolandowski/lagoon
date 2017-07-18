<?php 

$pageCSS = 'magazines.css';
$pageJS = array('magazines.js');
$className = 'magazines';

include "header.php";
?>
    <section id="currentMagazine" class="hiddenBlock">
        <div class="content" class="cover">
            <div class="text">
                <h2 class="title">Le magazine  #17</h2>
                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </div>
                <a href="" class="cta rollable">Découvrir le dernier numéro</a>
                <div class="cta rollable addVisio" data-visiofilename="Mag n° 17" data-id="17">Ajouter à la visionneuse</div>
            </div>
        </div>
        <div class="couv coverImg" >
            <img src="dynamic/home/mag.jpg" alt="">
        </div>
    </section>

    <section class="oldVersions" data-visiotitle="Magazine">
        <?php
            $i = 16;
            while ( $i > 0 ) { 
                $img = ($i >= 10 ) ? 'mag'.$i : 'mag17';
                ?>
                
                <a href="#" class="mag rollable hiddenBlock">
                    <div class="visu"><img src="dynamic/magazines/<?= $img ?>.jpg" alt=""></div>
                    <div class="cta">Voir le Mag n°<?= $i ?></div>
                    <div class="btn addVisio rollable" data-visiofilename="Mag n°<?= $i ?>" data-id="<?= $i ?>"></div>
                </a>
                <?php
                --$i;
            }

        ?>
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