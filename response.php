<?php 
include_once("event.php");
include_once("lib/html.php");
include_once("array.php");
include_once("database.php");

$event = $_GET["event"];
$content = "";


$STH->setFetchMode(PDO::FETCH_ASSOC);
while($row = $STH->fetch()){
	if($row['id']==$_GET["event"]){
		$content =	new Heading($row['title'],1)."\n".
					new Paragraph("beschrijving: ".$row['description'])."\n".
					new Paragraph("datum en tijd: ".$row['date']." ".$row['time'])."\n".
					new Link("website: ".$row['website'])."\n".
					new Paragraph("email: ".$row['mail'])."\n".
					new Link("Back to events",array("href"=>"index.php","class"=>"btn btn-primary btn-lg active","role"=>"button")).
					new Link("Edit",array("href"=>"edit.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));
	
	}
}

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


