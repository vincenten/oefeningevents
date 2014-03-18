<?php
	include_once("event.php");
	include_once("lib/html.php");
$events = [new Event ('image' , 'event 1' , 'description' , 'date' , 'time' , 'website' ,'email'),
new Event ('image' , 'event 2' , 'description' , 'date' , 'time' , 'website' ,'email'),
new Event ('image' , 'event 3' , 'description' , 'date' , 'time' , 'website', 'email'),
new Event ('image' , 'event 4' , 'description' , 'date' , 'time' , 'website' ,'email'),
new Event ('image' , 'event 5' , 'description' , 'date' , 'time' , 'website' ,'email')];
$content = "";
foreach ($events as $event) {
	$content .= new  Div (new Heading($event->title));
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
	<title></title>
</head>
<body>
<?php echo $content; ?>
</body>
</html>

