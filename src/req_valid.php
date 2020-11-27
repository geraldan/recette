<?php 
include('pdo.php');

$sql = $pdo->prepare("SELECT * FROM verifs")->execute();

$info = $sql->fetchAll();

?>