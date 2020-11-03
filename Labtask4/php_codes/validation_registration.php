<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	if(isset($_POST["register"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("data.xml");
			
			$user = $users->addChild("user");
			$user->addChild("username",$uname);
			$user->addChild("password",$pass);
			$user->addChild("type","user");
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>