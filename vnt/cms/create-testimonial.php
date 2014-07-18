<?php
require_once '../classes/GMclass.php';
session_start();
$objgm =new GM();
if(isset($_POST['submit']))
{
  $testimonialDescription=$_POST['txtDescription'];
  $personPosition = $_POST['txtPosition'];
  $personName=$_POST['txtName'];
  $createdDate=$_POST['txtDate'];
  $arr = $objgm->insertTestimonial($testimonialDescription, $personPosition, $personName,$createdDate);
   if ($arr == "true") 
   {
    $msg = " Record has been inserted successfully.";
   }	
 } 
  
 if (isset($_POST['reset'])) {
    $testimonialDescription = "";
    $personPosition = "";
    $personName = "";
    $createdDate = "";
}

include('header2.php'); 

?>
<script type="text/javascript">
        $j(document).ready(function() {
			$j.tools.validator.fn("[data-equals]", "Value not equal with the $1 field", function(input) {
				var name = input.attr("data-equals"),
					 field = this.getInputs().filter("[name=" + name + "]"); 
				return input.val() == field.val() ? true : [name]; 
			});	
			
			$j("#frmgroup").validator(); 
		    
        });          
</script>

<script type="text/javascript">
	$j("#lnkHome").attr("class","");
	$j("#lnkRaceInfo").attr("class","");
	$j("#lnkRegistration").attr("class","");
	$j("#lnkResults").attr("class","");
	$j("#lnkVolunteer").attr("class","");
	$j("#lnkContact").attr("class","");
	$j("#lnkSponsors").attr("class","");
	$j("#lnkCategory").attr("class","");
	$j("#lnkGroup").attr("class","");
	$j("#lnkProfile").attr("class","selected");
	
</script>
<div id="content">
  <div id="leftBox">
    <div id="pageIntro">
      <h2> Welcome to VictoryNet Technology </h2>
      <p></p>
    </div>
    <div class="contentBox">
      <div class="contentBoxTop">
        <h3> <span id="lblTitle">Manage Testimonial </span> </h3>
      </div>
      <div style="float:right;">
      <a href="testimonial.php"><img src="./images/backButton.gif" height="75" width="95" style="border:0px none;"/> </a> 
	  </div> 
      <div class="innerContent">	 
        </div>
	          <form  id="frmgroup" action="" method="post" enctype="multipart/form-data">	          
          <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="width:75%;">
            <thead>
           <tr style="width:564px;padding:3px;font-weight:bold;height: 28px;">
              <tr>
			  <td> Testimonial Description</td>
			  <td><textarea cols="4" rows="10" id="txtDescription" name="txtDescription" required="required"></textarea></td>
			  </tr>
			  <tr>
			  <td>Person Position </td>
			  <td><input type="text" id="txtPosition" name="txtPosition" required="required"/></td>
			  </tr>
			  <tr>
			  <td>Person Name</td>
			  <td><input type="text" id="txtName" name="txtName" required="required"/></td>
			  </tr>
			  <tr>
			  <td>Created Date</td>
			  <td><input type="text" id="txtDate" name="txtDate" required="required"/></td>
			  </tr>
			    <tr>
              <td></td>
              <td><input type="submit" id="submit" name="submit" value="Save"/> 
			       <input type="reset" id="reset" name="reset" value="Cancel" /></td>  </tr>
            
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
      <!--end of #box-3-->
    </div>
    <hr />
  </div>
  <!-- end of #leftBox -->
 </div>
  <!-- end of #sidebar -->
</div>
<!-- end of #content -->

<!-- end of #container -->
<?php include('footer.php'); ?>