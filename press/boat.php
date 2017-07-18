<?php 

$pageCSS = 'boat.css';
$pageJS = array('folder.js', 'vendor/jquery.justified.min.js');
$className = 'folder boat';

include "header.php";
?>
    <section class="hiddenBlock introBloc bg-scroll">
        <div class="bg coverImg">
            <img src="dynamic/boat/header.jpg" alt="">
        </div>
        
        <div class="content">
            <div class="text">
                <h1 class="title">Modèle 42</h1>
            </div>
        </div>
    </section>

    <section class="gallery" data-folder="Modèle 42" >
        <?php 
            for ($i=1; $i < 10; $i++) { 
               list($width, $height, $type, $attr) = getimagesize("dynamic/boat/boat_".$i.".jpg");
               echo '<img src="dynamic/boat/boat_'.$i.'.jpg" '. $attr .' alt="" data-name="Image de la gallery n°'.$i.'" data-id="'.$i.'">';
            }

        ?>
    </section>    

<?php 
include "footer.php";
?>