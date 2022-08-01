<?php
$host = '127.0.0.1';
$db   = 'room_cetegori';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';
$dnr = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dnr,'root','');
?>