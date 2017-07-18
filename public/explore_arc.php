<?php 

$pageCSS = 'explore-arc.css';
//$pageJS = 'explore.js';
$className = 'explore arc';

include "header.php";
?>
    
    <section class="hiddenBlock introBloc bg-scroll">
        <div class="bg coverImg">
            <img src="static/img/explore_arc/header.jpg" alt="">
        </div>
        
        <div class="content">
            <div class="text">
                <h1 class="title">L'Arc</h1>
                <h2 class="desc">L'architecture intérieure au service du confort</h2>
            </div>
        </div>
    </section>     

    <section class="halfSquare">
        <div class="content">
            <div class="text hiddenBlock">
                <h3 class="title">Lagoon est partenaire de l'ARC depuis 2008</h3>
                <div class="desc">
                    <p>Ce rallye transatlantique organisé par le World Cruising Club rassemble monocoques et catamarans pour une traversée de l'Atlantique, de Palma de Canarias jusqu'à Rodney Bay à Sainte Lucie. C'est le plus grand évènement de ce type au monde.</p>
                    <p>Lagoon remet chaque année un trophée au premier Lagoon en temps compensé. De plus, Lagoon organise une soirée dédiée à tous les propriétaires Lagoon, quelques jours avant le départ.<br>Si vous souhaitez faire partie de cette aventure, rendez-vous sur le site de l'ARC pour vous inscrire ! </p>
                    <p>Surtout connu et reconnu pour la fameuse traversée de l'atlantique (l'ARC), le World Cruising Club organise tout au long de l'année des rallyes tant pour multicoques que pour monocoques, dans un cadre sécurisant pour ceux préférant vivre l'expérience à plusieurs. Retrouvez toutes les dates de ces événements sur le site du World Cruising Club.</p>
                </div>
            </div>
        </div>   
        <div class="image coverImg">
            <img src="static/img/explore_arc/half_1.jpg" alt="">
        </div>             
    </section>
    
    <section class="palmares">
        <div class="intro">
            <img src="static/img/explore_arc/arc-logo.jpg" alt="" class="logo">
            <h3 class="title">Palmares</h3>
            <div class="baseline">Lorem ipsum est nominem</div>
        </div>
        <hr>
        <div class="year">
            <h4>2016</h4>
            <div class="type">
                <h5>ARC +</h5>
                <div class="time">Temps compensé</div>
                <ul class="list">
                    <li class='award' data-position="2">
                        <div class="picture coverImg"><img src="dynamic/explore_arc/award1.jpg" alt="" class="logo"></div>
                        <div class="text"><div class="name">450 F</div>Sea To Sky (Canada)</div>
                    </li>
                    <li class='award big' data-position="1">
                        <div class="picture coverImg"><img src="dynamic/explore_arc/award1.jpg" alt="" class="logo"></div>
                        <div class="text"><div class="name">52 S</div>Cat’Leya (France)</div>
                    </li>
                    <li class='award' data-position="3">
                        <div class="picture coverImg"><img src="dynamic/explore_arc/award3.jpg" alt="" class="logo"></div>
                        <div class="text"><div class="name">52 F</div>Dreamcatcher (GB)</div>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="type">
                <h5>ARC</h5>
                <div class="time">Temps réel</div>
                <ul class="list">
                    <li class='award' data-position="3">
                        <div class="picture coverImg"><img src="dynamic/explore_arc/award1.jpg" alt="" class="logo"></div>
                        <div class="text"><div class="name">450 F</div>Sea To Sky (Canada)</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php 
include "footer.php";
?>