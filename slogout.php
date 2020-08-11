 <?php
 session_start();
 session_destroy();
 header('location:secretary_login.php');
?>