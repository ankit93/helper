<?php
require_once '../classes/GMclass.php';
$objgm = new GM();
$arr3 = $objgm->getPortfolioRecordById($_GET['id']);
foreach ($arr3 as $arr2) {
    $projectTitle = stripcslashes($arr2['ProjectTitle']);
    $projectDescription = stripcslashes($arr2['ProjectDescription']);
    $projectDate = stripcslashes($arr2['ProjectDate']);
    $filePhoto = stripcslashes($arr2['ProjectImage']);
    $projectUrl = stripcslashes($arr2['ProjectUrl']);
    $projectSortOrder = stripcslashes($arr2['ProjectSortOrder']);
}
if (isset($_POST['submit'])) {
    $projectTitle = $_POST['txtTitle'];
    $projectDescription = $_POST['txtDescription'];
    $projectDate = $_POST['txtDate'];
    $filePhoto = "";
    if ($_FILES["fPhoto"]["error"] > 0)
        $filePhoto = $_POST['hddPhoto'];
    else
        $filePhoto = "../uploaded/images/" . $_FILES["fPhoto"]["name"];
    $filePhoto = basename($filePhoto);

    if ($_FILES["fPhoto"]["error"] > 0) {
        $_FILES["fPhoto"]["error"] . "<br />";

    } else {
        $userFile = $_FILES["fPhoto"]["name"];
        $fileType = $_FILES["fPhoto"]["type"];
        $fileSize = ($_FILES["fPhoto"]["size"] / 1024) . " Kb";
        $tempFile = $_FILES["fPhoto"]["tmp_name"];
        $filePhoto = $userFile;

        if (file_exists("../uploaded/images/" . $filePhoto)) {
            $filePhoto = "../uploaded/images/" . $filePhoto;

        } else {
            move_uploaded_file($tempFile, "../uploaded/images/" . $filePhoto);
            $filePhoto = "../uploaded/images/" . $filePhoto;
            $filePhoto = basename($filePhoto);
        }
    }
    $projectUrl = $_POST['txtUrl'];
    $projectSortOrder = $_POST['txtSortorder'];
    $msg = $objgm->updatePortfoliobyId($projectTitle, $projectDescription, $projectDate,
        $filePhoto, $projectUrl, $projectSortOrder, $_GET['id']);

    if ($msg == "true") {
        $msg = "Record has been updated successfuly.";
    }

}
if (isset($_POST['btnSubmit'])) {
    $projectTitle = "";
    $projectDescription = "";
    $projectDate = "";
    $filePhoto = "";
    $projectUrl = "";
    $projectSortOrder = "";

}
include ('header2.php'); ?>
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
        <h3> <span id="lblTitle">Edit Portfolio  Information</span> </h3>
      </div>
      <div class="innerContent">  
      <div style="margin-top:10px;"></div>
	          <form  id="frmgroup" action="" method="post" enctype="multipart/form-data">
	          <a href="our-portfolio.php"><img src="./images/backButton.gif" height="75" width="95" style="border:0px none; float:right;"  /> </a>
          <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="width:75%;">
            <thead>      
			  
           <tr style="width:564px;padding:3px;font-weight:bold;height: 28px;">
              <tr>
              <td>
              Project Title
              </td>
              <td><input type="text" id="txtTitle" name="txtTitle" required="required" 
			   value="<?php echo isset($projectTitle) ? $projectTitle : '' ?>"/></td>
			  </tr>
			  <tr>
		<td> Project Description</td>
		<td><textarea cols="4" rows="10" id="txtDescription" name="txtDescription"	 required="required">
	  <?php echo isset($projectDescription) ? $projectDescription : '' ?>
			  </textarea></td>
			  </tr>
			  <tr>
			  <td>Project Date</td>
			  <td><input type="text" id="txtDate" name="txtDate" required="required"
			    value="<?php echo isset($projectDate) ? $projectDate : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>Project Image</td>
 <td><input type="file" id="fPhoto" name="fPhoto"  value="<?php echo isset($filePhoto) ?
$filePhoto : '' ?>"/>
			 <input type="hidden" id="hddPhoto" name="hddPhoto"	value="<?php echo isset($filePhoto) ?
    $filePhoto : '' ?>" />
                    <?php echo $filePhoto ?></td>
			  </tr>
			  <tr>
			  <td>Project Url</td>
			  <td><input type="text" id="txtUrl" name="txtUrl" required="required"
			  value="<?php echo isset($projectUrl) ? $projectUrl : '' ?>"/></td>
			  </tr>
			  <tr>
			  <td>Project SortOrder</td>
	<td><input type="text" id="txtSortorder" name="txtSortorder" required="required" 
	   value="<?php echo isset($projectSortOrder) ? $projectSortOrder : '' ?>"/></td>
			  </tr> 
			    <tr>
              <td></td>
              <td><input type="submit" id="submit" name="submit" value="Update"/>   
                  <input type="submit" id="btnSubmit" name="btnSubmit" value="Cancel" /></td> 						   
			  </tr>			  
          </table>
        </form>
        <?php if (isset($msg) and $msg != "") { ?>
        <script type='text/javascript'>
							$j(document).ready(function(){
								      $j.fn.colorbox({width:'50%', inline:true, href:'#msgBox'});
							});
						</script>
        <?php } ?>
        <div style='display:none'>
          <div id='msgBox' style='padding:10px; background:#fff;'> <span style="display:block;text-align:center;">
            <?php echo $msg; ?>
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
<?php include ('footer.php'); ?>