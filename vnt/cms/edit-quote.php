<?php
require_once '../classes/GMclass.php';
$objgm =new GM();;
$arr3= $objgm->getQuoteRecordById($_GET['id']);
foreach($arr3 as $arr2)
{
	$id = stripcslashes($arr2['QuoteId']);
	$name = stripcslashes($arr2['QuoteName']);
	$email = stripcslashes($arr2['QuoteEmail']);
	$company = stripcslashes($arr2['QuoteCompany']);
	$description = stripcslashes($arr2['QuoteDescription']);
}					
if(isset($_POST['submit']))
{
  $name=$_POST['txtName'];
  $email = $_POST['txtEmail'];
  $company=$_POST['txtcompany'];
  $description=$_POST['txtMessage'];
 $msg = $objgm->updateQuoteRecordById($name,$email,$company,$description,$id);
 if ($msg  == "true") 
 {
  	$msg = "Record has been updated successfuly.";  
 }   
}					
 if (isset($_POST['btnSubmit']))
  {
    $name = "";
    $email = "";
    $company = "";
    $description = "";   
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
        <h3> <span id="lblTitle">Edit Quote Information </span> </h3>
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
		<td>  Email</td>
		<td><input type="text" id="txtEmail" name="txtEmail" required="required" 
			   value="<?php echo isset($email) ? $email : '' ?>"/></td>
			  </tr>
		
			  <tr>
			  <td>Description</td>
	<td><textarea cols="4" rows="10" id="txtMessage" name="txtMessage"	 required="required">
	  <?php echo isset($description) ? $description : '' ?>
			  </textarea></td>
			  </tr> 
			    <tr>
              <td></td>
              <td><input type="submit" id="submit" name="submit" value="Update"/>   
              <input type="submit" id="btnSubmit" name="btnSubmit" value="Cancel" /></td>  
						   
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