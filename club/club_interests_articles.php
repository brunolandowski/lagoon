<?php 

$pageCSS = 'club_interests.css';
$pageJS = array('club_interests.js', 'vendor/jquery.justifiedGallery.js');
$className = 'club_interests';

include "club_header.php";
?>
    
    <div class="subnav">
        <ul>
            <li><a href="club_interests.php">Images</a></li>
            <li><a href="club_interests_videos.php">Videos</a></li>
            <li class="active">Articles</li>
            <li><a href="club_interests_docs.php">Documents</a></li>
        </ul> 
    </div>

   <div class="textIntro">
      <h1 class="title">Mes intêrets</h1>
      <h2>Articles</h2>
   </div>
   
    <section class="newsContainer">
        <a href="article.php" class="new sail rollable">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/news/new_1.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">12 juin 2017</div>
                <h4 class="title">The 560: the 100th hull comes out of the yard!</h4>
                <div class="desc">Lagoon achieved a new sales record in the category of 56-foot catamarans. Indeed, after the 42 and the 52, it is time for the 560 to celebrate her 100th unit! A blue sky and </div>
                <div class="cta rollable">Lire cet article</div>
            </div>
        </a>
        <a href="article.php" class="new motor rollable">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/news/new_2.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">05 Juillet 2017</div>
                <h4 class="title">Not one but two new models!</h4>
                <div class="desc">It is with great pleasure that we announce the launch of two new Lagoon models: the 40 and 50. Both will be unveiled next Fall. For now, see below the first 3D images of new theses 2 new catamarans and stay connected for</div>
                <div class="cta rollable">Lire cet article</div>
            </div>
        </a>
        <a href="article.php" class="new event rollable" >
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/news/new_3.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">13 au 27 Juin 2017</div>
                <h4 class="title">The SEVENTY 7 wins an award in Asia</h4>
                <div class="desc">The SEVENTY 7 - Lagoon’s flagship catamaran - has just won the prize of “Best Sailing Yacht above 65’” at the prestigious Asia Boating Awards ceremony.This yearly event,</div>
                <div class="cta rollable">Lire cet article</div>
            </div>
        </a>
        <a href="article.php" class="new sail rollable" >
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/news/new_4.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">12 juin 2017</div>
                <h4 class="title">Not one but two new models !</h4>
                <div class="desc">It is with great pleasure that we announce the launch of two new Lagoon models: the 40 and 50... Both will be unveiled next Fall. For now, see below the first 3D images of new theses 2 new catamarans and stay con</div>
                <div class="cta rollable">Lire cet article</div>
            </div>
        </a>
    </section>

<?php 
include "club_footer.php";
?>