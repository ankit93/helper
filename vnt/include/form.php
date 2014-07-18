<div class="lftGreybox">
<form name="form1" method="post"  onSubmit ="return check();" id="form1">
                    <span class="titleQuickQoute">Get a Quick Quote</span>
                    <ul>
                        <li>Name *</li>
                        <li>
                            <input type="text" value="" id="txtGName" name="txtGName"required="required"/></li>
                            
                        <li>Email *</li>
                        <li>
                            <input type="email" value="" id="txtGEmail" name="txtGEmail"required="required"/></li>
                        <li>Company </li>
                        <li>
                            <input type="text" value="" id="txtGCompany" name="txtGCompany"required="required"/></li>
                        <li>Please briefly describe your project and what you expect from us: *</li>
                        <li>
                            <textarea cols="20" rows="4" class="quoteComment" name="txaDescription" id="txaDescription"required="required"></textarea></li>
                       <li><img src="php_captcha.php"
					    style=" width:75px; float:left;padding-left:1px;padding-right:2px;"/>
					   Please enter the number you see in the box above *</li>
                        <li>
                            <input type="text" name="txtGImageField" id="txtGImageField"required="required"/>
                        </li>
                    </ul>
                   
                    <input type="submit" value="Submit" id="submit" class="button" name="submit"/>
                    <input type="reset" value="Reset" id="reset" class="button" name="reset"/>
                                                             <?php
if (isset($msg) and $msg != "") {
?>
                                    <script type='text/javascript'>
										$j(document).ready(function(){
												 $j.fn.colorbox({width:'50%', inline:true, href:'#msgBox'});
										});
								</script>
								<?php } ?>
								<div style='display:none;'>
                                      <div id='msgBox' style='padding:10px; background:#ffffff;'> <span style="display:block;text-align:center;"> <?php echo
$msg; ?> </span> </div></div>
                
                    </form>
                </div>