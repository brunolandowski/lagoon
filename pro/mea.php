<?php 

$pageCSS = 'mea.css';
$className = 'mea';

include "header.php";
?>
    <div class="lateralList">       
        <div class="list">
            <div class="title">DOSSIERS</div>
            <ul>
                <li class="folder"><a href="news.php">gestion des news</a></li>
                <li class="folder active">gestion des mises en avant</li>
                <li class="folder"><a href="events.php">gestion des événement & salons</a></li>
                <li class="folder "><a href="pages.php">gestion des pages</a></li>
                <li class="user"><a href="charters.php">gestion des comptes loueurs</a></li>
                <li class="user"><a href="#">gestion des comptes users</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="breadcrum"><a href="home.php">Site public</a> > Gestion des mises en avant</div>            
            <div class="actions">                
                <a href="" class="button actionButton addNews">Ajouter une mise en avant</a>
            </div>
            <div class="title folder clearfix">gestion des mises en avant</div>

            <ul class="lines">

                <li class='th'>
                    <span class="nom part">Noms</span>
                    <span class="app empty part"><div class="icon tab"></div></span>
                    <span class="date part">publication</span>
                    <span class="langs part">langues</span>
                    <span class="edit empty part"></span>
                </li>

                <li class="line">
                    <span class="nom part">Titre mise en avant n°1</span>
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
                    <a href="edit-mea.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Titre mise en avant n°1</span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 09 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        </span>
                    </span>
                    <a href="edit-mea.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Titre mise en avant n°1</span>
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
                    <a href="edit-mea.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Titre mise en avant n°1</span>
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
                    <a href="edit-mea.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Titre mise en avant n°1</span>
                    <span class="app part"><div class="icon on"></div></span>
                    <span class="date part">12 / 09 / 2016</span>
                    <span class="langs part">
                        <span class="partContent">
                        <span class="lang">fr</span>
                        <span class="lang">en</span>
                        </span>
                    </span>
                    <a href="edit-mea.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Titre mise en avant n°1</span>
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
                    <a href="edit-mea.php" class="edit part"></a>
                </li>
        </div>
        
    </div>
<?php 
include "footer.php";
?>