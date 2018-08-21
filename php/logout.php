<?php
   session_start();
   
   if(session_destroy()) {
<<<<<<< HEAD
      header("Location: ../loginPage.php");
=======
      header("Location: ../login.html");
>>>>>>> 4a80673d9bcceeea10d19c460e55488f50da9730
   }
?>