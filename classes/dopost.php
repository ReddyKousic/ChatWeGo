<?php
class Dopost
{
	public function create_post($data1,$user111,$user_iid)
	{
		$posta = $data1['postpub'];
		$post_idt = $this->create_pid();

		$string = "insert into posts (user, pid1, post,userid) values ('$user111', '$post_idt', '$posta', $user_iid)"; 
			
			
		$y = new Database();
		$y->save($string);
        echo $string;
		

		
		
	}
	public function get_posts()
 	{
 		$query =" SELECT * FROM posts order by postid desc";
		$DB = new Database();
		$result = $DB->read($query);

		if ($result)
		{
			return $result;
		}else
		{
			return false;
		}
 	}

	
	public function create_pid()
	{
		$length = rand(10,50);
		$number1 = "";
		for ($i=0; $i < $length; $i++)
		{ 
			$new_rand = rand(0,9);
			$number1 = $number1 . $new_rand;
		}
		return $number1;

	}
}