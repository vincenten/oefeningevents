<?php class Event
{ public $id , $title , $description , $date , $time , $website , $email;
	
	public function __construct($id, $title , $description , $date , $time , $website , $email)
	{
		$this->id =$id;
		$this->title = $title;
		$this->description = $description;
		$this->date = $date;
		$this->time = $time;
		$this->website = $website;
		$this->email = $email;
	}
}

