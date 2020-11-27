<?php 
include('pdo.php');

$id = $_GET['id']

$sql = $pdo->prepare("SELECT * FROM recette WHERE id = $id")->execute();

$info = $sql->fetchAll();

?>