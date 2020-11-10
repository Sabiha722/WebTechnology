<?php
 session_start();
 if (!isset($_SESSION["logged_in"] ))
 {

    header("Location: ../html_files/login.php");

 }
 if ($_SESSION["logged_in"]!=true && isset($_SESSION["logged_in"] ))
 {
   header("Location: ../html_files/login.php");
 }


?>
