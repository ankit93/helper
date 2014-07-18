<?php
require_once '../classes/GMclass.php';
session_start();
$err = 0;
$objgm = new GM();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $passwd = $_POST['password'];
    //$passwd = md5($_POST['password']);
	$msg=$objgm->LoginAdmin($user,$passwd);
    if ($msg!="") {
        $_SESSION['login'] = 'yes';        
        header('Location:index.php');
        exit;
    } else {
        $err = 1;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:: VictoryNet Technology ::. - Login</title>
    <style type="text/css"> 
        .smallInput  
        {
        	background:url(images/textbox.gif) no-repeat; 
        	width:340px;
            padding:4px 6px 0px 6px; 
            height:23px; 
            display:block; 
            margin:5px 0 0 0;
            border:none;  
            font-size:0.9em; 
            color:#333;
            display:inline;
         }
	    
    </style>  
	<link href="style.css" rel="stylesheet" type="text/css" />    
</head>

<body>
<form id="loginform" name="logindform"  action="login.php" method="post">
	  <div class="holder" align="center"> 
        <div class="topdiv"> 
            <div class="usernamediv"> 
                Username
            </div> 
            <div style="margin-top:5px; margin-bottom:10px; "> 
                <input name="user" type="text" maxlength="255" id="user" tabindex="1" class="smallInput" style="width:340px;" /> 
                <span id="reg1" style="color:Red;display:none;">*</span> 
            </div> 
            <div class="passworddiv"> 
                Password
            </div> 
            <div > 
                <input name="password" type="password" maxlength="255" id="password" tabindex="2" class="smallInput" style="width:340px;" /> 
                 <span id="RequiredFieldValidator1" style="color:Red;display:none;">*</span> 
            </div> 
            <div style="margin-top:20px; text-align:right; "> 
            	<input type="hidden" name="login" value="login"/>
                <input type="image" name="btnLogon" id="btnLogon" tabindex="3" onmouseout="this.src='images/btnSignIn.gif'" onmouseover="this.src='images/btnSignInRv.gif'" src="images/btnSignIn.gif" alt="Sign In" style="border-width:0px;" /> 
            </div> 
           	<?php if ($err) { ?>
            <div> 
                <span id="prompt" class="errormessage">Login failed....!. <br /><?php echo $msg?></span> 
            </div> 
            <?php } ?>
        </div> 
    </div> 	 
  	 </form>
  </body>
  </html>