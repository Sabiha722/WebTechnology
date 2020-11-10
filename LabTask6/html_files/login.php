<?php include_once "../php_files/login.php" ;?>
<html>
    <head>
        <title>Login</title>
          <link rel="stylesheet" href="../css_files/login.css"></head>
    </head>

    <body >
      <fieldset id="login_form">

        <h1>Login</h1>
        <form action="" method="post" >
        <table>
            <tr>
                <td> Username</td>

                <td><input type="text" placeholder="Username here" name="username"></td>
            </tr>
            <tr>
                <td> Password</td>

                <td><input type="password" placeholder="Password here" name="password"></td>
            </tr>
            <tr>

             <td colspan="2" align="center">   <input type="submit" value="Login" name="login"> </td>
         </tr>

        </table>

        </form>
              </fieldset>
    </body>
</html>
