<?php
class aMail{
	
	protected $to,$subject,$message,$headers;
	
	public function aTo($to){
	   $this->to=$to;
	}
	public function aSubject($subject){
	   $this->subject=$subject;
	}
	public function aMessage($message){
	   $this->message=$message;
	}
	public function aHeaders($headers){
	   $this->headers=$headers;
	}
	
	// send mail
	public function sendMail(){
		//echo $this->$to, $this->$subject, $this->$message, $this->$headers;
		echo  "$this->to, $this->subject, $this->message, $this->headers";
		//mail($this->$to, $this->$subject, $this->$message, $this->$headers);
    }
		
}




?>