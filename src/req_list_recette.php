<?php 
include('pdo.php');

$sql = $pdo->prepare("SELECT * FROM recettes")->execute();

$recette = $sql->fetchAll();

?>