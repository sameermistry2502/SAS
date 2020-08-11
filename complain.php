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
    #combbrief{
      border-radius: 6px;
    }  
</style>
<br>
<br>
<br>
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>ONLINE-COMPLAINS</h2><br>
            <p>At Sangath, we strive very hard to make your experience very pleasant and satisfactory but still if you are not happy with our service, we would most willingly like to sort it as soon as possible. Leave your complaint here and we will look in to it.</p><br>
for Any Enquiry call : +91 7359865986 or Submit your Complains below.
          </div>
          <br>
          <h3><u style="color: green";><span style="color: green">REGISTER YOUR COMPLAINS</span></u></h3>
          <br>
          <div>
            <form action="cinsert.php" method="post" name="ComplainRegistration">
              <table width="1000px" height="1000px" align="center">
                <tr>
                  <td>Project Name <span style="color: red;">*</span></td>
                  <td><input type="radio" name="comProj" value="tarres" id=""/>Terras &nbsp;&nbsp;<input type="radio" name="comProj" value="Pure" id=""/>Pure &nbsp;&nbsp;<input type="radio" name="comProj" value="posh" id=""/>POSH&nbsp;&nbsp;<input type="radio" name="comProj" value="other" id=""/>Other</td>
                </tr>
                <tr>
                  <td>House Number <span style="color: red;">*</span></td>
                  <td><input type="number" name="comHno" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Date Of Possession<span style="color: red;">*</span></td>
                  <td>Customer Name<span style="color: red;">*</span></td>
                  
                </tr>
                <tr>
                  <td><input type="date" name="comDatePoss" class="com" size="22" required/></td>
                  <td><input type="text" name="comName" id="" class="com" required/></td>
                </tr>
                <tr>
                  <td>Customer Email<span style="color: red;">*</span></td>
                  <td>Customer Phone Number <span style="color: red;">*</span></td>
                
                </tr>
                <tr>
                  <td><input type="email" name="comEmail" class="com" size="22" required/></td>
                  <td><input type="number" name="comPhone" class="com" required/></td>
                </tr>
                <tr>
                  <td>Status Of the Customer <span style="color: red;">*</span></td>
                  <td><input type="radio" name="comStatus" value="owner" id=""/>Owner &nbsp;&nbsp;<input type="radio" name="comStatus" value="tenent" id=""/>Tenent</td>
                </tr>
                <tr>
                  <td>Type Of the Complain <span style="color: red;">*</span></td>
                  <td><input type="radio" name="comType" value="personal" id=""/>Personal &nbsp;&nbsp;<input type="radio" name="comType" value="common" id=""/>Common</td>
                </tr>
                <tr>
                  <td>Complain Details <span style="color: red;">*</span></td>
                  <td><input type="radio" name="comDetail" value="Plumbing" id=""/>Plumbing &nbsp;&nbsp;<input type="radio" name="comDetail" value="Electrical" id=""/>Electrical &nbsp;&nbsp; <input type="radio" name="comDetail" value="Mech" id="">Mechanical &nbsp;&nbsp; <input type="radio" name="comDetail" value="waterproofing" id="">Water Proofing  &nbsp;&nbsp;
                  <input type="radio" name="comDetail" value="other" id="">Other </td>
                </tr>
                <tr>
                  <td>Priority <span style="color: red;">*</span></td>
                  <td><input type="radio" name="comPriority" value="high" id=""/>High &nbsp;&nbsp;<input type="radio" name="comPriority" value="medium" id=""/>Medium &nbsp;&nbsp; <input type="radio" name="comPriority" value="low" id="">Low</td>
                </tr>
                <tr>
                  <td>Complain in Brief <span style="color: red;">*</span></td>
                  <td><textarea name="comDesc" id="combbrief" cols="50" rows="8"></textarea></td>
                </tr>
                <tr>
                  <td>Suitable Time For Solution <span style="color: red;">*</span></td>
                  <td>
                    <input type="radio" name="comTime" value="10 to 12 PM" id=""/>10 to 12 PM &nbsp;&nbsp;<input type="radio" name="comTime" value="10 to 10 AM" id=""/>10 to 12 AM <br> <input type="radio" name="comTime" value="1 to 3 PM" id="">1 to 3 PM &nbsp;&nbsp; <input type="radio" name="comTime" value="3 to 6 PM" id="">3 to 6 PM <br>
                  <input type="radio" name="comTime" value="other" id="">Other
                  </td>
                </tr>
                <tr>
                  <td>If Possible uplod IMAGE of Problem Complain <span style="color: red;">*</span></td>
                  <td><input type="file" name="comFile" class="com"></td>
                </tr>
                <tr>
                  <td><input type="reset" name="ComplainRegister1" value="Reset" class="button" /></td>
                  <td><input type="submit" name="ComplainRegister" value="ADD Them" class="button" /></td>
                </tr>
              </table>
            </form> 
          </div>
        </div>
      </div>
    </div>
</div>            
<?php include('footer.php'); ?>