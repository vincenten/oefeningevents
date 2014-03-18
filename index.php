<?php
	include_once("event.php");
	include_once("lib/html.php");
	$imageSize = ["height" => 50, "width" => 50];
$events = [new Event ('jep.jpg' , 'event 1' , 'description' , '19 maart 2014' , 'time' , 'website' ,'email'),
new Event ('apple.jpg' , 'event 2' , 'description' , '21 maart 2014' , 'time' , 'website' ,'email'),
new Event ('linux.jpg' , 'event 3' , 'description' , '27 maart 2014' , 'time' , 'website', 'email'),
new Event ('microzach.jpg' , 'event 4' , 'description' , '30 maart 2014' , 'time' , 'website' ,'email'),
new Event ('twitter1.gif' , 'event 5' , 'description' , '1 april 2014' , 'time' , 'website' ,'email')];
$content = "";
foreach ($events as $event) {
		$content .= new Div(
			new Link(
				new Heading($event->title),
				['href'=>'antwoord.php']
			).
			new image($event->image, $imageSize));
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

