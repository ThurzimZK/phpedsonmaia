<?php 
    session_start();
    session_unset();
    session_destroy();

   // echo "<p>Logout</p>"
   header('Location: index.php');
?>