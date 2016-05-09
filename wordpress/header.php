<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <!-- Begin Meta -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
 <!-- End Meta -->
<title><?php bloginfo('description'); ?><?php bloginfo('name'); ?>eastern cafe</title>
<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" 
 type="text/css" media="all" />
<!-- End Styles -->
<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
$(window).load(function() { // enable function upon window load
$("#toggle").click(function() { // when toggle is clicked...
$("#navigation").toggle(); // ... open or close the navigation
});
});
</script>
<!-- End Toggle Menu -->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="stripe" width="73%">
<hr  size=8px color=#80875B>
 <div class="social-media">
  <img src="<?php bloginfo('template_directory'); ?>/images/fb.png">
  <img src="<?php bloginfo('template_directory'); ?>/images/tw.png">
  <img src="<?php bloginfo('template_directory'); ?>/images/ins.png">
 </div>
<hr  size=8px color=#B7986D>
</div>

<!-- Start Toggle -->
<div id="toggle">
<a href="#"><span class="glyph">&#8801;</span>&nbsp;Menu</a>
</div>
<!-- End Toggle -->

<!-- Begin Navigation -->
<div id="navigation">
    <ul id="navigation-items">
    <li><a href="#">contact</a></li>
    <li><a href="#">updates</a></li>
    <li><a href="#">gallery</a></li>
    <li><a href="index.php">menu</a></li>
    <li><a href="about.html">about</a></li>
    <li><a href="home.html">
    <img src="<?php bloginfo('template_directory'); ?>/images/easterncafe-logo.jpg" width="177px" height="40px"></a></li>
    </ul>
   
</div>