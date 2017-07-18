<?php 

$pageCSS = 'news.css';
$className = 'news';

include "header.php";
?>
    <div class="lateralList">       
        <div class="list">
            <div class="title">DOSSIERS</div>
            <ul>
                <li class="folder active">gestion des news</li>
                <li class="folder"><a href="mea.php">gestion des mises en avant</a></li>
                <li class="folder"><a href="events.php">gestion des événement & salons</a></li>
                <li class="folder "><a href="pages.php">gestion des pages</a></li>
                <li class="user"><a href="charters.php">gestion des comptes loueurs</a></li>
                <li class="user"><a href="#">gestion des comptes users</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="breadcrum"><a href="home.php">Site public</a> > Gestion des news</div>            
            <div class="actions">
                <a href="" class="button actionButton addNews">Ajouter une actualité</a>
            </div>
            <div class="title folder clearfix">gestion des news</div>
            <div class="filters">
            <div class="searchfield">
                <input type="text" placeholder="RECHERCHER">
            </div>
                <div class="select">
                    <select name="" id="">
                        <option selected="selected">Catégorie</option>
                        <option value="sail">voile</option>
                        <option value="motor">moteur</option>
                        <option value="event">évènement</option>
                        <option value="app">application</option>
                    </select>
                </div>
            </div>
            <ul class="lines">

                <li class='th'>
                    <span class="nom part">Noms</span>
                    <span class="cats part">catégories</span>
                    <span class="app empty part"><div class="icon tab"></div></span>
                    <span class="date part">publication</span>
                    <span class="langs part">langues</span>
                    <span class="edit empty part"></span>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat event">évènement</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 04 / 2017</span>
                    <span class="langs part">
                        <span class="partContent">
                            <span class="lang">fr</span>
                            <span class="lang">en</span>
                            <span class="lang">de</span>
                            <span class="lang">es</span>
                            <span class="lang">it</span>
                            <span class="lang">cn</span>
                            <span class="lang">ru</span>
                            <span class="lang">tt</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat event">évènement</span>
                            <span class="cat motor">moteur</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 09 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat motor">moteur</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon off"></div></span>
                    <span class="date part">12 / 12 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        <span class="lang">es</span>
                        <span class="lang">it</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat event">évènement</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 04 / 2017</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        <span class="lang">de</span>
                        <span class="lang">es</span>
                        <span class="lang">it</span>
                        <span class="lang">cn</span>
                        <span class="lang">ru</span>
                        <span class="lang">tt</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat event">évènement</span>
                            <span class="cat motor">moteur</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 09 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat motor">moteur</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon off"></div></span>
                    <span class="date part">12 / 12 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        <span class="lang">es</span>
                        <span class="lang">it</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat event">évènement</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 04 / 2017</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        <span class="lang">de</span>
                        <span class="lang">es</span>
                        <span class="lang">it</span>
                        <span class="lang">cn</span>
                        <span class="lang">ru</span>
                        <span class="lang">tt</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat event">évènement</span>
                            <span class="cat motor">moteur</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 09 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Actualité numéro 1</span>
                    <span class="cats part">
                        <span class="partContent">
                            <span class="cat sail">voile</span>
                            <span class="cat motor">moteur</span>
                        </span>
                    </span>
                    <span class="app part"><div class="icon off"></div></span>
                    <span class="date part">12 / 12 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        <span class="lang">es</span>
                        <span class="lang">it</span>
                        </span>
                    </span>
                    <a href="edit-news.php" class="edit part"></a>
                </li>
            </ul>
            <ul class="pagination">
                <li class="page current">1</li>
                <li class="page"><a href="#">2</a></li>
                <li class="page"><a href="#">3</a></li>
                <li class="page elipsis">...</li>
                <li class="page"><a href="#">6</a></li>
                <li class="page"><a href="#">7</a></li>
                <li class="page"><a href="#">Suivants</a></li>
            </ul>
        </div>
        
    </div>
<?php 
include "footer.php";
?>