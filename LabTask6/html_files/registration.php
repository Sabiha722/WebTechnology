<?php include_once "../php_files/registration.php" ;?>
<html>
	<head>
  <link rel="stylesheet" href="../css_files/registration.css"></head>
	<body>

		<fieldset id="register_form" >
      <h1>Welcome to Registration.</h1>

			<form action="" method="post" >
				<table>
          <tr>
          <td style="text-align: right;"> Full Name: </td>
          <td style="text-align: left;"><input type="text" name="fullname" value=<?php echo $fullname; ?>><span><?php echo $error_fullname; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: right;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" value=<?php echo $username; ?>><span><?php echo $error_username; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: right;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" value=<?php echo $password; ?>><span><?php echo $error_password; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: right;"> Confirm Password:</td>
          <td style="text-align: left;"><input type="password" name="password_repeated" value=""><span><?php echo $error_confirm_password; ?></span></td>
          </tr>
          <tr>

          <td  style="text-align: right;" >Gender:</td>
          <td><input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span><?php echo $error_gender; ?></span>
          </td>
          </tr>

          <tr>
          <td style="text-align: right;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?> ><span><?php echo $error_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: right;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no"  placeholder="Number" size="9" value=<?php echo $phone_no; ?>> <span><?php echo $error_phone_no; ?></span>

          </td>
          </tr>
          <tr>
          <td style="text-align: right;">City: </td>
          <td style="text-align: left; ">
              <select name="city"  >
              <option disabled selected> Select City</option>
              <?php include_once "../php_files/city.php" ;?>
            </select> <span><?php echo $error_city; ?></span>
          </td>
          <tr>
          <td colspan="2" align="center">
          <input type="submit" name="register" value="Register">
          </td>
          </tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
