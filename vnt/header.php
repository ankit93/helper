<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?>
  <?php if (!wp_title('', true, 'left')) ;{ ?> | <?php bloginfo('description'); ?> <?php } ?></title>

<link href="<?php bloginfo('stylesheet_directory'); ?>/css/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
  
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/Cicle_Gordita_700.font.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/Lobster_400.font.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/loopedcarousel.js"></script>
<script type="text/javascript">
   $(function(){
		$('#loopedCarousel').loopedCarousel({
			showPagination: false, // Shows pagination links
			padding: 5 // Padding between items
		});
	});
   </script>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" 
 href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />  
 <?php wp_head(); ?>	
</head>
<body id="page1">
<div id="main">
  <!-- header -->
  <header>
    <h1><a href="index.html"><span>Royal online poker club</span></a></h1>
  </header>
  <nav>
    <ul class="menu">
      <li id="left"><a class="act" href="index.html">home page</a></li>
      <li><a href="index-1.html">poker rooms</a></li>
      <li><a href="index-2.html">strategy</a></li>
      <li><a href="index-3.html">video</a></li>
      <li><a href="index-4.html">poker stars</a></li>
      <li id="right"><a href="index-5.html">contacts</a></li>
    </ul>
  </nav>
  <div id="loopedCarousel">
    <div class="container">
      <div class="slides">
        <div><a href="#"><img src="gg/images/carousel_img1.png" width="316" height="303"/></a> <i><span class="s1">Tips<br/>
          <b>&amp; Hints</b></span><a href="#">More</a></i></div>
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img2.png" width="316" height="303"/></a> <i><span class="s2">Free<br/>
          <small>games download</small></span><a href="#">More</a></i></div>
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img3.png" width="316" height="303"/></a> <i><span class="s3">Payout<br/>
          <b>Guarantee</b></span><a href="#">More</a></i></div>
          
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img2.png" width="316" height="303"/></a> <i><span class="s2">Free<br/>
          <small>games download</small></span><a href="#">More</a></i></div>
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img3.png" width="316" height="303"/></a> <i><span class="s3">Payout<br/>
          <b>Guarantee</b></span><a href="#">More</a></i></div>
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img1.png" width="316" height="303"/></a> <i><span class="s1">Tips<br/>
          <b>&amp; Hints</b></span><a href="#">More</a></i></div>
          
       
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img3.png" width="316" height="303"/></a> <i><span class="s3">Payout<br/>
          <b>Guarantee</b></span><a href="#">More</a></i></div>
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img1.png" width="316" height="303"/></a> <i><span class="s1">Tips<br/>
          <b>&amp; Hints</b></span><a href="#">More</a></i></div>
        <div><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel_img2.png" width="316" height="303"/></a> <i><span class="s2">Free<br/>
          <small>games download</small></span><a href="#">More</a></i></div>
      </div>
    </div>
    <a href="#" class="previous"></a> <a href="#" class="next"></a> </div>