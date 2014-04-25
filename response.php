<?php 
include_once("event.php");
include_once("lib/html.php");
include_once("array.php");
$event =  null;
$content = "";

$id = $_GET["id"] ;
		foreach ($events as $ev) { 
			if ($id == $ev->id ) {
				$event = $ev;
			}
		}

		$content .= new Div(
		
				new Heading($event->title) .
				new Heading($event->description) .
				new Heading($event->date) . 
				new Heading($event->time) .
				new Heading($event->website) . 
				new Heading($event->email)
				);
	

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo $content; ?>
</body>
</html>


