<?php 
include('../src/pdo.php');

$plate_name =$_POST['plate_name'];
$recette= $_POST['recette'];
$ingredient =$_POST['ingredient'];
$requirement= $_POST['requirement'];

$sql = $pdo->prepare("INSERT INTO verifs (plate_name, recette, ingredient, requirement)
VALUES
('$plate_name','$recette','$ingredient', '$requirement')")->execute();