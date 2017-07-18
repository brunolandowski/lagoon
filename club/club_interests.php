<?php 

$pageCSS = 'club_interests.css';
$pageJS = array('club_interests.js', 'vendor/jquery.justifiedGallery.js');
$className = 'club_interests';

include "club_header.php";
?>
    
    <div class="subnav">
        <ul>
            <li class="active">Images</li>
            <li><a href="club_interests_videos.php">Videos</a></li>
            <li><a href="club_interests_articles.php">Articles</a></li>
            <li><a href="club_interests_docs.php">Documents</a></li>
        </ul> 
    </div>

   <div class="textIntro">
      <h1 class="title">Mes intêrets</h1>
      <h2>Images</h2>
   </div>
   

    <section class="gallery" data-folder="Sailing4handicap">
        <?php 
        for ($i=11; $i < 20; $i++) { ?>
                    
        <div class="photo-container rollable" data-legend="Image de la gallery n°<?= $i ?>" data-id="<?= $i ?>">
            <img class="image-thumb" src="dynamic/club_interests/gallery_<?= $i ?>.jpg"  >  
            <div class="actions"> 
                <div class="name">Image de la gallery n°<?= $i ?></div>
                <div class="btn rollable add" data-id="<?= $i ?>" data-legend="Image de la gallery n°<?= $i ?>" ></div>
                <div class="btn rollable download" data-id="<?= $i ?>"></div>        
            </div>
        </div>
        <?php } ?>
    </section>    

<?php 
include "club_footer.php";
?>