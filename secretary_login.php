<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('sas_db');
if(isset($_REQUEST['login']))
{
    $email=$_REQUEST['txtEmail'];
    $pass=$_REQUEST['txtPassword'];
    $qry=mysql_query("SELECT * FROM `secretary` WHERE semail='$email' && password='$pass'");
    $row=mysql_num_rows($qry);
    if ($row==true) 
    {   
        $_SESSION['txtEmail']=$email;
        header('location:sec_dashboard.php');
    }
    else
   {
    echo "! Invalid Email and Password";
   }
 }  
?>
<?php //include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style> 
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: url("img/login.jpg");
      background-size: cover;
    }
    .box{
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        padding: 40px;
        background: rgba(0,0,0,.8);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
        border-radius: 10px;
    }
    .box h4{
        margin: 0 0 30px;
        padding: 0;
        color: white;
        text-align: center;
    }
    .box .inputbox{
        position: relative;
    }
    .box .inputbox input{
        width: 100px;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        letter-spacing: 1px;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .box .inputbox label{
         position: absolute;
         top: 0;
         left: 0;
         padding: 10px 0;
         font-size: 16px;
         color: #fff;
         pointer-events: none;
         transition: .5s;
    }
    .box .inputbox input:focus ~ label, .box .inputbox input:valid ~ label{
        top: -10px;
        left: 0;
        color: #03a9f4;
        font-size: 12px;

    }
    .box input[type="submit"]{
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        background: #03a9f4;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px; 
    }
   </style>
   <title>SECRETARY-LOGIN</title>
</head>
<body>
    <div class="box">

        <h4>SECRATARY LOGIN</h4>

        <form action="" method="post" name="login">
            <div class="inputbox" align="center">
                <input type="text" name="txtEmail" id="" required="">
                <label>Email-ID</label>
            </div>
            <div class="inputbox" align="center">
                <input type="password" name="txtPassword" id="" required="">
                <label>Password</label>
            </div>
            <center><input type="submit" value="LOGIN" name="login"></center>
            <br>
            <br>
            <div>
                <a href="forgot_pass.php" style="color: #fff; text-decoration: none;">Forgot Password?</a>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;
                <a href="index.php" style="color: #fff; text-decoration: none;">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>

