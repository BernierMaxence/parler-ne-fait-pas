<?php
    require_once("assets/php/bdConfig.php"); 

  	if (isset($_POST['submitForm'])) {
		// Checks server side
		$data_missing = array(); 

		if (!isset($_POST['mail']) || empty($_POST['mail'])) {
			array_push($data_missing, 'mail vide'); 
		}
		// If checks sever side are ok 
		if (empty($data_missing)) {
			$pdo = getDb(); 
			// Insert into data base
			try {
				$mail = $_POST['mail']; 
		        $recommandation = $_POST['recommandation']; 
		        $query = "INSERT INTO contacts VALUES (:mail, :recommandation)"; 
		        $stmt = $pdo->prepare($query); 
		        $stmt->bindParam(":mail", $mail, PDO::PARAM_STR); 
		        $stmt->bindParam(":recommandation", $recommandation, PDO::PARAM_STR); 
		        $stmt->execute(); 
		        $message = "C'est noté, je vous préviens le jour J !"; 
			} catch (PDOException $e) { // If primary key violation exception
				if($e->errorInfo[1] == 1062) {
					$message = "Vous avez déjà donné votre adresse mail. Mais on aprécie votre enthousiasme !";
				}
			}
		} else {
			$message = "Merci de remplir tous les champs"; 
		}
	}
	$pdo=null; 
?>