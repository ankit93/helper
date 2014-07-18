<?php
require_once '../classes/GMclass.php';
include('header2.php');
$objgm =new GM();
if(isset($_GET['id'])){		
	$msg=$objgm->deleteProjectdata($_GET['id']);
	if($msg =="true")
	{
		$msg="Project Data delete sucessfully";
	}
}
?>
 
<script type="text/javascript">
	$j(document).ready(function() {
				oTable = $j('#grdData').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers",
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "http://<?php echo $_SERVER['SERVER_NAME']?>/classes/dvProfileclass.php"
				});
			});
</script>
<style type="text/css">
table thead th div.DataTables_sort_wrapper
{
	padding-right:20px;
	position:relative;
}
table thead th div.DataTables_sort_wrapper span 
{
	margin-top:-8px;
	position:absolute;
	right:0;
	top:50%;
}
</style>
<link rel="stylesheet" href="css/jquery-ui-1.7.2.custom.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="../css/colorbox.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
<script type="text/javascript">
	$j("#lnkHome").attr("class","");
	$j("#lnkPortfolio").attr("class","selected");
	$j("#lnkResource").attr("class","");
	$j("#lnkCompany").attr("class","");
	$j("#lnkTestimonial").attr("class","");
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
	  <a href="create-portfolio.php"  style="font-weight:bold;color:#c5a393;font-size:14px;">Add New Project Data</a>  
      <div style="margin-top:10px;"></div>
	          <form  id="frmgroup" action="" method="post">
          <table cellpadding="0" cellspacing="0" border="0" class="serviceContainer" id="grdData" style="border:solid 1px #cccccc;width:100%;">
            <thead>
              <tr style="width:100%;padding:3px;font-weight:bold;height: 28px;">
                <th style="width:30px;">&nbsp;</th>
                <th style="width:150px;" align="left">Title</th> 
				<th style="width:150px;" align="left">Description</th>
				<th style="width:150px;" align="left">Image</th>
				<th style="width:140px;" align="left">Url</th>
				<th style="width:150px;" align="left">Date</th>
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