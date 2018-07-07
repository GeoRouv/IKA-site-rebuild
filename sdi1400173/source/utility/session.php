<?php 
	session_start();
	if(isset($_SESSION['login_user']))	
	{
		//Passing the logged-in username to a global variable so that all html can see it 
		$login_session = $_SESSION['login_user'];

	
	}	
?>