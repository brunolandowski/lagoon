<?php 

$pageCSS = 'account.css';
$pageJS = array('account.js');
$className = 'account';

include "header_novisio.php";
?>	

<div class="subnav">
    <ul>
        <li data-tab="informations" class="active">informations personelles</li>
        <li data-tab="connection">connection</li>
    </ul>
</div>

<h1>Mon compte</h1>

<section class="tab active" data-tab="informations">
    <form action="" class="formContent" id="">
        <div class="text">
            <div class="line">
                <div class="info">
                    <div class="subtitle">Identité :</div><span>Mr Doe John</span>
                </div>
                <div class="info">
                    <div class="subtitle">Magazine :</div><span>yatchs passion </span>
                </div>
            </div>
            <div class="line"> <div class="subtitle">Adresse :</div></div>
            <input type="text" name="address1" placeholder="addresse" value="15 rue des boulangers">
            <input type="text" name="address2" placeholder="addresse 2" value="">
            <input type="text" name="address3" placeholder="Complément d'addresse" value="Batiment B">
            <div class="line space">
                <input type="text" name="zipcode" placeholder="Code postal" value="86534">
                <input type="text" name="city" placeholder="Ville" value="STUVAL">
            </div>
            <div class="line space">
                <div class="info">
                    <div class="subtitle">PAYS :</div><span>FRANCE </span>
                </div>
            </div>
            <div class="line">
                <div class="subtitle">Téléphone :</div>
                <div class="line">
                    <input type="text" name="sate" placeholder="Téléphone fixe" value="0167890987">
                    <input type="text" name="sate" placeholder="Téléphone mobile" value="0684567832">
                </div>
            </div>
            <div class="line">
                <div class="subtitle">Email :</div>
                <div class="line space">
                    <input type="text" name="email" placeholder="Email" value="j.doe@yatchspassion.fr">
                </div>
            </div>
            <div class="line">
                <div class="subtitle">Site Web :</div>
                <div class="line space">
                    <input type="text" name="website" placeholder="Site web" value="http://yatchspassion.fr">
                </div>
            </div>
            <div class="line">
                <div class="subtitle">centres d'interêt</div>
                <div class="line">
                    <input id="motor" name="interestmotor" type="checkbox" checked><label for="motor">moteur</label>
                    <input id="sail" name="interestSail" type="checkbox"><label for="sail">voile</label>
                </div>
            </div>

            <button class="cta rollable">Enregistrer les modifications</button>

        </div>
        
    </form>
</section>

<section class="tab" data-tab="connection">
    <form action="" class="formContent" id="">
        <div class="text">
            <div class="line space">
                <div class="subtitle">Login :</div>
                <div class="line">
                    <input type="text" name="login" placeholder="Login">
                </div>
            </div>
            <div class="line space">
                <div class="subtitle">Ancien mot de passe :</div>
                <div class="line">
                    <input type="password" name="pswd" placeholder="Mot de passe actuel">
                </div>
            </div>
            <div class="line space">
                <div class="subtitle">Nouveau mot de passe :</div>
                <div class="line">
                    <input type="password" name="new_pswd" placeholder="Nouveau mot de passe">
                    <input type="password" name="new_pswd2"  placeholder="Répétez le mot de passe">
                </div>
            </div>

            <button class="cta rollable">Enregistrer les modifications</button>
        </div>

    </form>
</section>

<?php 
include "footer.php";
?>


