<?php

	$gender="";
	$err_gender="";
	$hobbies="";
	$err_places="";
	$profession="";
	$err_profession="";
	$name="";
	$err_name="";
	
	$has_error = false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"]," ")){
			$err_name="No space allowed";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$err_hobbies = "Atleast select 1 hobby";
			$has_error = true;
		}
		else{
			$hobbies=$_POST["hobbies"];
		}
		
		if(!$has_error){
			echo $name;
		}
		
	}
	
?>
<html>
	<head>
		<title>Club Member Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registation</h1></legend>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="text" placeholder="code" >- </td> 
						<td><input type="text" placeholder="Number" ></td>
					</tr>
					<tr>
						<td>Adress:</td>
						<td><input type="text"placeholder="Street Adress"></td>
					</tr>
						<tr>
						<td></td>
						<td><input type="text" placeholder="City" >- </td> 
						<td><input type="text" placeholder="State" ></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text"placeholder="Postal/Zip Code"></td>
					</tr>
					<tr>
						<select name="dob_day" id="dob_day">
							<?php
								for ($i=1; $i < 31; $i++) { 
									echo 'option value="'.$i.'">'.$i.'</option>';
								}
							?>
						</select>
					</tr>
					<tr>
						<td>Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td>Where did you hear about us?  <?php echo $err_places;?></td>
						<td>
							<input type="checkbox" name="places[]" value=""> A Friend or Colleague<br>
							<input type="checkbox" name="places[]" value="Google"> Google <br>
							<input type="checkbox" name="places[]" value="Blog Post"> Blog Post <br>
							<input type="checkbox" name="places[]" value="News Article"> News Article <br>
						</td>
					</tr>
					<tr>
					<td>Bio:</td>
					<td><textarea ></textarea>
				    </td>
				    </tr>
				<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>