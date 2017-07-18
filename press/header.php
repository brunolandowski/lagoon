<?php 
    include "layout.php";
?>
    <div id="searchLayer">
        <div class="bloc">
            <div class="close rollable"></div>
            <div class="visu cover"></div>
            <form class="text" action="result.php">
                <div class="title">Que recherchez vous ?</div>
                <input type="text" placeholder="tapez l'objet de votre recherche">
                <button type="submit" class="cta rollable">rechercher</button>
            </form>
        </div>
        
    </div>

    <div id="visio" >
        <div class="toggleBtn"></div>
        <div class="content">

            <div class="medias">
                <?php
                    if (createVisio()) {
                        $nbEl = count($_SESSION['visio']['filename']);
                        foreach ( $_SESSION['visio']['filename'] as $index => $item) { 
                            $id = $_SESSION['visio']['picture'][$index];
                         ?>

                            <div class="media rollable" data-id="<?= $id ?>">
                                <div class="visu">
                                    <img src="<?= getVisioItemThumb( $id ) ?>" alt="">
                                </div>
                                <div class="title"><?= $_SESSION['visio']['title'][$index] ?></div>
                                <div class="name"><?= $_SESSION['visio']['filename'][$index] ?></div>
                                <div class="removeBtn"></div>
                            </div>
                        <?php }
                    }
                ?>
            </div>
            <div class="trashBtn"></div>
            <div class="downloadBtn"></div>
        </div>
    </div>

    <header>
        <div class="topBar">
            <ul class="langs">
                <li class="lang en active"><div class="content">en</div></li>
                <li class="lang fr rollable"><a href="#">fr</a></li>
                <li class="lang de rollable"><a href="#">de</a></li>
                <li class="lang es rollable"><a href="#">es</a></li>
                <li class="lang it rollable"><a href="#">it</a></li>
                <li class="lang pt rollable"><a href="#">pt</a></li>
                <li class="lang ru rollable"><a href="#">ru</a></li>
                <li class="lang cn rollable"><a href="#">cn</a></li>
            </ul>
            <div class="mobileBtn"></div>
            <a href="index.php" class="logo"></a>
            <a href="login.php" class="login">Login</a>
        </div>

        <nav>
            <ul class="links">
                <li class="link"><a href="archive.php">Événements</a></li>
                <li data-dropbox="sail" class="active modele-drop">
                    <a href="javascript:void(0)">Voiliers</a>                    
                </li>
                <li data-dropbox="motor" class="modele-drop">
                    <a href="javascript:void(0)">Motor yachts</a>                    
                </li>
                <li class="link"><a href="archive.php">Chantiers</a></li>
                <li class="link"><a href="news.php">Actualités</a></li>
                <li class="link"><a href="magazines.php">Magazines</a></li>
                <li class="link"><a href="presse.php">Support presse</a></li>
                <li class="search"></li>
            </ul>
        </nav>

        <div data-dropbox="sail" class="modele-dropbox">
            <ul class="sublinks">
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/380.jpg" alt="">
                        <div class="name">380</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/40.jpg" alt="">
                        <div class="name">40</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/42.jpg" alt="">
                        <div class="name">42</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/450s.jpg" alt="">
                        <div class="name">450S</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/450f.jpg" alt="">
                        <div class="name">450F</div>
                        De X à X passagers
                    </a>
                </li> 

                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/46.jpg" alt="">
                        <div class="name">46</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/50.jpg" alt="">
                        <div class="name">50</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/52s.jpg" alt="">
                        <div class="name">52S</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/52f.jpg" alt="">
                        <div class="name">52F</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/54.jpg" alt="">
                        <div class="name">54</div>
                        De X à X passagers
                    </a>
                </li> 
                
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/560.jpg" alt="">
                        <div class="name">560</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/58.jpg" alt="">
                        <div class="name">58</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/620.jpg" alt="">
                        <div class="name">620</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/seventy7.jpg" alt="">
                        <div class="name">Seventy 7</div>
                        De X à X passagers
                    </a>
                </li> 
            </ul>
        </div>
        <div data-dropbox="motor" class="modele-dropbox">
            <ul class="sublinks">
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/630my.jpg" alt="">
                        <div class="name">630 MY</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/seventy8.jpg" alt="">
                        <div class="name">Seventy 8</div>
                        De X à X passagers
                    </a>
                </li> 
            </ul>
        </div>
    </header>
    <div id="navMobile">
        <div class="close"></div>
        <ul class="langs">
            <li class="lang uk active"><div class="content">uk</div></li>
            <li class="lang fr rollable"><a href="#">fr</a></li>
            <li class="lang de rollable"><a href="#">de</a></li>
            <li class="lang es rollable"><a href="#">es</a></li>
            <li class="lang it rollable"><a href="#">it</a></li>
            <li class="lang pu rollable"><a href="#">pu</a></li>
            <li class="lang ru rollable"><a href="#">ru</a></li>
            <li class="lang cn rollable"><a href="#">cn</a></li>
        </ul>
        <a href="index.php" class="logo"></a>
        <nav>
            <ul class="links">
                <li class="link"><a href="archive.php">Événements</a></li>
                <li data-dropbox="sail" class="title modeleBtn sail">Voiliers</li>
                <li data-dropbox="sail" class="title modeleBtn motor"">Motor yachts</li>
                <li class="link"><a href="archive.php">Chantiers</a></li>
                <li class="link"><a href="news.php">Actualités</a></li>
                <li class="link"><a href="magazines.php">Magazines</a></li>
                <li class="link"><a href="presse.php">Support presse</a></li>
                <li class="search"></li>
            </ul>
        </nav>

        <div class="modeles sail">
            <div class="back">retour</div>
             <ul class="sublinks">
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/380.jpg" alt="">
                        <div class="name">380</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/40.jpg" alt="">
                        <div class="name">40</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/42.jpg" alt="">
                        <div class="name">42</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/450s.jpg" alt="">
                        <div class="name">450S</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/450f.jpg" alt="">
                        <div class="name">450F</div>
                        De X à X passagers
                    </a>
                </li> 

                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/46.jpg" alt="">
                        <div class="name">46</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/50.jpg" alt="">
                        <div class="name">50</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/52s.jpg" alt="">
                        <div class="name">52S</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/52f.jpg" alt="">
                        <div class="name">52F</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/54.jpg" alt="">
                        <div class="name">54</div>
                        De X à X passagers
                    </a>
                </li> 
                
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/560.jpg" alt="">
                        <div class="name">560</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/58.jpg" alt="">
                        <div class="name">58</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/620.jpg" alt="">
                        <div class="name">620</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/seventy7.jpg" alt="">
                        <div class="name">Seventy 7</div>
                        De X à X passagers
                    </a>
                </li> 
            </ul>
        </div>
        <div class="modeles motor">
            <div class="back">retour</div>
             <ul class="sublinks">
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/630my.jpg" alt="">
                        <div class="name">630 MY</div>
                        De X à X passagers
                    </a>
                </li> 
                <li class="sublink">
                    <a class="rollable" href="boat.php">
                        <img src="static/img/nav/seventy8.jpg" alt="">
                        <div class="name">Seventy 8</div>
                        De X à X passagers
                    </a>
                </li> 
            </ul>
        </div>
    </div>