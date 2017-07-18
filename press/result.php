<?php 

$pageCSS = 'result.css';
$pageJS = array('folder.js', 'vendor/jquery.justifiedGallery.js');
$className = 'folder result';

include "header.php";
?>
    <section class="hiddenBlock introBloc bg-scroll">
        
        <div class="content">
            <div class="text">
                <h1 class="title">Resultats pour <strong>Event</strong</h1>
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