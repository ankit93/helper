<?php
require_once '../classes/GMclass.php';
session_start();
$objgm =new GM();
$arr3= $objgm->getTestimonialRecordById($_GET['id']);
foreach($arr3 as $arr2)
{
	$testimonialDescription = stripcslashes($arr2['TestimonialDescription']);
	$personPosition 		= stripcslashes($arr2['PersonPosition']);
	$personName 			= stripcslashes($arr2['PersonName']);
	$createdDate			= stripcslashes($arr2['CreatedDate']);	
}
if(isset($_POST['submit']))
{
  $testimonialDescription=$_POST['txtDescription'];
  $personPosition = $_POST['txtPosition'];
  $personName=$_POST['txtName'];
  $createdDate=$_POST['txtDate'];
  $testimonialId=$_GET['id'];
  $arr = $objgm->updateTestimonialById($testimonialDescription,$personPosition,$personName,$createdDate,$testimonialId);
   if ($arr == "true") 
   {
    $msg = "your record has been Updated successfully.";    
   }	
 }  
 if (isset($_POST['btnCancel']))
  {
    $testimonialDescription = "";
    $personPosition = "";
    $personName = "";
    $createdDate = "";    
}
include('header2.php'); 
?>
<script src="js/date.js" type="text/javascript"></script>
<script src="js/jquery.datePicker.js" type="text/javascript"></script>
<link href="css/datePicker.css" rel="stylesheet" type="text/css" />
<link href="css/calender.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8">
    $j(function () {
        $j('.date-pick').datePicker({ clickInput: true })
    });
		</script>

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
        <h3> <span id="lblTitle">Edit Testimonial Information</span> </h3>
      </div>
      <div style="float:right;">
      <a href="testimonial.php"><img src="./images/backButton.gif" height="75" width="95" style="border:0px none;"/> </a> 
	  </div> 
      <div class="innerContent">  
      <div style="margin-top:30px;"></div>       
	          <form  id="frmgroup" action="" method="post" enctype="multipart/form-data">	         
          <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="width:75%;">
            <thead>
           <tr style="width:564px;padding:3px;font-weight:bold;height: 28px;">
              <tr>
			  <td> Testimonial Description</td>
			  <td><textarea cols="4" rows="10" id="txtDescription" name="txtDescription" required="required">
	<?php echo isset($testimonialDescription) ? $testimonialDescription : '' ?>
			  </textarea></td>
			  </tr>
			  <tr>
			  <td>Person Position </td>
			  <td><input type="text" id="txtPosition" name="txtPosition" required="required"  value="<?php echo isset($personPosition) ? $personPosition : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>Person Name</td>
			  <td><input type="text" id="txtName" name="txtName" required="required" value = "<?php echo isset($personName) ? $personName : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>Created Date</td>
			  <td><input type="text" id="txtDate" name="txtDate"  class="date-pick" required="required" value="<?php echo isset($createdDate) ? $createdDate : '' ?>"/></td>
			  </tr>
			    <tr>
              <td></td>
              <td>   <input type="submit" id="submit" name="submit" value="Update"/>       
			          <input type="submit" id="btnCancel" name="btnCancel" value="Cancel" /></td>      	  </tr>
            
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
            </span> 
			</div>
        </div>
        <br />
      </div>
      <!--end of #box-3-->
    </div>
    <hr />
  </div>
  <!-- end of #leftBox -->
 </div>
  <!-- end of #sidebar -->
</div>
<!-- end of #content -->
</div>
<!-- end of #container -->
<?php include('footer.php'); ?>