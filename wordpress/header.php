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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="screen" />
<!-- End Styles -->

<!-- start js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
        animation:"fade",
        slideshow:false,
  });
        })
</script>

<!-- end js -->
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
<div id="header">
       <div id="logo"><a href="<?php echo get_option('home'); ?>"/><img src="<?php bloginfo('template_directory'); ?>/images/easterncafe-logo.jpg" width="177px" height="40px"></div>
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
    </div>
    <!-- End Navigation -->