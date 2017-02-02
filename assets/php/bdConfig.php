<?php
	// Connexion to data base
	function getDb() {
		try {
			return new PDO("mysql:host=localhost;dbname=Cecile;charset=utf8", "root", "",
	    	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} catch (Exception $e) {
			echo "Erreur lors de la connection à la base de données.";
		}
	}
?>