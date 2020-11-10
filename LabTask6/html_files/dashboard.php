<!DOCTYPE html>

<?php
 session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome  <?php echo $_SESSION["username"]; ?></h1>

  </body>
</html>
