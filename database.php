<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "base";
$DBH=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

$STH = $DBH->query('SELECT id,title,description,date,,time,website,Email,from events');
$STH2 = $DBH->prepare("INSERT INTO events(title,description,date,time,website,email) values(:title,:Description,:Date,:Time,:website,:Email);");


?>