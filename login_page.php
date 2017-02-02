<?php 
	require("assets/php/login.php"); 
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
		<link rel="icon" type="image/ico" href="images/favicon1.ico" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon1.ico" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-center image-z-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							
 							<form method="POST" action="#" >
								<div class="field half first">
									<label for="id">Idetifiant :</label>
									<input type="text" name="id" id="id" placeholder="Top" required/>
								</div>
								<div class="field half first">
									<label for="mdp">Mot de passe :</label>
									<input type="password" name="mdp" id="mdp" placeholder="secret" required/>
								</div>
								<div class="field first ">
									<button  type = "submit" class="button small informe" id ="submitLogin" name="submitLogin">Je suis dans le coup !</button>
								</div>
							</form>
							<?php 
								if(isset($message)) {
									echo "<br><br><h4>".$message."</h4>"; 
								}
							?>

						</div>
					</section>

				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							
							<p class = "txt_footer ">Site réalisé par Maxence à l'initiative de Claire, CNIL n° 2027861</p>
							<p class = "txt_footer ">Site hébergé par la société OVH : SAS OVH - http://www.ovh.com
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