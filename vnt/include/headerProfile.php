<?php

 require_once 'classes/GMclass.php';
  if (isset($_POST['submit']))
{

      $key=substr($_SESSION['key'],0,5);
      $number = $_REQUEST['txtGImageField'];
      if($number!=$key){
      	
      
    
          echo '<center><font face="Verdana, Arial, Helvetica, sans-serif" color="#FF0000">
		   Validation string not valid! Please try again!</font></center>';
		    
		   }
      else{
	$objgm = new GM();
    $msg=$objgm->insertquote($_POST['txtGName'],
	$_POST['txtGEmail'],$_POST['txtGCompany'],$_POST['txaDescription']);
			} 
			 if ($msg == "true") {
       $msg = "Thanks you very much for contacting us. we will get back to you.";
   }
   
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VictoryNet Technologies - A Company Specializing in Web and Software Development.</title>
<meta content="web development,  software development, asp.net websites, asp websites, wordpress, joomla, php, c#, vb.net, javascript, hmtl, css, xhtml, jquery, concrete 5, drupal, photoshop, logo, design, development" name="keywords">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/DDSlider.css">
<link href="css/colorbox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.DDSlider.min.js" type="text/javascript"></script>
<script src="js/jquery.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.colorbox.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8"> 
			var $j = jQuery.noConflict();
			$j(document).ready(function() {
				$j('#yourSliderId').DDSlider({
					nextSlide: '.slider_arrow_right',
					prevSlide: '.slider_arrow_left',
					selector: '.slider_selector'
				});
			}); 
	  </script>
<script type="text/javascript">
        $j(document).ready(function() {
			$j.tools.validator.fn("[data-equals]", "Value not equal with the $1 field", function(input) {
				var name = input.attr("data-equals"),
					 field = this.getInputs().filter("[name=" + name + "]"); 
				return input.val() == field.val() ? true : [name]; 
			});	
			
			$j("#form1").validator();   
        });          
</script>
</head>
<body >
<div id="containerWrap">
<div class="topmain">
  <div class="header">
    <div class="logo"> <a href="index.php"> <img src="images/logo.png" alt="" style="border:0 none;" /> </a> </div>
    <div class="menu">
      <ul>
        <li> <a href="our-services.php">Our Services</a> </li>
        <li> <a href="our-portfolio.php"> Our Portfolio </a> </li>
        <li> <a href="why-outsource-to-us.php"> Why OutSource to Us </a> </li>
        <li> <a href="the-company.php"> The Company </a> </li>
        <li> <a href="testimonial.php"> Testimonials </a> </li>
        <li> <a href="reach-us.php"> Reach Us </a> </li>
      </ul>
    </div>
  </div>
  <div class="clear"> </div>
  <?php if(isset($IsHome) &&  $IsHome =="Home") { ?>
  <div class="main" style="margin:10px 0px;">
    <ul id="yourSliderId">
      <!--<li title="squareOut" class="slider_1" style="opacity: 1;">						
					</li>-->
      <li title="squareOutMoving" class="slider_2" style="opacity: 0;"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/ASHA-Application.gif"></a></li>
      <li title="barFade" class="slider_3" style="opacity: 0;"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/IdeaGrove.gif"></a></li>
      <li title="squareRandom" class="slider_4" style="opacity: 0;"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/RockstarSurveys.PNG"></a></li>
      <li title="barFadeRandom" class="slider_5" style="opacity: 0;"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/penson.gif"></a></li>
      <li title="squareMoving" class="slider_6 current" style="opacity: 1;"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/LakeHightlanders.gif"></a></li>
      <li title="barTop" class="slider_7"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/ASHA-GiftCert.gif"></a></li>
      <li title="barBottom" class="slider_8"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/Bonedaddys.jpg"></a></li>
      <li title="square" class="slider_9"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/Epic.gif"></a></li>
      <li title="fading" class="slider_10"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/FirmaMedical.jpg"></a></li>
      <li title="rowInterlaced" class="slider_11"><a href="#"><img width="980" alt="img" src="uploaded/homeSlider/hip2bone.jpg"></a></li>
    </ul>
    <div id="container">
      <div class="slider_arrow_left"></div>
      <div class="slider_arrow_right"></div>
      <ul class="slider_selector">
      </ul>
    </div>
  </div>
  <?php } ?>
</div>
