<?php
	require_once("assets/php/bdConfig.php"); 
    $pdo = getDb(); 
	$queryTable = "SELECT * FROM contacts"; 	
	$stmtTable = $pdo->prepare($queryTable); 
	$stmtTable->execute(); 
	$rows = $stmtTable->fetchAll(); 
	$count = count($rows); 
	$pdo=null; 
?>