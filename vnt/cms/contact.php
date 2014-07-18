<?php
 	require_once '../classes/GMclass.php';
	$objgm =new GM();
	if(isset($_GET['id']))
	{
		$msg=$objgm->deleteTestimonialdata($_GET['id']);	
		if($msg == "true")
		{
		$msg="Testimonial  Data delete sucessfully";
		}
	}	
	include('header2.php'); 
?>
<script type="text/javascript">
	$j(document).ready(function() {
				oTable = $j('#grdData').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers",
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "http://<?php echo  $_SERVER['SERVER_NAME']?>/classes/dvContactclass.php	"	
				//	http://<?php echo  $_SERVER['SERVER_NAME']?>/classes/dvContactclass.php					
				});
			});
	$j("#lnkHome").attr("class","");
	$j("#lnkPortfolio").attr("class","");
	$j("#lnkResource").attr("class","");
	$j("#lnkCompany").attr("class","");
	$j("#lnkTestimonial").attr("class","selected");
	$j("#lnkReachUs").attr("class","");	
</script>
<style type="text/css">
table thead th div.DataTables_sort_wrapper 
{
	padding-right:16px;
	position:relative;
}
table thead th div.DataTables_sort_wrapper span 
{
	margin-top:-8px;
	position:absolute;
	right:0;
	top:50%;
}
table thead th div.DataTables_sort_wrapper 
{
	font-weight: bold;
}
</style>
<link rel="stylesheet" href="css/jquery-ui-1.7.2.custom.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/colorbox.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
<div id="content">
  <div id="leftBox">
    <div id="pageIntro">
      <h2> Welcome to VictoryNet Technology </h2>
      <p></p>
    </div>
    <div class="contentBox">
      <div class="contentBoxTop">
        <h3> <span id="lblTitle">Manage Contact Information </span> </h3>
      </div>
      <div class="innerContent">	       
      <div style="margin-top:10px;"></div>
	          <form  id="frmgroup" action="" method="post">
         <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="border:solid 1px #cccccc;width:100%;">
            <thead>
  <tr style="width:100%;padding:3px;font-weight:bold;height: 28px;">
            <th style="width:30px;">&nbsp;</th>
            <th style="width:150px;" align="left">Name</th>
			<th style="width:150px;" align="left">Email</th>						 
            <th style="width:120px;" align="left"> Telephone</th>
             <th style="width:120px;" align="left"> Country</th>
              <th style="width:120px;" align="left"> Subject</th>  
			   <th style="width:120px;" align="left"> Message</th>               
            <th style="width:100px;" align="left"> Date</th>		  	
			<th style="width:60px;">Admin</th>
   </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="5" class="dataTables_empty">Loading data from server</td>
              </tr>
            </tbody>
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
<br class="clearFix" />
</div>
<!-- end of #container -->
<?php include('footer.php'); ?>