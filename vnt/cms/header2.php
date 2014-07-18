<?php
session_start();
require_once '../classes/GMclass.php';
$err = 0;
$objgm = new GM();
if (!isset($_SESSION['login'])) 
{
    header('Location:login.php');
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>.:: VictoryNet Technology ::. - CMS</title>
    <script type='text/javascript' src='js/jcl.js'></script>    
	<link href="../css/colorbox.css" rel="stylesheet" type="text/css" />	 
	<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
	<script src="js/jquery.tools.min.js" type="text/javascript"></script>	
	<script src="js/jquery.colorbox.js" type="text/javascript"></script> 
	<script type='text/javascript' src='js/LightBox.js'></script>    
    <link rel="stylesheet" href="css/demo_table_jui.css" type="text/css" />
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>       
    <link href="style.css" rel="stylesheet" type="text/css" /> 	  

    <script type="text/javascript" charset="utf-8"> 
    	var $j = jQuery.noConflict();
	//tabbed forms box
		$j(function () 
		{
			var tabContainers = $j('div#forms > div.innerContent'); // change div#forms to your new div id (example:div#pages) if you want to use tabs on another page or div.
			tabContainers.hide().filter(':first').show();			
			$j('ul.switcherTabs a').click(function ()
			 {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$j('ul.switcherTabs li').removeClass('selected');
				$j(this).parent().addClass('selected');
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
        }    </style> 
    <!-- TinyMCE -->
	<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode : "textareas",
			theme : "advanced",
			elements : "cms_description",
			plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
	
			// Theme options
			theme_advanced_buttons1 : "cut,copy,paste,pastetext,pasteword,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect",
			theme_advanced_buttons2 : "bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,preview,|,forecolor,backcolor,|,hr,|,sub,sup,|,media,visualchars,nonbreaking",
			theme_advanced_buttons3 : "tablecontrols",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
	
			// Example content CSS (should be your site CSS)
			content_css : "editor.css",
	
			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",
	
			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
	</script>
	<!-- /TinyMCE -->
</head>
<body>
<div id="container"> 
        <div id="header"> 
            <div id="logo"> 
                <h1> 
                    <span><a href="index.php">Victory Net Technologies </a></span></h1> 
                <p>Maßgeschneiderte CMS</p> 
            </div> 
            <div id="userBox"> 
                <p>                    
                        <img src="images/icon_user.gif" width="16" height="19" alt=" " /> 
                        Hello,<span id="ctl00_lblName">admin</span> 
                        | <a href="javascript:GenericButtonClickLoadWineBox();">Setting</a> 
                        | <a id="LinkButton2" href="index.php?op=logout">Logout</a>                      
                </p> 
                <p class="small"> 
                    <span id="lbldate" class="white"><?php echo date('m-d-Y') ?></span></p> 
            </div> 
            <!-- end of #userBox --> 
            <div id="menu"> 
                <ul> 
                    <span id="lblContent">
						<li><a href='#'>Our Services</a></li>
						<li><a href='our-portfolio.php' target='_self'>Our Portfolio</a></li>					
						<li><a href='testimonial.php' target='_self'>Testimonials</a></li> 
						<li><a href='quote.php' target='_self'>Quote</a></li>   
     	                 <li><a href='contact.php' target='_self'>Contact Us</a></li>
				    </span>                    
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