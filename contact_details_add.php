
                      <html lang="en">
                      <head>
                        <meta charset="UTF-8">
                        <title>Document</title>
                      
                      <body>
                      <h1 style="color: green">  
                      <?php 

                           $name=$_POST['txtName'];
                           $email=$_POST['txtEmail'];
                           $subject=$_POST['txtSubject'];
                           $msg=$_POST['txtMessage'];

                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `contact_us`(`con_name`, `con_email`, `con_sub`, `com_msg`) VALUES ('$name','$email','$subject','$msg')";
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          {
                            echo "contact details added";
                          }
                          else
                          {
                            echo "Error! In the Insertion";
                          }  
                        ?>
                      </h1>