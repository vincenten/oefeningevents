class events
{ public $image , $title , $description , $date , $time , $website , $email;
	
	public function __construct($image , $title , $description , $date , $time , $website , $email)
	{
		$this->$image = $image;
		$this->$title = $title;
		$this->$description = $description;
		$this->$date = $date;
		$this->$time = $time;
		$this->$website = $website;
		$this->$email = $email;
	}
}