<?php


	$xml=simplexml_load_file("../xml_files/admins.xml");
	$users = $xml->user;
	$flag=false;
	if( (isset($_POST['password']) )&&(isset($_POST['username']))){
			foreach($users as $user){
		if( $user->username == $_POST['username'] && $user->password == $_POST['password']){
	$flag=true;
	session_start();
	$_SESSION["logged_in"] = True;
  $_SESSION["username"] = $_POST['username'];
	}
}
}

	if($flag){

		header("Location: ../html_files/dashboard.php");
	}else{
		if( (isset($_POST['password']) )&&(isset($_POST['username']))){
		echo "Invalid credentiails";
	}
	else{ echo "Provide credentials.";}
	}


?>
