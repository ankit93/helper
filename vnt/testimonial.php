<?php
session_start();
 require_once 'classes/GMclass.php';
 $objgm = new GM(); 
	$arr=$objgm->getRecordById();
?>
<?php include ("include/headerProfile.php"); ?>
<div id="ContentWrap">
  <div id="Content">
    <div class="lftmenuarea">
      <div class="leftmenu">
        <ul>
          <li><a href="outsource-to-india.php"> Outsource to india</a></li>
          <li><a href="why-outsource-to-us.php"> Why outsource to VictoryNet</a></li>
          <li><a href="the-company.php"> Advantages to US</a></li>
          <li><a href="offshore-development.php"> Offshore Development</a></li>
          <li><a href="solutions-technologies.php"> Solutions and Technology</a></li>
        </ul>
      </div>
      <div class="clear"> </div>
      <?php include ("include/form.php"); ?>
    </div>
    <div class="rghtarea">
      <div class="contentBoxArea">
        <h5> Testimonials</h5>
      </div> 
      <div class="breadCrumbs"> <a href="index.php">Home</a> &gt; Testimonials </div>
      <div class="normalContentArea">
        <p> We strive to make our customers and their projects successful.&nbsp; As such we
          have many satisfied clients around the globe that have many nice things to say about
          us.<br/>
          <br/>
          - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
          - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
          - - - - - - - - - - -</p>
        <br/>
        
        <?php
		if(!empty($arr)){
		 foreach($arr as $testimonial) { 
          echo $testimonial['TestimonialDescription']
		 ?>
        <div style="text-align: right; float: right; clear: both; width: 100%; margin: 10px 0px;">
          <strong><?php echo $testimonial['PersonPosition']?> </strong><br/>
          <em>-<?php echo $testimonial['PersonName']?> </em><br />
          <em>-<?php echo $testimonial['CreatedDate']?> </em>
        </div>
        <?php } }?>
      </div>
    </div>
  </div>
</div>
<?php include ("include/footerProfile.php"); ?>

