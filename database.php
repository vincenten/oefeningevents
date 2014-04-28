<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "base";
$DBH=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$STH = $DBH->query('SELECT id,title,description,date,time,website,Email from evenementen');
$STH2 = $DBH->prepare("INSERT INTO evenementen(title,description,date,time,website,email) values(:title,:Description,:Date,:Time,:website,:Email);");



?>