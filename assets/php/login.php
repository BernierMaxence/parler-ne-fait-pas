<?php
    require_once("assets/php/bdConfig.php"); 
    session_start();
    if(isset($_SESSION['loginTable'])){
    	header('Location: ../../table.php');
    }
	if(isset($_POST['submitLogin'])){  
        $data_missing = array();

        if(empty($_POST['id'])){
        	array_push($data_missing, "Login manquant");
     	}

     	if(empty($_POST['mdp'])){
        	array_push($data_missing, "mot de passe manquant");
     	}

        if(empty($data_missing)){
        	$id=$_POST['id'];
            $pdo = getDb(); 
        	$stmt = $pdo->prepare("SELECT MotDePasse FROM connexion WHERE identifiant = :id"); 
        	$stmt->BindParam(":id", $id, PDO::PARAM_STR); 
        	$stmt->execute(); 
        	$row = $stmt->fetch(); 

    		if(password_verify($_POST['mdp'],$row['MotDePasse'])){
	        	$_SESSION['loginTable']="$id";
	        	header('Location: ./table.php');
    		} else {
    			$message = "Identifiant ou mot de passe érroné"; 
    		}
    	}	
	} 
    $pdo=null; 
?>