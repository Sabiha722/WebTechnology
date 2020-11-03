<?php
	/*$file = fopen("data.txt","r");
	$i=1;
    while(!feof($file)){
		$line = fgets($file);
		$info = explode(":",$line);
		echo "username: $info[0] <br> ";
		echo "password: $info[1] <br> ";
		echo "type: $info[2] <br> ";
	}*/
	$xml=simplexml_load_file("data.xml");
	$users = $xml->user;
	$flag=false;
	if( (isset($_POST['password']) )&&(isset($_POST['username']))){
			foreach($users as $user){
		if( $user->username == $_POST['username'] && $user->password == $_POST['password']){
	$flag=true;
	}
  }
}

	if($flag){
		header("Location:dashboard.php");
	}
	else{
		if( (isset($_POST['password']) )&&(isset($_POST['username']))){
		echo "Invalid credentiails";
	}
	else{ echo "Provide credentials.";}
	}


?>