<?php 

$pageCSS = 'edit-event.css';
$className = 'edit event';

include "header.php";
?>
    <div class="content">     
        <div class="title">édition d'un événement</div>


        <div class="bloc">
            <div class="head">
                informations de base
                <div class="toggle"></div>
            </div>
            <div class="content">
                <input class="full" type="text" placeholder="TITRE DE L'ÉVÉNEMENT">
                <div class="inApp">
                    <input id="app" type="checkbox">
                    <label for="app">Visible sur l’application</label>
                </div>
                <div class="select country">
                    <select name="" id="">
                        <option selected="selected">Pays</option>
                    </select>
                </div> 
                <div class="date">
                    Date :
                    <div class="select">
                        <select name="" id="">
                            <option selected="selected">JOUR</option>
                        </select>
                    </div> 
                     <div class="select">
                        <select name="" id="">
                            <option selected="selected">MOIS</option>
                        </select>
                    </div> 
                     <div class="select">
                        <select name="" id="">
                            <option selected="selected">ANNÉE</option>
                        </select>
                    </div> 
                </div>
                <div class="boats">
                    <div class="partTitle">modèles exposés</div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                    <div class="boat"><input id="id" type="checkbox"><label for="id">380</label></div>
                </div>
            </div>
        </div>
        
        <div class="actions">
            <a href="#" class="button warning">Supprimer</a>
            <a href="#" class="button">Enregistrer</a>
            <a href="#" class="button">Publier</a>
        </div>
    </div>
<?php 
include "footer.php";
?>