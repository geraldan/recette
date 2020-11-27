<?php 
include('../src/pdo.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../public/assets/style.css'>
    <title>nouvelle recette</title>
</head>
<body>
    <form action="verif.php" method="POST">
        <p>Information importante la recette n'est pas directement envoyé sur la platforme, une vérifcation est faite dans les plus brèf delai ¹</p>
        <label>Nom de la recette : </label>
        <input type="text" name="plate_name" required>

        <label>la recette : </label><br>
        <textarea name="recette" rows="10" cols="50" required></textarea>

        <textarea rows="10" cols="20" name="ingredient" required></textarea>

        <label>Les prérequis ² : </label>
        <textarea rows="10" cols="20" name="requirement" required></textarea>

        <input type="submit" value="envoyer la recette">
    </form>
    <footer>
        <p>¹ la vérifcation peut prendre plusieurs jours a compté de la date d'envoie</p>
        <p>² example : un four , un wok , des moules , une plaque de cuisson , une poche a douille etc</p>
    </footer>

</body>
</html>