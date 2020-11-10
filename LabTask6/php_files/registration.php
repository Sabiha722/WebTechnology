<?php
$fullname = $error_fullname = $username = $error_username = $password =$error_password  = $error_confirm_password = "";
$error_gender = $email = $error_email = $phone_no = $error_phone_no  = $error_city = "";
$hasError = false;
function PassNum()
{

    $x = (strpos($_POST["password"], '1') + strpos($_POST["password"], '2') + strpos($_POST["password"], '3') + strpos($_POST["password"], '4') + strpos($_POST["password"], '5') + strpos($_POST["password"], '6') + strpos($_POST["password"], '7') + strpos($_POST["password"], '8') + strpos($_POST["password"], '9') + strpos($_POST["password"], '0'));

    return $x > 0; 

}

	if(isset($_POST["register"])){
		if(empty($_POST["fullname"])){
			$error_fullname="Full name required";
			$hasError =true;
		}
		else{
			$fullname = htmlspecialchars($_POST["fullname"]);
		}


		if (empty($_POST["username"]))
	{
			$error_username = "*Username required";
			$hasError = true;
	}
	elseif (strlen($_POST["username"]) < 6)
	{
			$error_username = "*Username must be 6 characters long";
			$hasError = true;
	}
	elseif (strpos($_POST["username"], ' ') != false || $_POST["username"] != trim($_POST["username"]))
	{
			$error_username = "*Space is not allowed at start or inside or at end in Username.";
			$hasError = true;
	}
	else
	{
			$username = htmlspecialchars($_POST["username"]);
	}


	if (empty($_POST["password"]))
	 {
			 $error_password = "*Password required";
			 $hasError = true;
	 }
	 elseif (strlen($_POST["password"]) < 8)
	 {
			 $error_password = "*Password must be 8 characters long";
			 $hasError = true;
	 }

	 elseif (!PassNum())
	 {
			 $error_password = "*Password must contain a number ";
			 $hasError = true;
	 }
	 elseif (strtolower($_POST["password"]) == $_POST["password"])
    {
        $error_password = "*Password must contain uppercase and lowercase alphabets ";
        $hasError = true;
    }
    else
    {
			if (strpos($_POST["password"], '#') == false && strpos($_POST["password"], '?') == false )
	 	 			{
	 			 $error_password = "*Password must  contain a special character. Ex : # ? ";
	 			 $hasError = true;
	 	 			}
			if	(strpos($_POST["password"], '#') == true ) {
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;

			}

			if (strpos($_POST["password"], '?') == true )
			{
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;
			}

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
