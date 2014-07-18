<?php
session_start();
 require_once 'classes/GMclass.php';
 
 if (isset($_POST['submit']))
{
    $objgm = new GM();
    $msg=$objgm->insertquote($_POST['txtGName'],$_POST['txtGEmail'],
	$_POST['txtGCompany'],$_POST['txaDescription']);
    header("Location:ThankYou.php");
	
}
?>
<?php

   if(isset($_REQUEST['submit']))
   {
    header("Location:ThankYou.php");
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
    <div class="contentBoxArea">
      <h5>Thank you</h5>
    </div>
    <div class="breadCrumbs"> <a href="index.php">Home</a> &gt; The Company </div>
    <br />
    <div class="normalContentArea"> Thanks you very much for contacting us. we will get back to you.<br/>
      <br/>
    </div>
  </div>
</div>
<?php include ("include/footerProfile.php"); ?>