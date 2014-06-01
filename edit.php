<?php 
include_once("lib/html.php");
include_once("event.php");
include_once("database.php");

$content = "";
$id2;

$STH->setFetchMode(PDO::FETCH_ASSOC);

while($row = $STH->fetch()){
if($row['id']==$_GET["event"]){
			$id = $row['id'];
			$name = $row['title'];
			$date = $row['date'];
			$time = $row['time'];
			$link = $row['website'];
			$email = $row['mail'];
			$description = $row['description'];

try {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "base";
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$DBH2 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );



	} catch(PDOException $e) {
	echo "I'm sorry. I'm afraid I can't do that.";
}

$content = 	new Paragraph(
				new Div(
					new Heading("Edit Event",1)
				,array("class"=>"col-sm-12"))
			).
			new Form(
				new Div(
					new Label("Event name",array("for"=>"inputEventName","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputEventName","placeholder"=>"Event name","Name"=>"Name", "value"=> "$name")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Date",array("for"=>"inputEventDate","class"=>"col-sm-2 control-label")).
					new Div(
					new Input("","date",array("class"=>"form-control","id"=>"inputEventDate","placeholder"=>"Event date","Name"=>"Date","value"=> "$date")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Time",array("for"=>"inputEventTime","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","time",array("class"=>"form-control","id"=>"inputEventTime","placeholder"=>"Event time","Name"=>"Time", "value"=> "$time")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event link",array("for"=>"inputEventLink","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputEventLink","placeholder"=>"Event link","Name"=>"Link","value"=> "$link")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Email",array("for"=>"inputEventEmail","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","email",array("class"=>"form-control","id"=>"inputEventEmail","placeholder"=>"Event contact Email","Name"=>"Email","value"=> "$email")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event discription",array("for"=>"inputEventDiscription","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("", "text", array("class"=>"form-control","rows"=>"5","id"=>"inputEventDescription","placeholder"=>"Event description","Name"=>"Description"
							, "value"=> "$description"))
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).				
				new Div(
					new Div(
						new Button("Save Event",array("type"=>"submit","name"=>"submit","value"=>"Upload","class"=>"btn btn-default"))
					,array("class"=>"col-sm-offset-2 col-sm-10"))
				,array("class"=>"form-group"))
			,array("class"=>"form-horizontal","role"=>"form","method"=>"post")).
			new Link("Back to events",array("href"=>"index.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));;}}

if(isset($_POST['submit'])) {
	$Data=array("title"=>$_POST["Name"],"Description"=>$_POST["Description"],"Date"=>$_POST["Date"],"Time"=>$_POST["Time"],"website"=>$_POST["Link"],"Email"=>$_POST["Email"]);
	$STH2->execute($Data);
	$DBH->query('SELECT id,title,description,date,time,website,mail from evenementen;');
	$DBH2->query("DELETE FROM evenementen WHERE id= '$id' ");
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
  <?= $content; ?>
</body>
</html>