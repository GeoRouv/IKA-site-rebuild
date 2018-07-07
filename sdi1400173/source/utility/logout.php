<?php
   session_start();
   
   //if(session_destroy()) {
   //  header("Location: index.php");
   //}
   
    if(isset($_SESSION["login_user"])){
		unset($_SESSION["login_user"]);
		header("Location: ../index.php");
	}
?>