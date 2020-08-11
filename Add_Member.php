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
            <h2>Add Member</h2>
          </div>
          <br>
          <br>
          <div>
          	<form action="minsert.php" method="post" name="MemberRegistration">
          		<table width="1000px" height="1100px" align="center">
          			<tr>
          				<td>First Name <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtMFname" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Middle Name <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtMMname" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Last Name <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtMLname" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Email-ID <span style="color: red;">*</span></td>
          				<td><input type="txtMemail" name="txtEmail" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Contact-No <span style="color: red;">*</span></td>
          				<td><input type="number" name="txtMcontact" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Gender <span style="color: red;">*</span></td>
          				<td><input type="radio" name="txtMGender" value="male" id="" size="22" required/>Male <br><input type="radio" name="txtMGender" value="female" id="" size="22" required/>Female
          				</td>
          			</tr>
          			<tr>
          				<td>House No <span style="color: red;">*</span></td>
          				<td><input type="number" name="txtMhouseno" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Block No <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtMBnumber" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Address <span style="color: red;">*</span></td>
          				<td><textarea name="txtAddress" id="#combbrief" cols="35" rows="5" required/></textarea></td>
          			</tr>
          			<tr>
          				<td>Profession <span style="color: red;">*</span></td>
          				<td><select name="txtMProfession" class="select">
          					<option value="">-SELECT-</option>
          					<option value="business">Business</option>
          					<option value="GovermentService">Govt Service</option>
          					<option value="PrivateService">Private Service</option>
          					<option value="other">Other</option>
          				</select></td>
          			</tr>
          			<tr>
          				<td>Parking Number <span style="color: red;">*</span></td>
          				<td><input type="text" name="txtMPnumber" class="com" size="22" required/></td>
          			</tr>
          			<tr>
          				<td>Project type <span style="color: red;">*</span></td>
          				<td><input type="radio" name="ProjectType" value="vila" id="" size="22" required/>Vila &nbsp;&nbsp;<input type="radio" name="ProjectType" value="banglow" id="" size="22" required/>Banglow &nbsp;&nbsp; <input type="radio" name="ProjectType" value="flat" id="" size="22" required/>Flat <br>
                        <input type="radio" name="ProjectType" value="Other" id="" size="22" required/>Other &nbsp;&nbsp;&nbsp;<input type="text" name="ProjectType"id="" size="22" required/>
          				</td>
          			</tr>
          			<tr>
          				<td>If flat then select <span style="color: red;">*</span></td>
          				<td><select name="txtMflat" class="select">
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
                    <option value="10">NA</option>
          				</select></td>
          			</tr>
                <tr>
                  <td>Project Name<span style="color: red;">*</span></td>
                  <td><input type="text" name="txtProjectname" class="com" size="22" required/></td>
                </tr>
          			<tr>
          				<td>City <span style="color: red;">*</span></td>
          				<td><select name="txtMcity" class="select">
          					<option value="">-SELECT-</option>
          					<option value="Ahemedabad">Ahemedabad</option>
          					<option value="Surat">Surat</option>
          					<option value="Mumbai">Mumbai</option>
          					<option value="Chennai">Chennai</option>
                    <option value="Delhi">Delhi</option>
          				</select></td>
          			</tr>
          			<tr>
          				<td>State <span style="color: red;" >*</span></td>
          				<td><select name="txtMstate" class="select">
          					<option value="">-SELECT-</option>
          					<option value="Gujarat">Gujarat</option>
          					<option value="Maharastra">Maharastra</option>
          					<option value="Karnataka">Karnataka</option>
          					<option value="Tamilnadu">Tamilnadu</option>
          				</select></td>
          			</tr>
                <tr>
                  <td>Password<span style="color: red;">*</span></td>
                  <td><input type="password" name="txtMpass" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Confirm Password<span style="color: red;">*</span></td>
                  <td><input type="password" name="txtMcpass" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Profile<span style="color: red";>*</span></td>
                  <td><input type="file" name="txtMprofile" id=""/></td>
                </tr>
                <tr>
                  <td><input type="reset" name="MemberRegister1" value="Reset" class="button" /></td>
                  <td><input type="submit" name="MemberRegister" value="ADD Them" class="button" /></td>
                </tr>
          		</table>
          	</form>
          </div>
        </div>
      </div>
    </div>
</div>            
<?php include('footer.php'); ?>