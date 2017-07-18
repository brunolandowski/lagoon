<?php 

$pageCSS = 'edit-news.css';
$className = 'edit news';

include "header.php";
?>
    <div class="content">     

        <div class="langs">
            <div class="lang active">EN</div>
            <div class="lang">FR</div>
            <div class="lang">IT</div>
            <div class="lang">ES</div>
            <div class="lang">DE</div>
            <div class="lang">CN</div>
            <div class="lang">RU</div>
            <div class="lang">TW</div>
        </div>
        <div class="title">édition d'un article</div>


        <div class="bloc">
            <div class="head">
                informations de base
                <div class="toggle"></div>
            </div>
            <div class="content">
                <input class="full" type="text" placeholder="TITRE DE L'ARTICLE">
                <div class="categories">
                    <span >catégories :</span>
                    <input id="sail" type="checkbox"><label for="sail">voile</label>
                    <input id="motor" type="checkbox"><label for="motor">moteur</label>
                    <input id="event" type="checkbox"><label for="event">évènements</label>
                    <div class="inApp">
                        <input id="app" type="checkbox">
                        <label for="app">Visible sur l’application</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="bloc">
            <div class="head">
                visuel de l'article
                <div class="toggle"></div>
            </div>
            <div class="imagePicker">
                <div class="image">
                    <input type="hidden">
                </div>
                <div class="actions">
                    <a href="#" class="button secondary">Retirer l'image</a>
                    <a href="#" class="button">Choisir une image</a>
                </div>
            </div>
        </div>

        <div class="bloc">
            <div class="head">
                contenu de l'article
                <div class="toggle"></div>
            </div>
            <div class="content">
                <textarea class="editor" name="" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="bloc">
            <div class="head">
                extrait court de l'article
                <div class="toggle"></div>
            </div>
            <div class="content">
                  <textarea class="min-editor" name="" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        
        <a href="#" class="button inverse">Dupliquer le contenu sur les autres langues</a>
        
        <div class="actions">
            <a href="#" class="button warning">Supprimer</a>
            <a href="#" class="button">Enregistrer</a>
            <a href="#" class="button">Publier</a>
        </div>
    </div>
<?php 
include "footer.php";
?>