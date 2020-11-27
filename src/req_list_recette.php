<?php 
include('pdo.php');

$sql = $pdo->prepare("SELECT * FROM recettes")->exec();

$recette = $sql->fetchAll();

?>
<!-- il faudras un form pour le referencement a voir -->