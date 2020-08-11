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
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>TO BUY A PROPERTY</h2>
          </div>
          <br>
          <br>
          <div>
          	<form action="#" method="post">
          		<table width="1000px" height="1000px" align="center">
                <tr>
                  <td>How to  Known <span style="color: red;">*</span></td>
                  <td><select name="tgPWrent" class="select">
                    <option value="">-SELECT-</option>
                    <option value="website">WebSite</option>
                    <option value="friends">Friends</option>
                    <option value="company">Company</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Full Name <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgpWRunitno" class="com"></td>
                </tr>
                <tr>
                  <td>Requirement <span style="color: red;">*</span></td>
                  <td><select name="tgPWType" class="select">
                    <option value="">-SELECT-</option>
                    <option value="">1BHK</option>
                    <option value="">2BHK</option>
                    <option value="">3BHK</option>
                    <option value="">4BHK</option>
                    <option value="5BHK">5BHK</option>
                    <option value="Villa">Villa</option>
                    <option value="Banglow">Banglow</option>
                    <option value="other">Other</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Furniture <span style="color: red;">*</span></td>
                  <td><input type="radio" name="tgpWFUR" value="furnished" id="">Furnished &nbsp;&nbsp; <input type="radio" name="tgpFUR" value="semi-furnished" id="">Semi-Furnished &nbsp;&nbsp;<input type="radio" name="tgpFUR" value="basic" id="">Basic</td>
                </tr>
                <tr>
                  <td>Monthaly Rent Budjet <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgWPsqft" class="com" required/></td>
                </tr>
                <tr>
                  <td>Age <span style="color: red;">*</span></td>
                  <td><input type="number" name="tgPWsqEA" class="com" required/></td>
                </tr>
                <tr>
                  <td>Profession <span style="color: red;">*</span></td>
                  <td><select name=tWPoR"" class="select">
                    <option value="">-SELECT-</option>
                    <option value="business">Business</option>
                    <option value="GovermentService">Govt Service</option>
                    <option value="PrivateService">Private Service</option>
                    <option value="other">Other</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Company Name <span style="color: red;">*</span></td>
                  <td><input type="text" name="socityWrent" class="com" required/></td>
                </tr>
                <tr>
                  <td>Designation<span style="color: red;">*</span></td>
                  <td><input type="text" name="tSdesig" class="com" required/></td>
                </tr>
                <tr>
                  <td>Number Of Person in Family <span style="color: red;">*</span></td>
                  <td><input type="number" name="fullNO" class="com" required/></td>
                </tr>
                <tr>
                  <td>Any Specific Requirement <span style="color: red;">*</span></td>
                  <td><textarea name="asReq" id="combbrief" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td>Contact Number <span style="color: red;">*</span></td>
                  <td><input type="number" name="tgPcontact" class="com" required/></td>
                </tr>
                <tr>
                  <td>Email-ID <span style="color: red;">*</span></td>
                  <td><input type="email" name="tgPRemail" class="com" required/></td>
                </tr>
          			<tr>
                  <td></td>
          				<td><input type="submit" name="MemberRegister" value="Submit" class="button" /></td>
          			</tr>
          		</table>

          	</form>
          </div>
        </div>
      </div>
    </div>
</div>            
<?php include('footer.php'); ?>