<?php 

$pageCSS = 'login.css';
$className = 'login';

include "layout.php";
?>
    <div class='loginBloc'>
        <div class="logo"></div>
        <h1>backoffice</h1>
        <div class="form">
            <div class="line">
                <div class="field">
                    <input type="text" value="" id="email" placeholder="Email">                    
                </div>
            </div>
            <div class="line">
                <div class="field">
                    <input type="text" value="" id="password" placeholder="Mot de passe">                  
                </div>
            </div>
             <div class="line">
                <a  href="home.php" class="button valid">VALIDER</a>
            </div>
            <div class="message">Mauvaise combinaison de login / mot de passe</div>
        </div>
    </div>
<?php 
include "footer.php";
?>