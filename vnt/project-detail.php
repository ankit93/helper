<?php
session_start();
 require_once 'classes/GMclass.php';
 $objgm = new GM();

$id=$_REQUEST['ProjectId'];
$arr=$objgm->getDataById($id);

?>
<div id="ContentWrap">
  <div id="Content">
    <div class="rghtarea">
      <div class="contentBoxArea" style="color:#188BCA;font-size:25px;font-weight:bold; text-align:left; margin:0 auto;width:155px;">
        <h5 >Project Detail</h5>
      </div>
      <div class="normalContentArea">
        <?php
                     foreach($arr as $prjdetail )
                     {
                    $prjId=$prjdetail['ProjectId'];	
                    $prjImage=$prjdetail['ProjectImage'];	
                    $prjTitle=$prjdetail['ProjectTitle'];
                    $prjDescription=$prjdetail['ProjectDescription'];
                    $prjUrl=$prjdetail['ProjectUrl'];
                    
                     ?>
        <div style="width:300px;display:block;color:#188BCA;font-size:21px;font-weight:bold">
          <?php  echo $prjTitle; ?>
          <img src="<?php echo $prjdetail['ProjectImage'] ?
	  "uploaded/thumbnail/Bigthumb_" . $prjdetail['ProjectImage'] :'' ?>"
	   style=" border:0 none; margin-top:2px"  /> </a> </div>
        <div style="display:block;text-align:left;width:100px;">
          <?php
				    
       			    echo $prjDescription; 
					echo $prjUrl;
       			    
				   ?>
        </div>
        <?php	 } ?>
      </div>
    </div>
  </div>
</div>
