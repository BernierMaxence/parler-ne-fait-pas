<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1'); 
 if(!isset($_SESSION['loginTable'])){
 	header('Location: login_page.php');
}
	require("assets/php/form.php"); 
	require("assets/php/TableauMails.php"); 
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
	<section class="wrapper style1 align-center">
		<div class="inner">
			<h2>Tableau des adresses mails récoltées</h2>
			<p> Compteur : <b><?php echo($count); ?></b> adresses enregistrées</p>
			
			<div class="index align-left">
		<!-- Table -->
				<section>

					<div class="content">
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Email</th>
										<th>Qui a recommandé ?</th>
									</tr>
								</thead>

								<tbody>
								<?php 
									foreach ($rows as $row ) {
										?>
										<tr>
											<td> <?php echo $row["mail"]; ?> </td>
											<td> <?php echo $row["recommandation"]; ?> </td>
										</tr>
										<?php
									}
								?>
								</tbody>
								
							</table>
						</div>
						<br>

					<!-- Buuton -->
						<div class=" align-center">
							<button><a href="assets/php/deco.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></button>
						</div>

					</div>
				</section>
			</div>
		</div>
	</section>				
	</body>
</html>
