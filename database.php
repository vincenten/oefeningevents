<?php
/* Begin a transaction, turning off autocommit */
$DBH = new PDO("mysql:host=localhost;dbname=base", "root", "");


/* Insert multiple records on an all-or-nothing basis */
$sql = 'INSERT INTO base
    (id, title, description, date, time, website, email)
    VALUES ($_get[id] + 1, event + id , description, date, time, website, email)';

$sth = $dbh->prepare($sql);

foreach ($events as $event) {
    $sth->execute(array(
        $event->title,
        $event->description,
        $event->date,
        $event->time,
 		$event->website,
 		$event->email,
    ));
}

$dbh->commit();

?>