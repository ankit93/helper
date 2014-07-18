<?php
require_once '../classes/GMclass.php';
$objgm =new GM();
$arrContact= $objgm->getContactRecordById($_GET['id']);
foreach($arrContact as $Contact)
{
	$id = stripcslashes($Contact['ContactId']);
	$name = stripcslashes($Contact['ContactName']);
	$email = stripcslashes($Contact['ContactEmail']);
	$telephone = stripcslashes($Contact['ContactTelephone']);
	$country = stripcslashes($Contact['ContactCountry']);
	$subject = stripcslashes($Contact['ContactSubject']);
	$message = stripcslashes($Contact['ContactMessage']);
}					
if(isset($_POST['submit']))
{
  $name=$_POST['txtName'];
  $email = $_POST['txtEmail'];
  $telephone=$_POST['txttelephone'];
  $country=$_POST['cmbRCountry'];
  $subject=$_POST['txtSubject'];
  $message=$_POST['txtMessage'];
 $msg = $objgm->updateContactbyId($name,$email,$telephone,$country,$subject,$message,$id);
 if ($msg == "true") 
  {
  	$msg = "Record has been updated successfuly.";    
   }   
}
if(isset($_POST['btnCancel']))
{
$name="";
$email="";
$telephone="";
$country="";
$subject="";	
$message="";
}

include('header2.php'); ?>

<script type="text/javascript">
        $j(document).ready(function() {
			$j.tools.validator.fn("[data-equals]", "Value not equal with the $1 field", function(input) {
				var name = input.attr("data-equals"),
					 field = this.getInputs().filter("[name=" + name + "]"); 
				return input.val() == field.val() ? true : [name]; 
			});	
			
			$j("#frmgroup").validator(); 
		    
        }); 
   $j("#lnkHome").attr("class","");
	$j("#lnkPortfolio").attr("class","");
	$j("#lnkResource").attr("class","");
	$j("#lnkCompany").attr("class","");
	$j("#lnkTestimonial").attr("class","selected");
	$j("#lnkReachUs").attr("class","");	         
</script>
<div id="content">
  <div id="leftBox">
    <div id="pageIntro">
      <h2> Welcome to VictoryNet Technology </h2>
      <p></p>
    </div>
    <div class="contentBox">
      <div class="contentBoxTop">
        <h3> <span id="lblTitle">Edit Contact Information </span> </h3>
      </div>
      <div class="innerContent">  
      <div style="margin-top:10px;"></div>
	          <form  name="form2" id="form2" method="post" onSubmit ="return check();">
	          <a href="edit-contact.php"><img src="./images/backButton.gif" height="75" width="95" style="border:0px none; float:right;"/> </a>
          <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="width:75%;">
            <thead>      
			  
           <tr style="width:564px;padding:3px;font-weight:bold;height: 28px;">
              <tr>
              <td>
              Name
              </td>
              <td><input type="text" id="txtName" name="txtName" required="required" 
			   value="<?php echo isset($name) ? $name : '' ?>"/></td>
			  </tr>
			  <tr>
		<td> Your Email</td>
		<td><input type="text" id="txtEmail" name="txtEmail" required="required" 
			   value="<?php echo isset($email) ? $email : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>Telephone</td>
			  <td><input type="text" id="txttelephone" name="txttelephone" required="required"
			    value="<?php echo isset($telephone) ? $telephone : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>country</td>
 <td>    <select id="cmbRCountry" name="cmbRCountry" >
<?php foreach($arrContact as $Contact)
{
	
	?>

      <option value="<?php echo $Contact['ContactId'];?>" <?php echo$Contact['ContactId']==$_GET['id'] ? 'selected' : ''?>  >
 <?php

    echo $Contact['ContactCountry'];

?>  </option>	
			


	 <?php

}

?>	
    </select></td>
			  </tr>
			  <tr>
			  <td>Subject</td>
			  <td><input type="text" id="txtSubject" name="txtSubject" required="required"
			  value="<?php echo isset($subject) ? $subject : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>Message</td>
	<td><textarea cols="4" rows="10" id="txtMessage" name="txtMessage"	 required="required">
	  <?php echo isset($message) ? $message : '' ?>
			  </textarea></td>
			  </tr> 
			    <tr>
              <td></td>
              <td><input type="submit" id="submit" name="submit" value="Update"/>   
              <input type="submit" id="btnCancel" name="btnCancel" value="Cancel" /></td> 
						   
			  </tr>
			  
          </table>
        </form>
        <?php if(isset($msg) and $msg!="")
						{?>
        <script type='text/javascript'>
							$j(document).ready(function(){
								      $j.fn.colorbox({width:'50%', inline:true, href:'#msgBox'});
							});
						</script>
        <?php }?>
        <div style='display:none'>
          <div id='msgBox' style='padding:10px; background:#fff;'> <span style="display:block;text-align:center;">
            <?php  echo $msg;?>
            </span> </div>
        </div>
        <br />
      </div>      
    </div>
    <hr />
  </div>
 
</div>
<!-- end of #content -->
<br class="clearFix" />
</div>

<!-- end of #container -->
<?php include('footer.php'); ?>