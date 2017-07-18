<?php 

$pageCSS = 'form.css';
$pageJS = array('askform.js');
$className = 'form askform';

include "header_novisio.php";
?>	

<section class="form">
    <form action="" class="formContent" id="formAskAccount">
    	<div class="text">
    		<div class="title">Demande d'accès au site média</div>
    		<div class="desc">Ce formulaire est dédié aux proffesionnels de la presse souhaitant avoir accès aux visuels en haute définition.</div>
			
			<div class="line">
				<input id="Mr" name="title" type="radio"><label for="Mr">Mr</label>
                    <input id="Mme" name="title" type="radio"><label for="Mme">Mme</label>
			</div>
			<div class="line space">
				<input type="text" name="lastname" placeholder="Nom">
    			<input type="text" name="firstname" placeholder="Prénom">
    		</div>
    		<input type="text" name="mag" placeholder="Nom du magazine">
	    	<input type="text" name="address1" placeholder="addresse">
	    	<input type="text" name="address2" placeholder="addresse 2">
	    	<input type="text" name="address3" placeholder="Complément d'addresse">
	    	<div class="line">
		    	<input type="text" name="zipcode" placeholder="Code postal">
		    	<input type="text" name="city" placeholder="Ville">
	    	</div>
	    	<div class="line space">
		    	<input type="text" name="sate" placeholder="Etat (états-unis)">
		    	<div class="select">
                    <select name="country" id="countries">
                        <option value="">Pays</option>
                        <option value="en">Angleterre</option>
                        <option value="pu">portugal</option>
                        <option value="fr">France</option>
                        <option value="de">Allemagne</option>
                        <option value="ag">argentine</option>
                        <option value="cn">Chine</option>
                        <option value="jp">Japon</option>
                        <option value="mg">Magadascar</option>
                        <option value="fl">Floride</option>
                        <option value="aus">Australie</option>
                        <option value="sp">Espagne</option>
                        <option value="it">Italie</option>
                        <option value="br">Brésil</option>
                    </select>
                </div>
		    </div>
	    	<div class="line">
		    	<input type="text" name="sate" placeholder="Téléphone fixe">
		    	<input type="text" name="sate" placeholder="Téléphone mobile">
	    	</div>
	    	<div class="line space">
		    	<input type="text" name="email" placeholder="Email">
		    	<input type="text" name="website" placeholder="Site web">
	    	</div>
	    	<div class="line ">
	    		<input type="text" name="login" placeholder="Login">
	    	</div>
	    	<div class="line space">
		    	<input type="password" name="pswd" placeholder="Mot de passe">
		    	<input type="password" name="pswd2"  placeholder="Répétez le mot de passe">
	    	</div>
	    	<div class="line">
	    		<div class="infos">centres d'interêt</div>
		    	<input id="motor" name="interestmotor" type="checkbox"><label for="motor">moteur</label>
                <input id="sail" name="interestSail" type="checkbox"><label for="sail">voile</label>
	    	</div>
	    	<div class="line">
	    		<textarea name="" id="" cols="30" rows="10" data-placeholder="Votre message">Votre message</textarea>
	    	</div>

    		<button class="cta rollable">Envoyer a demande</button>

            <div class="responseMessage fields">veuillez remplir tous les champs</div>
            <div class="responseMessage success">Votre message a été envoyé avec succès</div>
            <div class="responseMessage error">Une erreur est survenue. Veuillez reéssayer ultérieurement</div>
            <div class="responseMessage toomany">Trop de demandes envoyées. Veuillez reéssayer ultérieurement</div>
    	</div>
    </form>
</section>

<?php 
include "footer.php";
?>