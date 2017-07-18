<?php 

$pageCSS = 'club_configs.css';
//$pageJS = array('configs.js', 'newsletter_form.js');
$className = 'club_configs';

include "club_header.php";
?> 
   <div class="textIntro">
      <h1 class="title">Mes configurations</h1>
   </div>
   
   <section class="myConfigs">
   		<a href="#" class="config rollable">
   			<div class="picture coverImg"><img src="dynamic/club_configs/42.jpg" alt=""></div>
   			<div class="text">42</div>
   			<div class="close rollable"></div>
   		</a>
   		<a href="#" class="config rollable">
   			<div class="picture coverImg"><img src="dynamic/club_configs/630.jpg" alt=""></div>
   			<div class="text">630</div>
   			<div class="close rollable"></div>
   		</a>
   		<a href="#" class="config rollable">
   			<div class="picture coverImg"><img src="dynamic/club_configs/450.jpg" alt=""></div>
   			<div class="text">450</div>
   			<div class="close rollable"></div>
   		</a>
   </section>

<?php 
include "club_footer.php";
?>