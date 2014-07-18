<?php
require_once '../classes/GMclass.php';
$objgm =new GM();
if(isset($_POST['submit']))
{
  $projectTitle=$_POST['txtTitle'];
  $projectDescription = $_POST['txtDescription'];
  $projectDate=$_POST['txtDate'];
  $filePhoto = "";   
    if ($_FILES["fPhoto"]["error"] > 0) {
        $_FILES["fPhoto"]["error"] . "<br />";
    }
      else
      {
        $userFile = $_FILES["fPhoto"]["name"];
        $fileType = $_FILES["fPhoto"]["type"];
        $fileSize = ($_FILES["fPhoto"]["size"] );
        $tempFile = $_FILES["fPhoto"]["tmp_name"];        
        $filePhoto = $userFile;
        
       

        if (file_exists("../uploaded/images/".$filePhoto)) 
		{
            $filePhoto = "../uploaded/images/".$filePhoto;
            $filePhoto = basename($filePhoto);
        } 
		else 
		{
	        move_uploaded_file($tempFile, "../uploaded/images/".$filePhoto);
            $filePhoto = "../uploaded/images/" . $filePhoto;
            $filePhoto = basename($filePhoto);
            $add = "../uploaded/images/".$_FILES["fPhoto"]["name"];
            $n_width = 300;
            $n_height = 240;
            $n1_width = 160;
            $n1_height =100;

            $tsrc = "../uploaded/thumbnail/"."Bigthumb_" . $_FILES["fPhoto"]["name"];
            $tsrc1 = "../uploaded/thumbnail/"."Smallthumb_" . $_FILES["fPhoto"]["name"];

            // Path where thumb nail image will be stored
            $png = $_FILES["fPhoto"]["type"] == "image/png";
            if (!($_FILES["fPhoto"]["type"] == "image/jpeg" or $_FILES["fPhoto"]["type"] ==
                "image/gif" or $png)) 
				{
                $msg= "Please upload the  JPG or GIF file.";                
            	}
            if ($_FILES["fPhoto"]["type"] == "image/jpeg")
			 {
                $im = ImageCreateFromJPEG($add);
                $width = ImageSx($im); // Original picture width is stored
                $height = ImageSy($im); // Original picture height is stored
                $newimage = imagecreatetruecolor($n_width, $n_height);
                $newimage1 = imagecreatetruecolor($n1_width, $n1_height);

                imageCopyResized($newimage, $im, 0, 0, 0, 0, $n_width, $n_height, $width, $height);
                imageCopyResized($newimage1, $im, 0, 0, 0, 0, $n1_width, $n1_height, $width, $height);

                ImageJpeg($newimage, $tsrc);
                ImageJpeg($newimage1, $tsrc1);

                //ImageJpeg($newimage,$tsrc."Smallthumb_".$_FILES["fPhoto"]["name"]);
                chmod("$tsrc", 0777);
                chmod("$tsrc1", 0777);
            }

            ////////////////  End of JPG thumb nail creation //////////
            if ($_FILES["fPhoto"]["type"] == "image/png")
			 {
                $_FILES["fPhoto"]["type"] . "<br/>";
                $im = imagecreatefrompng($add);
                $width = ImageSx($im); // Original picture width is stored
                $height = ImageSy($im); // Original picture height is stored
                $newimage = imagecreatetruecolor($n_width, $n_height);
                $newimage1 = imagecreatetruecolor($n1_width, $n1_height);

                imageCopyResized($newimage, $im, 0, 0, 0, 0, $n_width, $n_height, $width, $height);
                imageCopyResized($newimage1, $im, 0, 0, 0, 0, $n1_width, $n1_height, $width, $height);

                if (function_exists("imagepng")) {
                    Header("Content-type: image/png");
                    imagepng($newimage, $tsrc);
                    imagepng($newimage1, $tsrc1);

                } elseif (function_exists("imagejpeg")) {
                    Header("Content-type: image/jpeg");
                    ImageJPEG($newimage, $tsrc);
                    ImageJPEG($newimage1, $tsrc1);
                }
                chmod("$tsrc", 0777);
                chmod("$tsrc1", 0777);
            }

            if ($_FILES["fPhoto"]["type"] == "image/gif") 
			{
                echo $_FILES["fPhoto"]["type"] . "<br/>";
                $im = imagecreatefromgif($add);
                $width = ImageSx($im); // Original picture width is stored
                $height = ImageSy($im); // Original picture height is stored
                $newimage = imagecreatetruecolor($n_width, $n_height);
                $newimage1 = imagecreatetruecolor($n1_width, $n1_height);

                imageCopyResized($newimage, $im, 0, 0, 0, 0, $n_width, $n_height, $width, $height);
                imageCopyResized($newimage1, $im, 0, 0, 0, 0, $n1_width, $n1_height, $width, $height);
                if (function_exists("imagegif")) {
                    Header("Content-type: image/gif");
                    imagegif($newimage, $tsrc);
                    imagegif($newimage1, $tsrc1);

                } elseif (function_exists("imagejpeg")) 
				{
                    Header("Content-type: image/jpeg");
                    ImageJPEG($newimage, $tsrc);
                    ImageJPEG($newimage1, $tsrc1);

                }
                chmod("$tsrc", 0777);
                chmod("$tsrc1", 0777);
            }
        }
   }
    	$projectUrl=$_POST['txtUrl'];
		$projectSortOrder=$_POST['txtSortorder'];			
		 $msg = $objgm->addPortfolio($projectTitle, $projectDescription, $projectDate, $filePhoto,$projectUrl,$projectSortOrder);
			  if ($msg == "true") 
			  {
    			$msg = "record has been sent successfully.";
			  }	
 }
    if (isset($_POST['reset'])) 
	{
    $projectTitle = "";
    $projectDescription = "";
    $projectDate = "";
    $filePhoto = "";
    $projectUrl = "";
    $projectSortOrder = ""; 
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

<body>

<script type="text/javascript">
        $j(document).ready(function() {
			$j.tools.validator.fn("[data-equals]", "Value not equal with the $1 field", function(input) {
				var name = input.attr("data-equals"),
					 field = this.getInputs().filter("[name=" + name + "]"); 
				return input.val() == field.val() ? true : [name]; 
			});			
			$j("#frmgroup").validator(); 		    
        }); 		 
    
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
        <h3> <span id="lblTitle">Manage Portfolio </span> </h3>
      </div>
      <div class="innerContent">  
      <div style="margin-top:10px;"></div>
	          <form  id="frmgroup" action="" method="post" enctype="multipart/form-data" name="testform">
	          <a href="our-portfolio.php"><img src="./images/backButton.gif" height="75" width="95" style="border:0px none;float:right;" /> </a>
          <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="width:75%;">
            <thead>
             <tr style="width:564px;padding:3px;font-weight:bold;height: 28px;">
              <tr>
              <td>
              Project Title
              </td>
              <td><input type="text" id="txtTitle" name="txtTitle" required="required" /></td>
			  </tr>
			  <tr>
			  <td> Project Description</td>
			  <td><textarea cols="4" rows="10" id="txtDescription" name="txtDescription" required="required"></textarea></td>
			  </tr>
			  <tr>
			  <td>Project Date</td>
			  <td><input  id="txtDate" class="date-pick"  name ="txtDate" required="required"/></td>
			  </tr>
			  <tr>
			  <td>Project Image</td>
			  <td><input type="file" id="fPhoto" name="fPhoto"  required="required"/></td>
			  </tr>
			  <tr>
			  <td>Project Url</td>
			  <td><input type="text" id="txtUrl" name="txtUrl" required="required"/></td>
			  </tr>
			  <tr>
			  <td>Project SortOrder</td>
	<td><input type="text" id="txtSortorder" name="txtSortorder" required="required" /></td>
			  </tr>      
                 <tr>
              <td></td>
              <td><input type="submit" id="submit" name="submit" value="Save"/> 
			   <input type="reset" id="reset" name="reset" value="Cancel" /></td>    
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
      <!--end of #box-3-->
    </div>
    <hr />
  </div>
  <!-- end of #leftBox -->
 
  <!-- end of #sidebar -->
</div>
<!-- end of #content -->
</div>
<!-- end of #container -->
<?php include('footer.php'); ?>