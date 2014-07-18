 <?php

 require_once 'classes/GMclass.php';
 $objgm = new GM();
	$arr=$objgm->getAllData();
?>
<?php include ("include/headerProfile.php"); ?>
<link href="css/kriframework.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript">
		$j(document).ready(function(){
			$j(".popup").colorbox({width:"940px", height:"440px", iframe:true});	
		});  
</script>

<div id="ContentWrap">
  <div id="Content">
    <div class="lftmenuarea">
      <div class="leftmenu">
        <ul>
          <li><a href="outsource-to-india.php"> Outsource to india</a></li>
          <li><a href="why-outsource-to-us.php"> Why outsource to VictoryNet</a></li>
          <li><a href="the-company.php"  > Advantages to US</a></li>
          <li><a href="offshore-development.php"> Offshore Development</a></li>
          <li><a href="solutions-technologies.php"> Solutions and Technology</a></li>
        </ul>
      </div>
      <div class="clear"> </div>
      <?php include ("include/form.php"); ?>
    </div>
    <div class="rghtarea">
      <div class="contentBoxArea">
        <h5>Our Portfolio</h5>
      </div>
      <div class="breadCrumbs"> <a href="index.php">Home</a> &gt; Our Portfolio</div>
      <div class="normalContentArea">
        <?php
                    
                     foreach($arr as $prjdetail)
                     {                     	
                     	$prjId=$prjdetail['ProjectId'];
                     	$prjTitle=$prjdetail['ProjectTitle'];
                     	$prjDes=$prjdetail['ProjectDescription'];
                     	$prjImage=$prjdetail['ProjectImage'];
                     	$prjUrl=$prjdetail['ProjectUrl'];
                     	$prjDate=$prjdetail['ProjectDate'];
                     	$prjSrtOrder=$prjdetail['ProjectSortOrder'];
                    		
                     ?>
        
 <!--
<div style=" float:left;width:180px;display:block; padding-bottom:5px;" class="img"> <a class="popup" href='project-detail.php?ProjectId=<?php echo $prjId; ?>'
		 id='imgProfile'> <img src="<?php echo isset($prjImage) ?
	  "uploaded/thumbnail/Smallthumb_".$prjImage :'' ?>"
	    /> </a>
          <div style="display:block;text-align:center;width:160px;"> <?php echo $prjdetail['ProjectTitle'];?> </div>
        </div>
-->
<div class='content_one_third portfolio_item'>
					<div class='item_data rounded'> <a  class="popup"  href='project-detail.php?ProjectId=<?php echo $prjId; ?> '><img src='<?php echo isset($prjImage) ?
	  "uploaded/thumbnail/Smallthumb_".$prjImage :'' ?> ' alt='My Projects' style="height:130px;width:280px;padding:1px;"/></a> 
                     <a href="" target="_blank" class="style7"><?php echo $prjdetail['ProjectTitle'];?></a><br />
                    
                      <br />
				  <br />
				  <br />
				  </div>
				<img src="../images/bg_portfolio_item.gif" />  
				</div>

        <?php	 } ?>
       
      </div>
    </div>
  </div>
</div>
<?php include ("include/footerProfile.php"); ?>