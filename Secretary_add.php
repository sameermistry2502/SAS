<?php 
              session_start();
?>
<br>
<br>
<br>
<br>
          <table border="1" align="center" style="border-color: #00ccff">
            <tr>
              <td>          <h3 style="color: #00ccff";><?php
                     if($_SESSION['txtEmail']==true)
                     {
                       echo "Welcome "."  ".$_SESSION['txtEmail'];
                     }
                     else
                     {
                      header('location:alogin.php');
                     }
               ?>      
          </h3></td>
           

             <td align="center"><h3><a href="alogout.php">Logout</a></h3></td>
            </tr>
          </table> 
<?php include('header.php'); ?>
<title>Secretary Registration</title>
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
<br><br>
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3";>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Secretary-Registration</h2>
          </div>
          <br>
          <br>
          <div>
          	<form action="sinsert.php" method="post" name="SecretaryRegistration">
          		<table width="1000px" height="1500px" align="center">
          			<tr>
          				<td>First Name <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtFname" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Middle Name <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtMname" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Last Name <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtLname" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Email-ID <span style="color: red;">*</span></td>
          				<td><input type="email" name="txtSEmail" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Contact-No <span style="color: red;">*</span></td>
          				<td><input type="number" name="txtSNumber" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Gender <span style="color: red;">*</span></td>
          				<td><input type="radio" name="txtSGender" value="male" id="" size="22" required/>Male <br><input type="radio" name="txtSGender" value="female" id="" size="22" required/>Female
          				</td>
          			</tr>
                <tr>
                  <td>Project<span style="color: red;">*</span></td>
                  <td><input type="radio" name="txtProject" value="tarres" id=""/>Terras &nbsp;&nbsp;<input type="radio" name="txtProject" value="Pure" id=""/>Pure &nbsp;&nbsp;<input type="radio" name="txtProject" value="posh" id=""/>POSH&nbsp;&nbsp;<input type="radio" name="txtProject" value="other" id=""/>Other</td>
                </tr>
                <tr> 
                  <td>Select-Group<span style="color: red;">*</span></td>
                  <td>
                    <select name="txtsGroup" class="select">
                     <option value="">-SELECT-</option>
                     <option value="Sangath-IPL">Sangath-IPL</option>
                     <option value="Shree-Balagi">Shree-Balagi-Group</option>
                     <option value="other">Other</option>
                    </select>
                  </td>
                </tr>
                
          			<tr>
          				<td>House No <span style="color: red;">*</span></td>
          				<td><input type="number" name="txtHnumber" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Block No <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtBlock" class="com" size="22" required/></td>
          			</tr>
                <tr>
                  <td>Current Address <span style="color: red;">*</span></td>
                  <td><textarea name="currsAdd" id="#combbrief" cols="35" rows="6" required/></textarea></td>
                </tr>
          			<tr>
          				<td>Permanant Address <span style="color: red;">*</span></td>
          				<td><textarea name="persAdd" id="#combbrief" cols="35" rows="6" required/></textarea></td>
          			</tr>
          			<tr>
          				<td>Profession <span style="color: red;">*</span></td>
          				<td><select name="txtProfesstion" class="select">
          					<option value="">-SELECT-</option>
          					<option value="business">Business</option>
          					<option value="GovermentService">Govt Service</option>
          					<option value="PrivateService">Private Service</option>
          					<option value="other">Other</option>
          				</select></td>
          			</tr>
          			<tr>
          				<td>Parking Number <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtPnumber" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Project type <span style="color: red;">*</span></td>
          				<td><input type="radio" name="ProjectType" value="vila" id="" size="22" required/>Vila &nbsp;&nbsp;<input type="radio" name="ProjectType" value="banglow" id="" size="22" required/>Banglow &nbsp;&nbsp; <input type="radio" name="ProjectType" value="flat" id="" size="22" required/>Flat <br>
                        <input type="radio" name="ProjectType" value="Other" id="" size="22" required/>Other &nbsp;&nbsp;&nbsp;<input type="text" name="ProjectType"id="" size="22" required/>
          				</td>
          			</tr>
          			<tr>
          				<td>If flat then select <span style="color: red;"></span></td>
          				<td><select name="txtIfFlat" class="select">
          					<option value="">-SELECT-</option>
          					<option value="1">1BHK</option>
          					<option value="2">2BHK</option>
          					<option value="3">3BHK</option>
          					<option value="4">4BHK</option>
          					<option value="5">5BHK</option>
          					<option value="6">6BHK</option>
          					<option value="7">7BHK</option>
          					<option value="8">8BHK</option>
          					<option value="9">More</option>
          				</select></td>
          			</tr>
          			<tr>
          				<td>City <span style="color: red;">*</span></td>
          				<td><select name="txtsCity" class="select">
          					<option value="">-SELECT-</option>
                    <option value="Ahemedabad">Ahemedabad</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Haydrabad">Haydrabad</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Banglore">Banglore</option>
          				</select></td>
          			</tr>
          			<tr>
          				<td>State <span style="color: red;" >*</span></td>
          				<td><select name="txtsState" class="select">
          					<option value="">-SELECT-</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharastra">Maharastra</option>
                    <option value="Andhra-Pradesh">Andhra-Pradesh</option>
                    <option value="Karnataka">Karnataka</option>

          				</select></td>
          			</tr>
                <tr>
                  <td>Password<span style="color: red;" >*</span></td>
                  <td><input type="password" name="txtPassword" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Confirm-Password<span style="color: red;">*</span></td>
                  <td><input type="password" name="txtcPassword" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Profile <span style="color: red";>*</span></td>
                  <td><input type="file" name="txtsProfile" id=""></td>
                </tr>
          			<tr>
          				<td><input type="reset" name="SecretaryRegister1" value="Reset" class="button" /></td>
          				<td><input type="submit" name="SecretaryRegister" value="ADD Them" class="button"/></td>
          			</tr>
          		</table>
          	</form>
          </div>
        </div>
      </div>
    </div>
</div>            
<?php include('footer.php'); ?>