<?php

session_start();
$IsHome ="Home";
$msg="";
$body="";
  if (isset($_POST['submit']))
{
	require_once 'classes/GMclass.php';
	$objgm = new GM();
	$key=$_SESSION['key'];
      $number = $_REQUEST['txtGImageField'];
      if($number!=$key)
	  {
          echo '<center><font face="Verdana, Arial, Helvetica, sans-serif" color="#FF0000">
		   Validation string not valid! Please try again!</font></center>';		    
      }
      else{
	
    $msg=$objgm->insertquote($_POST['txtGName'],
	$_POST['txtGEmail'],$_POST['txtGCompany'],$_POST['txaDescription']);

			} 
				 if ($msg == "true") {
       $msg = "Thanks you very much for contacting us. we will get back to you.";
   }
   
	  
    $adminEmail="vivekjoshi15@gmail.com";
    $headers = "From:" . $adminEmail . "\r\n";
    $headers .= "Reply-To:" . $adminEmail . "\r\n";
    $headers .= "Return-Path:" . $adminEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n" ;
    $to = "aannkkiitt93@gmail.com";    
    $subject = "VictoryNet Technology";
    $body = chunk_split(base64_encode($body));
    $contents = "<br/>";
    $contents .= "<b>Name:</b>" . " " . strtoupper($_POST['txtGName']) . " " . "!";
    $contents .= "<br/>";
    $contents .= "<br/>";
    $contents .= "<b></b>";
    $contents .= "<br/>";
    $contents .= "<br/>";
    $contents .= "<b>Email:</b> " . $_POST['txtGEmail'];
    $contents .= "<br/>";
    $contents .= " <b>Company: </b>" .$_POST['txtGCompany'];
    $contents .= "<br/>";
    $contents .= "<b> Description: </b>" . $_POST['txaDescription'];
    $contents .= "<br/>";
    $contents .= " ";
    $contents .= "<br/>";
    $contents .= " ";    
    $contents .= "<br/>";
    $contents .= "<br/>";
    $contents .= " Click here <a href='http://www.victorynettechnologies.co.cc'></a>";
    $contents .= "<br/>";
    $contents .= "<b>Regards,</b>";
    $contents .= "<br/>";
    $contents .= "victorynettechnologies.co";

    if ($contents != "")
    {
        //send mail - $subject & $contents come from surfer input
        mail($to, $subject, $contents, $headers);
    }
    
   if ($msg == "true") 
   {
       $msg = "your request has been successful and sent";
   }
}
?>
<?php include ("include/headerProfile.php"); ?>
<div id="ContentWrap">
  <div id="Content">
    <div class="lftmenuarea">
      <div class="leftmenu">
        <ul>
          <li><a href="outsource-to-india.php"  > Outsource to india</a></li>
          <li><a href="why-outsource-to-us.php"  > Why outsource to VictoryNet</a></li>
          <li><a href="the-company.php"  > Advantages to US</a></li>
          <li><a href="offshore-development.php"  > Offshore Development</a></li>
          <li><a href="solutions-technologies.php"  > Solutions and Technology</a></li>
        </ul>
      </div>
      <div class="clear"> </div>
      <?php include ("include/form.php"); ?>
    </div>
    <div class="rghtarea">
      <div class="welTextArea">
        <h2> Welcome to VictoryNet Technologies</h2>
        <h3> Custom Website Design and Development</h3>
        <p> VictoryNet Technologies is a dynamic web team having passion for design geared with
          keen eye for details, using a mix of creative skills and aesthetic awareness in
          delivering visual solutions to the communications and marketing needs of clients.
          We aim at building a strong portfolio of satisfied clients because your business
          is crafted with love.</p>
        <p>&nbsp; </p>
        <p> VictoryNet Technologies is an Offshore web design and web development company India
          providing a full range of web services including web design, web development, software
          development, SharePoint Solutions, bespoke web application development, Portal Development,
          Yahoo Store Design and custom web programming from a simple web page to the complex
          solutions, e-commerce solutions, content management systems, Multimedia Development,
          Web animation, CD Presentation, Print Media Solution (including logo, graphics,
          business card etc.), Search Engine Optimization (SEO), PPC Management.</p>
      </div>
      <div class="showcaseArea">
        <div class="showcaseBoxArea"> <span class="lftSCpic">
          <!--<img alt="Quick Links to Showcase" src="images/showcase_box_lftpic.jpg">-->
          </span><span class="mdlSCbg">
          <ul>
            <li>
              <h2><a href="web-design.php">Website Design</a></h2>
            </li>
            <li>
              <h2><a href="web-development.php">Web Development</a></h2>
            </li>
            <li>
              <h2><a href="branding-identity.php">Logo Design</a></h2>
            </li>
            <li>
              <h2><a href="branding-identity.php">Banner Design</a></h2>
            </li>
          </ul>
          </span><span class="rgtSCpic"></span> </div>
      </div>
      <div class="serviceBoxList">
        <div class="srvAreabox">
          <h5> <a href="web-design.php">Web Design</a></h5>
          <p> We offer Web Designing services that are dedicated to consolidate your web presence.
            We are a unique design firm offering a variety of services from basic Website Design
            to complete e-commerce website development.</p>
        </div>
      </div>
      <div class="serviceBoxList">
        <div class="srvAreabox">
          <h5> <a href="web-development.php">Web Portal Development</a></h5>
          <p> we develop scalable portals with a greater experience in dedicated business portals.
            Internet portals range from business web portals to community portals and B2B or B2C portals. </p>
        </div>
      </div>
      <div class="serviceBoxList">
        <div class="srvAreabox">
          <h5> <a href="ecommerce-solution.php">E-commerce Solutions</a></h5>
          <p> we develop scalable portals with a greater experience in dedicated business portals.
            Internet portals range from business web portals to community portals and B2B or B2C portals. </p>
        </div>
      </div>
      <div class="serviceBoxList">
        <div class="srvAreabox">
          <h5> <a href="branding-identity.php">Branding &amp; Identity</a></h5>
          <p> Your identity becomes a reflection of more than just a product but a reflection of your company. 
            Our graphic design experience covers the entire gamut from corporate branding, to brochures, promotional kits, signs, billboards, catalogs and magazines.. </p>
        </div>
      </div>
      <div class="serviceBoxList">
        <div class="srvAreabox">
          <h5> <a href="open-source-customization.php">Open Source Customization </a></h5>
          <p> We are capable of doing any type of customization and modifications in these scripts. We can 
            customize and implement various open source tolls and having vast experience of 
            add/modify plugings/add-on contributed by the communities as well as create custom design for your project!.. </p>
        </div>
      </div>
      <div class="serviceBoxList">
        <div class="srvAreabox">
          <h5> <a href="yahoo-store-design.php">Yahoo Store Design </a></h5>
          <p> VictoryNet Technologies.com specializes in total e-commerce business solutions including Yahoo!
            store custom design, yahoo store development & store marketing with the custom graphics, banners and logos.t!.. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include ("include/footerProfile.php"); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
