<?php 

$pageCSS = 'club_home.css';
$pageJS = array('club_home.js', 'newsletter_form.js');
$className = 'club_home';

include "club_header.php";
?>
    <section class="hiddenBlock sliderFull">
        <div class="slides">
            <div class="slide">
                <div class="image coverImg" >
                    <img src="dynamic/club_home/sliderIntro_1.jpg" alt="">
                </div>
                <div class="text">
                    <h3 class="title">Bienvenue</h3>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                </div>
            </div>
            <div class="slide">
                <div class="image coverImg" >
                    <img src="dynamic/club_home/sliderIntro_2.jpg" alt="">
                </div>
                <div class="text">
                    <h3 class="title">DIscover 630 MY</h3>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                    <a class="cta rollable">Découvrir le Seventy 7</a>
                </div>
            </div>
            <div class="slide">
                <div class="image coverImg" >
                    <img src="dynamic/club_home/sliderIntro_1.jpg" alt="">
                </div>
                <div class="text">
                    <h3 class="title">DIscover  Seventy  7</h3>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
                    <a class="cta rollable">Découvrir le Seventy 7</a>
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

    <section id="news" class='hiddenBlock'>
        <a href="#" class="new sail rollable">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/club_home/news_1.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">12 juin 2017</div>
                <h4 class="title">Not one but two new models !</h4>
                <div class="desc">It is with great pleasure that we announce the launch of two new Lagoon models: the 40 and 50...
Both will be unveiled next Fall. For now, see below the first 3D images of new theses 2 new catamarans and stay con</div>
                <div class="cta rollable">Lire l'article</div>
            </div>
        </a>
        <a href="#" class="new event rollable">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/club_home/news_2.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">5 juillet 2017</div>
                <h4 class="title">The SEVENTY 7 wins an award in Asia</h4>
                <div class="desc">Clifford Clarke, who became quadriplegic as a result of an accident, has recently taken delivery of his new 42...
A keen sportsman, who took part in the Paralympic Games </div>
                <div class="cta rollable">Lire l'article</div>
            </div>
        </a>
        <a href="#" class="new sail rollable">
            <div class="image"><div class="imageContent coverImg" >
                <img src="dynamic/club_home/news_3.jpg" alt="">
            </div></div>
            <div class="text">
                <div class="date">13 au 27 Juin 2017</div>
                <h4 class="title">China (Shanghai) International Boat Show</h4>
                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</div>
                <div class="cta rollable">Lire l'article</div>
            </div>
        </a>
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
            <img src="dynamic/club_home/mag.jpg" alt="">
        </div>
    </section>

<?php 
include "club_footer.php";
?>