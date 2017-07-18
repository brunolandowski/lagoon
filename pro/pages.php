<?php 

$pageCSS = 'pages.css';
$className = 'pages';

include "header.php";
?>
    <div class="lateralList">       
        <div class="list">
            <div class="title">DOSSIERS</div>
            <ul>
                <li class="folder"><a href="news.php">gestion des news</a></li>
                <li class="folder"><a href="mea.php">gestion des mises en avant</a></li>
                <li class="folder"><a href="events.php">gestion des événement & salons</a></li>
                <li class="folder active">gestion des pages</li>
                <li class="folder"><a href="charters.php">gestion des comptes loueurs</a></li>
                <li class="folder"><a href="#">gestion des comptes users</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="breadcrum"><a href="home.php">Site public</a> > Gestion des pages</div>
            <div class="title folder">gestion des pages</div>
            <ul class="folders">
                <li class="folder">
                    <a href="#">
                    <div class="count">5</div>
                    <div class="label">Modèles voile</div>
                    </a>
                </li>
                <li class="folder">
                    <a href="#">
                    <div class="count">5</div>
                    <div class="label">Modèles moteur</div>
                    </a>
                </li>
                <li class="folder">
                    <a href="#">
                    <div class="count">5</div>
                    <div class="label">Modèles custom</div>
                    </a>
                </li>
                <li class="folder">
                    <a href="#">
                    <div class="count">5</div>
                    <div class="label">Pages de la marque</div>
                    </a>
                </li>
                <li class="folder grey">
                    <div class="count">0</div>
                    <div class="label">Pages additionnelles</div>
                </li>
            </ul>
        </div>
    </div>
<?php 
include "footer.php";
?>