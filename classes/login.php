
<?php

class Login
{
	private $error = "";

	public function evaluate($data){
		$user= addslashes($data['user']);
		$pass = addslashes($data['pass']);

		$query = "select * from users where user ='$user' limit 1";

		$DB = new Database();
		$result = $DB->read($query);

		if ($result)
		{
			
			$row = $result[0];
			

			if (password_verify($pass, $row['pass']) == 1)
			{
				//create session
				$_SESSION['muzuox_userid'] = $row['userid'];
				
			}else{

				$this->error = "(FEW MORE TRIES LEFT UNTIL IP BAN).  To Login. May Be Incorrect Credentials Supplied  Asshole!!";
				
			}
		}else{
			$this->error = "(FEW MORE TRIES LEFT UNTIL IP BAN). Unable To Login. May Be Incorrect Credentials Supplied  Asshole!!";
			
		}
		return $this->error;

	}
	public function check_login($id)
	{
		/////////////////////////////////////////////////////////////
		if (is_numeric($id))
	    {
			$query = "select * from users where userid ='$id' limit 1";

			$DB = new Database();
			$result = $DB->read($query);
			if ($result)
			{
				$user_data = $result[0];
				return $user_data;
			}else
		    {
		    	header("Location: ../index.php");
		    	die;
		    }


	    }else
	    {
	    	header("Location: ../index.php");
	    	die;
	    }

	}
}