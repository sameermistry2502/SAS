<?php include('header.php'); ?>
<br>
<style>
      .button{
      background: transparent;
        border: none;
        outline: none;
        color: #fff;
        background: #00cc00;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 6px; 
        height: 40px;
        width: 200px;
        font-size: 25px;
    }
    .com{
      border-radius: 6px;
      height: 40px;
      width: 300px;
    }
    .select{
      border-radius: 6px;
      width: 300px;
      height: 40px;
    }
    #combbrief{
      border-radius: 6px;
    }  
</style>
<br>
<br>
    <div id="services" class="services-area area-padding" style="background-color: #c2c2a3;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>CONTACT-FORM</h2><br> <br><br>
                    <h1 style="color: green">  
                     <?php 
                          if(isset($_POST['add'])){
                           $name=$_POST['txtName'];
                           $email=$_POST['txtEmail'];
                           $subject=$_POST['txtSubject'];
                           $msg=$_POST['txtMessage'];

                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `contact_us`(`con_name`, `con_email`, `con_sub`, `com_msg`) VALUES ('$name','$email','$subject','$msg')";
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          {
                            echo "contact details added"." | "."<a href=''>Back</a>";
                          }
                          else
                          {
                            echo "Error! In the Insertion";
                          }  
                        }
                        ?>
                      </h1><br>
            <form action="#" method="post" name="Notice-Insert">
              <table width="1000px" height="500px" align="center" >
                <tr>
                  <td>Name<span style="color: red;">*</span></td>
                  <td><input type="text" name="txtName" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Email<span style="color: red;">*</span></td>
                  <td><input type="email" name="txtEmail" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Subject<span style="color: red;">*</span></td>
                  <td><input type="text" name="txtSubject" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Message<span style="color: red;" >*</span></td>
                  <td><textarea name="txtMessage" id="combbrief" cols="40" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td><input type="reset" name="add1" value="Reset" class="button" /></td>
                  <td><input type="submit" name="add" value="ADD Them" class="button" /></td>
                </tr>
              </table>
            </form>
          <!-- End Left contact -->
         </div>
         </div>
         </div>
         </div>
         </div> 
<?php include('footer.php') ?>          