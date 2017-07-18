<?php 

$pageCSS = 'form.css';
//$pageJS = array('login.js');
$className = 'form login';

include "header_novisio.php";
?>	

<section class="form">
    <form action="myaccount.php" class="formContent">
    	<div class="text">
    		<div class="title">Connectez-vous</div>
    		<div class="desc">Et accédez aux informations presses et médias en HD</div>
	    	
	    	<input type="text" name="login" placeholder="login">
	    	<input type="text" name="email" placeholder="email">
            <a href="#" class="lostpswd rollable">Mot de passe perdu</a>
    		<button class="cta rollable">Valider</button>

            <div class="responseMessage error">Aucune correspondance trouvée</div>
    	</div>
    </form>
    <div class="accountAsk">
        si vous êtes un proffessionel et que vous souhaitez avoir accès aux visuels en HD, veuillez remplir <a href="askform.php">le questionnaire ici</a>.
    </div>
</section>

<?php 
include "footer.php";
?>