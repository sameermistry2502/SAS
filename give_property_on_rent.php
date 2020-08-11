<?php include('header.php'); ?>
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
<div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>TO GIVE PROPERTY ON RENT</h2>
            <br>
            <br>
            <h1 style="color: green">
                <?php 
                   if(isset($_POST['add']))
                   {
                           $project=$_POST['tgPrent'];
                           $unitno=$_POST['tgpRunitno'];
                           $type=$_POST['tgPType'];
                           $furnished=$_POST['tgpFUR'];
                           $sinsf=$_POST['tgPsqft'];
                           $examount=$_POST['tgPsqEA'];
                           $floorno=$_POST['tgPfloor'];
                           $maintenance=$_POST['socityMM'];
                           $photos=$_POST['uploadPP'];
                           $oname=$_POST['fullNO'];
                           $cno=$_POST['tgPcontact'];
                           $email=$_POST['tgPRemail'];

                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `rent_for_give`(`rfg_project`, `rfg_unitno`, `rfg_type`, `rfg_furnished`, `rfg_sfsize`, `rfg_amount`, `rfg_floorno`, `rfg_maintenance`, `rfg_photos`, `rfg_fullname_owner`, `rfg_phoneno`, `rfg_emailid`) VALUES ('$project','$unitno','$type','$furnished','$sinsf','$examount','$floorno','$maintenance','$photos','$oname','$cno','$email')";
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          {
                            echo "Your Property is Registered for RENT.........!";
                          }
                          else
                          {
                            echo "Error! In the Insertion";
                          }
                    }        
                    ?> 
            </h1>
          </div>
          <br>
          <br>
          <div>
          	<form action="<?php $_PHP_SELF ?>" method="post" name="add">
          		<table width="1000px" height="1000px" align="center">
                <tr>
                  <td>Select Project <span style="color: red;">*</span></td>
                  <td><select name="tgPrent" class="select">
                    <option value="">-SELECT-</option>
                    <option value="posh">Posh</option>
                    <option value="skyz">Skyz</option>
                    <option value="pure">Pure</option>
                    <option value="Terres">Terres</option>
                    <option value="Saundarya Green">Saundarya Green</option>
                    <option value="Other">Other</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Unit No <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgpRunitno" class="com"></td>
                </tr>
                <tr>
                  <td>Type <span style="color: red;">*</span></td>
                  <td><select name="tgPType" class="select">
                    <option value="">-SELECT-</option>
                    <option value="1BHK">1BHK</option>
                    <option value="2BHK">2BHK</option>
                    <option value="3BHK">3BHK</option>
                    <option value="4BHK">4BHK</option>
                    <option value="5BHK">5BHK</option>
                    <option value="Villa">Villa</option>
                    <option value="Banglow">Banglow</option>
                    <option value="other">Other</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Furniture <span style="color: red;">*</span></td>
                  <td><input type="radio" name="tgpFUR" value="furnished" id="">Furnished &nbsp;&nbsp; <input type="radio" name="tgpFUR" value="semi-furnished" id="">Semi-Furnished &nbsp;&nbsp;<input type="radio" name="tgpFUR" value="basic" id="">Basic</td>
                </tr>
                <tr>
                  <td>Size in Sq ft <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgPsqft" class="com" required/></td>
                </tr>
                <tr>
                  <td>Expected Amount <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgPsqEA" class="com" required/></td>
                </tr>
                <tr>
                  <td>Floor No <span style="color: red;">*</span></td>
                  <td><input type="number" name="tgPfloor" class="com" required/></td>
                </tr>
                <tr>
                  <td>Society Monthaly Maintainance <span style="color: red;">*</span></td>
                  <td><input type="text" name="socityMM" class="com" required/></td>
                </tr>
                <tr>
                  <td>Upload Property Photo <span style="color: red;">*</span></td>
                  <td><input type="file" name="uploadPP" class="com" required/></td>
                </tr>
                <tr>
                  <td>Full Name Of Owner <span style="color: red;">*</span></td>
                  <td><input type="text" name="fullNO" class="com" required/></td>
                </tr>
                <tr>
                  <td>Contact Number <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgPcontact" class="com" required/></td>
                </tr>
                <tr>
                  <td>Email-ID <span style="color: red;">*</span></td>
                  <td><input type="email" name="tgPRemail" class="com" required/></td>
                </tr>
          			<tr>
                  <td><input type="reset" name="RentForGive1" value="Reset" class="button" /></td>
          				<td><input type="submit" name="add" value="Submit" class="button" /></td>
          			</tr>
          		</table>
          	</form>
          </div>
        </div>
      </div>
    </div>
</div>           
           
<?php include('footer.php'); ?>