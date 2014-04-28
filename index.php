<?php
	include_once("event.php");
	include_once("lib/html.php");
	include_once("array.php");
	$imageSize = ["height" => 50, "width" => 50];

$content = new Link("New Event",array("href"=>"new.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));
foreach ($events as $event) {
		$content .= new Div(
			new Link(
				new Heading($event->title),
				['href'=>'response.php?id='.$event->id]
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

