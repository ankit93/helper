<?php
if(isset($_REQUEST['page'])){
	switch ($_REQUEST['page']) {
		case 'delete_employ':
			if ($_REQUEST['id']) {
				$sql = "DELETE FROM employer WHERE emp_id='" . $_REQUEST['id'] . "'";
				mysql_query($sql);
				header("Location:index.php?page=employer");
				exit;
			}
			break;
		case 'chg_status':
			if ($_REQUEST['id']) {
				$sql = "UPDATE resume SET resume_status='" . $_REQUEST['new_status'] .
					"' WHERE veteran_id='" . $_REQUEST['id'] . "'";
				mysql_query($sql);
				header("Location:index.php?page=veteran");
				exit;
			}
			break;
		case 'delete_veteran':
			if ($_REQUEST['id']) {
				$sql = "DELETE FROM veteran WHERE veteran_id='" . $_REQUEST['id'] . "'";
				mysql_query($sql);
				$sql = "DELETE FROM resume WHERE veteran_id='" . $_REQUEST['id'] . "'";
				mysql_query($sql);
				header("Location:index.php?page=veteran");
				exit;
			}
			break;
		case 'update_cms':
			if ($_POST['cms_id'] && $_POST['page'] == "update_cms") {
				$sql = "UPDATE cmsdetail SET pageName='" . addslashes($_REQUEST['cms_title']) .
					"',pageContent='" . addslashes($_REQUEST['cms_description']) . "' WHERE Id='" .
					$_POST['cms_id'] . "'";
				mysql_query($sql);
				header("Location:index.php?page=cms");
				exit;
			} else
				if ($_POST['page'] == "update_cms") {
					$sql = "INSERT INTO cmsdetail SET pageName='" . addslashes($_REQUEST['cms_title']) .
						"' , pageContent='" . addslashes($_REQUEST['cms_description']) . "'";
					mysql_query($sql);
					header("Location:index.php?page=cms");
					exit;
				}
			break;
	}
}
include ('header.php');
?>
        <div id="content"> 
            <div id="leftBox"> 
                <div id="pageIntro"> 
                    <h2> 
                        Welcome to VictoryNet Technology CMS</h2> 
                    <p></p> 
                </div>                 
			    
			    <div class="contentBox"> 
			        <div class="contentBoxTop"> 
			            
			        </div> 
			        <div class="innerContent" style="height:150px;padding:50px;">            
			            <p>This is the CMS area for VictoryNet Technology to customize contents for the main site pages.
			    		</p>            
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
 <?php include ('footer.php'); ?>  