<?php
$pdo = new PDO('mysql:dbname=cuisine;host=127.0.0.1', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);