<?php 
	require("assets/php/form.php"); 
?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Parler ne fait pas cuire le riz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <link rel="icon" type="image/png" href="" /> -->

		<link rel="icon" type="image/ico" href="images/favicon1.ico" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon1.ico" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<!-- One -->
					<section class="banner style1 orient-left content-align-center image-z-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Parler ne fait pas cuire le riz</h1>
							<p class="major">Mon amie, Cécile Krug, sort ce <b>livre génial </b> chez Flammarion dans quelques semaines.<br> J’ai eu la chance de le dévorer avant sa sortie et j’ai tout simplement <b> a-do-ré</b>.
							C’est  vraiment <b> très très drôle</b>, surprenant, léger, divertissant et franchement, ça fait beaucoup de bien ! </p>
							
							<p class = "major">J’ai tellement aimé ce bouquin (et pas que parce que c’est mon amie) que j’ai très envie de le faire connaître. Alors vous qui êtes mon ami ou l'amie d'une amie, je vous invite à <b>saisir votre adresse mail ci-dessous</b>, pour ne pas passer à côté de la parution de ce super roman : je vous enverrai personnellement un message pour vous dire quand est le grand jour.</p>

 							<div class="inner medium">
 								<?php 
 									if(isset($message)) {
 								?>
 								<div class ="">
 									<b class ="italic "><?php echo $message; ?></b>
 								</div>

 								<div class="field first ">
									<button  type = "button" onclick="location.href='http://parler-ne-fait-pas.fr'" class="button small informe" id ="submitForm" name="submitForm">Quelqu'un d'autre à prévenir ?</button>
								</div>

								<?php
 									} else {
 								?>

 								<form method="POST" action="#" >
									<div class="field half first">
										<label for="name">Votre adresse mail :</label>
										<input type="email" name="mail" id="mail" placeholder="Top secret" required/>
									</div>
									<div class="field half first">
										<label for="name">Qui a eu la très bonne idée ... </label>
										<input type="text" name="recommandation" id="recommandation" placeholder="...  de vous parler de cette page ?"/>
									</div>
									<div class="field first ">
										<button  type = "submit" class="button small informe" id ="submitForm" name="submitForm">Cliquez ici, c'est noté !</button>
									</div>
								</form>

								<?php
 									}
 								?>
								
							</div>
								<p class="major"> <br><br> Et si, comme moi, vous avez très très envie de <b>contribuer au succès du livre de Cécile</b>,<br> surtout diffusez cette page à tous vos ami(e)s pour qu'ils s'inscrivent à leur tour : </p> <div class="inner medium ">

								<ul class="icons">
								<!-- Facebook -->
									<li><a href="https://www.facebook.com/sharer/sharer.php?u=parler-ne-fait-pas.fr" target="_blank" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
								<!-- Twitter -->
									<li><a href="http://twitter.com/home?status=Une amie d'une amie a écrit un livre GENIAL ! Unissons-nous pour qu'il devienne le bestseller qu'il mérite d'être: www.parler-ne-fait-pas.fr" target="_blank" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<!-- Mail -->
									<li><a href="mailto:?body=Bonjour :) Ce roman a été écrit par une amie d'une amie et j'ai décidé, moi aussi, de me mobiliser pour qu'il soit un carton en librairie ! Rejoins la liste déjà longue des lecteurs impatients de le découvrir et saisis à ton tour ton mail : www.parler-ne-fait-pas.fr&subject=Un nouveau livre génial : Parler ne fait pas cuire le riz" class="icon style2 fa-envelope"><span class="label">Mail</span></a></li>

								</ul>
							</div>

							<p class = "major"> L'histoire en quelques lignes (juste pour vous  &#128521; ) : <br>à bientôt quarante ans, Jeanne est au bout, du bout du rouleau. Un boulot qui stagne, des relations tendues avec sa mère, un mec immature et des kilos en trop. Pour lui changer les idées, sa sœur lui offre une semaine de jeûne au Pays Basque. Un jeûne ??? Gloups !<br> Pour Jeanne, ces vacances s’annoncent longues, très lonnnngggguuuuues ... <br><b> Merciii pour votre implication et à très vite ! </b><br>- Claire - </p> <br><br>
						</div>

						<div class="image">
							<img src="images/parler_ne_fait_pas_cuire_le_riz_cecile_krug.jpg" alt='Couverture de "Parler ne fait pas cuire le riz"' />
						</div>

					</section>
				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							
							<p class = "txt_footer ">Site réalisé par Maxence à l'initiative de Claire, CNIL n° 2027862v0</p>
							<p class = "txt_footer ">Hébergé par la société OVH : SAS OVH - http://www.ovh.com
								2 rue Kellermann 
								BP 80157 
								59100 Roubaix
								</p> 
 								<p class = "txt_footer ">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>. <a href="https://html5up.net/license">Creative Commons</a></p>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>