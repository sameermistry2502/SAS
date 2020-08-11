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
</style>
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>TO GIVE PROPERTY ON SELL</h2>
          </div>
          <br>
          <br>
          <div>
          	<form action="#" method="post">
          		<table width="1000px" height="1000px" align="center">
                <tr>
                  <td>Select Project <span style="color: red;">*</span></td>
                  <td><input type="radio" name="comProj" value="tarres" id=""/>Terras &nbsp;&nbsp;<input type="radio" name="comProj" value="Pure" id=""/>Pure &nbsp;&nbsp;<input type="radio" name="comProj" value="posh" id=""/>POSH&nbsp;&nbsp;<input type="radio" name="comProj" value="other" id=""/>Other</td>
                </tr>

                <tr>
                  <td>Residential Type <span style="color: red;">*</span></td>
                  <td><select name="tgPType" class="select">
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
                  <td><input type="radio" name="tgpFUR" value="furnished" id="">Furnished &nbsp;&nbsp; <input type="radio" name="tgpFUR" value="semi-furnished" id="">Semi-Furnished &nbsp;&nbsp;<input type="radio" name="tgpFUR" value="basic" id="">Basic</td>
                </tr>
                <tr>
                  <td>Size in Sq ft <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgPsqft" class="com" required/></td>
                </tr>
                <tr>
                  <td>House Number <span style="color: red;">*</span></td>
                  <td><input type="number" name="txtNum" class="com" required/></td>
                </tr>
                <tr>
                  <td>Block Number <span style="color: red;">*</span></td>
                  <td><input type="number" name="txtNum" class="com" required></td>
                </tr>
                <tr>
                  <td>Amount <span style="color: red;">*</span></td>
                  <td><input type="text" name="tgPsqEA"  class="com" required/></td>
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
                  <td>Full Name <span style="color: red;">*</span></td>
                  <td><input type="text" name="fullNO" class="com" required/></td>
                </tr>
                <tr>
                  <td>Email-ID <span style="color: red;">*</span></td>
                  <td><input type="email" name="tgPRemail" class="com" required/></td>
                </tr>
                <tr>
                  <td>Contact Number <span style="color: red;">*</span></td>
                  <td><input type="number" name="tgPcontact" class="com" required/></td>
                </tr>
                <tr>
                  <td>Floor No <span style="color: red;">*</span></td>
                  <td><input type="number" name="tgPfloor" class="com" required/></td>
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