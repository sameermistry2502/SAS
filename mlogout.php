 <?php
 session_start();
 session_destroy();
 header('location:Member_login.php');
?>