<hr /> 
    <div id="footerWrap"> 
        <div id="footer"> 
            <ul> 
                <span id="lblBottomContents">
 						<li><a href='our-services.php'>Our Services</a></li>
						<li><a href='our-portfolio.php' target='_self'> Our Portfolio</a></li> 
						<li><a href='why-outsource-to-us.php' target='_self'>Why OutSource to Us</a></li> 
						<li><a href='the-company.php' target='_self'>The Company</a></li> 
						<li><a href='testimonial.php' target='_self'>Testimonials</a></li>                        
                        <li ><a href='reach-us.php' target='_self'>Reach Us</a></li>
				</span>                
            </ul> 
            <div id="footRight"> 
                <div id="footStats"> 
                    
                </div> 
                Copyright &copy; 2010<br /> 
                
                
            </div> 
        </div> 
        <br class="clearFix" /> 
    </div> 
    
    <table id="divAdminManage" border="0" cellpadding="0" cellspacing="0" style="display: none;" width="528px"> 
            <tr style="height: 10px; background-image: url(images/top_manageusers.png);"> 
                <td> 
                </td> 
            </tr> 
            <tr > 
                <td align="right"style="background-image: url(images/bg_manageusers.png);"> 
                    <img src="images/btnCloseMU.png" onclick="MBox_Close();" style="cursor: pointer;" />&nbsp;&nbsp;&nbsp;&nbsp;</td> 
            </tr> 
            <tr style="min-height: 628px; background-image: url(images/bg_manageusers.png);"> 
                <td width="528px"> 
	                <div width="100%" align="center" style="padding-left:30px; padding-right:30px; padding-bottom:30px"> 
			            <div id="updatepanel"> 
					        <h4> 
					            CMS User Management
					        </h4> 
					        <hr /> 
						</div> 
	        			<span id="lblTip"></span> 
 					</dir>
                </td> 
            </tr> 
            <tr style="height: 10px; background-image: url(images/bottom_manageusers.png);"> 
                <td> 
                </td> 
            </tr> 
        </table> 
 
        <div id="LightBox1" style="display: none; position: absolute; top: 0px; left: 0px;z-index: 100000; width: 100%; height: 100%; background-color: #000000; filter: alpha(opacity=75);-moz-opacity: 0.8; opacity: 0.75;"> 
        </div> 
        <div id="Slideshow" style="display: none; background-color: white; border: solid 2px #203050;padding: 2px;"> 
        </div> 
        
</body> 
</html> 

<script defer="defer" type="text/javascript"> 
    jcl.LoadBehaviour("LightBox1", LightBoxBehavior);
</script> 
 
<script type="text/javascript"> 
    function GenericButtonClickLoadWineBox() {
        //
        popTop = 90;
        var swidth = window.screen.width;
        popLeft = (swidth - 613) / 2;
        //
        var obj_divAdminManage = document.getElementById("divAdminManage");
        LightBoxBehavior.open('divAdminManage');
        obj_divAdminManage.style.top = popTop + "px";
 
    }
 
    function MBox_Close() {
        try {
            LightBoxBehavior.hide();
            close_bar_flag = "false";
 
            End();
        }
        catch (e) {
        }
    }
    //HeaderText
    function GenericButtonClickLoadHeaderTextManage() {
        try {
            //
            popTop = 150;
            var swidth = window.screen.width;
            popLeft = (swidth - 613) / 2;
 
            //
            var obj_div = document.getElementById("divHeaderTextManage");
            LightBoxBehavior.open('divHeaderTextManage');
            obj_div.style.top = popTop + "px";
        }
        catch (e) {
        }
    }
</script> 