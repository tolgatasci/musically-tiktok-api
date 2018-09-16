	<?php
		include('musically.php');
		$username = 'email';
		$password = 'password';
		$captcha = null;
		$i = new Musically();
	//$resp = $i->register("email", "password"); no register need RE-CAPTCHA no passing
	try{
	
		
	if(!empty($_POST['kod'])){
		$captcha = $_POST['kod']; 
	}
	
	
	

	return false;*/
	$resp = $i->login($username, $password,$captcha);
	
		
	
	/*	 $message = $i->listMessage();
		 foreach($message as $mes):
		 $i->deleteMessage($mes);
		 endforeach;*/
		$following = $i->listFollowing("user_id");
		if(!empty($following)){
			$follopwers = $i->listFollower("user_id");
		// no follow unfollow bot
		foreach($following as $following_id):
		if (!in_array($following_id,$follopwers))
		  {
		  var_dump($i->follow($following_id,0));
		  }
		endforeach;
		foreach($follopwers as $followers_id):
		
		if (!in_array($followers_id,$following))
		  {
		  var_dump($i->follow($followers_id,1));
		  }
		endforeach;
		}
		

		$i->username = "username";
		for($c=0;$c<5000;$c++):
		$test = $i->home_list();
		
		foreach($test as $id):
		
		var_dump($i->follow($id,"1"));
	
		endforeach;
		
		endfor;
	}catch(Exception $e){
		var_dump($e);
	}`
