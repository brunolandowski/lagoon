<?php 

$pageCSS = 'folder.css';
$pageJS = array('folder.js', 'vendor/jquery.justifiedGallery.js');
$className = 'folder';

include "header.php";
?>
    <section class="hiddenBlock introBloc bg-scroll">
        <div class="bg coverImg">
            <img src="dynamic/event/header.jpg" alt="">
        </div>
        
        <div class="content">
            <div class="text">
                <h1 class="title">Sailing4handicap</h1>
                <h2 class="desc">C'est en 2014 que Lagoon lance le MY 630, inspiré de son homologue à voile le Lagoon 620. Ce catamaran à moteur d'une longueur de 64 pieds (19,50 m) permet au chantier de revenir dans le monde du motoryacht après l'arrêt de la production du MY 44 en 2006. En 2017, le chantier bordelais propose désormais une nouvelle option sur le plus grand de ses modèles à moteur, la plage avant rigide.</h2>
            </div>
        </div>
    </section>

    <section class="gallery" data-folder="Sailing4handicap">
        <?php 
        for ($i=11; $i < 20; $i++) { ?>
                    
        <div class="photo-container rollable" data-legend="Image de la gallery n°<?= $i ?>" data-id="<?= $i ?>">
            <img class="image-thumb" src="dynamic/event/gallery_<?= $i ?>.jpg"  >  
            <div class="actions"> 
                <div class="name">Image de la gallery n°<?= $i ?></div>
                <div class="btn rollable add" data-id="<?= $i ?>" data-legend="Image de la gallery n°<?= $i ?>" ></div>
                <div class="btn rollable download" data-id="<?= $i ?>"></div>        
            </div>
        </div>
        <?php } ?>
    </section>    


<?php 
include "footer.php";
?>