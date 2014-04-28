<?php 
include_once("lib/html.php");
include_once("event.php");
include_once("database.php");

$website="";
while($row = $STH->fetch()){
	$id = $row['id'];
	$website=$website.new Link($row['title'],array("class"=>"list-group-item","href"=>"response.php?event=$id"))."\n";
}

$content = 	new Heading("Events",1).
			$website.
			new Paragraph("").
			new Link("New Event",array("href"=>"new.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<title></title>
</head>
<body>
<?php echo $content; ?>
</body>
</html>


