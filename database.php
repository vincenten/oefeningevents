<?php
ìnclude_once
/* Begin a transaction, turning off autocommit */
$DBH = new PDO("mysql:host=localhost;dbname=base", "root", "");

$sql = 'INSERT INTO base
    (id, title, description, date, time, website, email)
    VALUES ($_get[id] + 1, event + id , description, date, time, website, email)';

$sth = $DBH->prepare($sql);

$DBH->commit;

?>