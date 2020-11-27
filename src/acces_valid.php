<?php
$user = 'root';
$pass = 'root';

if(empty($_POST)): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>
<? endif;
$u = $_POST['user'];
$p = $_POST['password'];

if($user == $u && $pass == $p){
    
include('req_valid.php');

}else{
    header('location:index.php')
}
?>
