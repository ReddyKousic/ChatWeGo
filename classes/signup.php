<?php
class Signup
{
	public function create_user($data)
	{

		if (filter_var($data['email'], FILTER_VALIDATE_EMAIL))
		{
			
			
			$email = $data['email'];
			$user = $data['user'];
		
			$password = password_hash($data['pass1'], PASSWORD_DEFAULT);
			$userid = $this->create_userid();


			

			$query = "insert into users (userid,user,email,pass) 
			values
			 ('$userid','$user','$email','$password')";
			$DB = new Database();
			$DB->save($query);
		}else{}

		
		
	}

	
	public function create_userid()
	{
		$length = rand(10,50);
		$number = "";
		for ($i=0; $i < $length; $i++)
		{ 
			$new_rand = rand(0,9);
			$number = $number . $new_rand;
		}
		return $number;

	}
}