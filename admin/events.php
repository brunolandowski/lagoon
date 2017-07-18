<?php 

$pageCSS = 'events.css';
$className = 'events';

include "header.php";
?>
    <div class="lateralList">       
        <div class="list">
            <div class="title">DOSSIERS</div>
            <ul>
                <li class="folder"><a href="news.php">gestion des news</a></li>
                <li class="folder"><a href="mea.php">gestion des mises en avant</a></li>
                <li class="folder active">gestion des événement & salons</li>
                <li class="folder "><a href="pages.php">gestion des pages</a></li>
                <li class="user"><a href="charters.php">gestion des comptes loueurs</a></li>
                <li class="user"><a href="#">gestion des comptes users</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="breadcrum"><a href="home.php">Site public</a> > Gestion des événement & salons</div>            
            <div class="actions">      
                <a href="" class="button actionButton addEvents">Ajouter un événement</a>
            </div>
            <div class="title folder clearfix">gestion des événement & salons</div>
            <div class="filters">
                <div class="select">
                    <select name="" id="">
                        <option selected="selected">Pays</option>
                    </select>
                </div>    
            </div>
            <ul class="lines">

                <li class='th'>
                    <span class="nom part">Noms</span>
                    <span class="country part">Pays</span>                    
                    <span class="date part">date</span>
                    <span class="boats part">Modèles</span>
                    <span class="app empty part"><div class="icon tab"></div></span>
                    <span class="edit empty part"></span>
                </li>

                <li class="line">
                    <span class="nom part">Nom événement</span>
                    <span class="country part">France</span>
                    <span class="date part">12 / 04 / 2017</span>
                    <span class="boats part">
                         <span class="partContent">
                             <span class="boat">380</span>
                             <span class="boat">42</span>
                             <span class="boat">51 s</span>
                             <span class="boat">seventy 7</span>
                         </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <a href="edit-event.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Nom événement</span>
                    <span class="country part">France</span>
                    <span class="date part">12 / 09 / 2016</span>
                     <span class="boats part">
                         <span class="partContent">
                             <span class="boat">39</span>
                             <span class="boat">46</span>
                             <span class="boat">51 s</span>
                         </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <a href="edit-event.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Nom événement</span>
                    <span class="country part">France</span>
                    <span class="date part">12 / 12 / 2016</span>
                    <span class="boats part">
                         <span class="partContent">
                             <span class="boat">39</span>
                             <span class="boat">46</span>
                         </span>
                    </span>
                    <span class="app part"><div class="icon off"></div></span>
                    <a href="edit-event.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Nom événement</span>
                    <span class="country part">France</span>
                    <span class="date part">12 / 04 / 2017</span>
                    <span class="boats part">
                         <span class="partContent">
                             <span class="boat">39</span>
                             <span class="boat">46</span>
                         </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <a href="edit-event.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Nom événement</span>
                    <span class="country part">France</span>
                    <span class="date part">12 / 09 / 2016</span>
                    <span class="boats part">
                         <span class="partContent">
                             <span class="boat">seventy 7</span>
                         </span>
                    </span>
                    <span class="app part"><div class="icon on"></div></span>
                    <a href="edit-event.php" class="edit part"></a>
                </li>

                <li class="line">
                    <span class="nom part">Nom événement</span>
                    <span class="country part">France</span>
                    <span class="date part">12 / 12 / 2016</span>
                    <span class="boats part">
                         <span class="partContent">
                             <span class="boat">380</span>
                             <span class="boat">42</span>
                             <span class="boat">51 s</span>
                             <span class="boat">seventy 7</span>
                         </span>
                    </span>
                    <span class="app part"><div class="icon off"></div></span>
                    <a href="edit-event.php" class="edit part"></a>
                </li>
        </div>
        
    </div>
<?php 
include "footer.php";
?>