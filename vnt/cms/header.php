<?php
session_start();
require_once '../classes/GMclass.php';
$err = 0;
$objgm = new GM();
if (!isset($_SESSION['login'])) 
{
    header('Location:login.php');
    exit;
}

if(isset($_GET['op']) && $_GET['op']=="logout")
{
	$objgm->logout();
	header('Location:login.php');
    exit;
}

date_default_timezone_set('America/Los_Angeles');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>.:: VictoryNet Technology ::. - CMS</title>
	<script type='text/javascript' src='js/jcl.js'></script> 
    <script type='text/javascript' src='js/LightBox.js'></script>     
    <link href="style.css" rel="stylesheet" type="text/css" />  
    <script src="js/jquery-1.js" type="text/javascript"></script>  
    <script type="text/javascript" charset="utf-8"> 
	//tabbed forms box
		$(function () {
			var tabContainers = $('div#forms > div.innerContent'); // change div#forms to your new div id (example:div#pages) if you want to use tabs on another page or div.
			tabContainers.hide().filter(':first').show();
			$('ul.switcherTabs a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('ul.switcherTabs li').removeClass('selected');
				$(this).parent().addClass('selected');
				return false;
			}).filter(':first').click();
		});
    </script> 
    <style type="text/css"> 
        .subLinks
        {
        	font-family:"Lucida Sans Unicode","Trebuchet Ms",Helvetica,Arial;
        	color:#999999;
            font-size:0.9em;
        } 
		       
        .subLinks span li
        {
            list-style:none;
        }  
            
        .subLinks span li a 
		{
            background:transparent none repeat scroll 0 0;
            color:#999999;
            font-size:0.8em;
            padding:10px 5px;
            font-size:0.9em;
            float:left;
            text-decoration:underline;
        }
        
        .subLinks span li a:hover
		 {
            color:#777777;            
        }
        
        .subLinks span li.selected a 
		{
            color:#AB8617;
            background:transparent none repeat scroll 0 0;
        }
        
    </style>
	 
</head>
<body>
<div id="container"> 
        <div id="header"> 
            <div id="logo"> 
                <h1> 
                    <span><a href="index.php">VictoryNet Technology</a></span></h1> 
                <p> 
                    Customized CMS</p> 
            </div> 
            <div id="userBox"> 
                <p>            
                        <img src="images/icon_user.gif" width="16" height="19" alt=" " /> 
                        Hello,<span id="ctl00_lblName">admin</span> 
                        | <a href="javascript:GenericButtonClickLoadWineBox();">Settings</a> 
                        | <a id="LinkButton2" href="index.php?op=logout">Logout</a>
                 </p> 
                <p class="small"> 
                    <span id="lbldate" class="white"><?php echo date('m-d-Y') ?></span></p> 
            </div> 
            <!-- end of #userBox --> 
            <div id="menu"> 
                <ul> 
                    <span id="lblContent">
						<li><a href='our-services.php'>Our Services</a></li>
						<li><a href='our-portfolio.php' target='_self'> Our Portfolio</a></li> 
					<li><a href='why-outsource-to-us.php' target='_self'>Why OutSource to Us</a></li> 
						<li><a href='the-company.php' target='_self'>The Company</a></li> 
						<li><a href='testimonial.php' target='_self'>Testimonials</a></li>                        
                        <li ><a href='reach-us.php' target='_self'>Reach Us</a></li>                                     			    </span>                    
                </ul> 
                <p id="rightLink"> 
                    <a href="../index.php">View Site</a></p> 
                <br class="clearFix" /> 
                <div class="subLinks"> 
                    <span id="lblContent">
						<li class='selected'><a href='' target='_self'></a></li>						
					</span> 
                </div> 
            </div> 
            <!-- end of #menu --> 
        </div> 
        <!-- end of  #header --> 
        <hr /> 