<?php
   session_start();
   unset($_SESSION["fpassword"]);
   unset($_SESSION["spassword"]);
   session_destroy();

   //echo 'You have cleaned session';
   header("Location: ../../index.php");
?>