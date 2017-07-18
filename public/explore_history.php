<?php 

$pageCSS = 'explore-history.css';
$pageJS = array('vendor/jquery.mousewheel.min.js','history.js');
$className = 'explore history';

include "header.php";
?>
    
    <section class="introBloc" data-menu="intro">
        <div class="bg coverImg">
            <img src="static/img/explore_history/header.jpg" alt="">
        </div>
        
        <div class="content">
            <div class="text">
                <h1 class="title">Histoire d’Innovations</h1>
                <h2 class="desc">L'architecture intérieure au service du confort</h2>
            </div>
        </div>
    </section>  

    <section class="sliderDate" data-menu="1984">        
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
        <div class="date">1984</div>
    </section> 

    <section class="sliderDate" data-menu="1987">        
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
        <div class="date">1987</div>
    </section>  
    
<?php 
include "footer.php";
?>