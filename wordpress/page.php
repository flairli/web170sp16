<?php get_header(); ?>
<div id="content">
 <div class="menu-desbackground">

<div id="menucontent">


  <div id="ourblog">
   <div class="leftline"><img src="<?php bloginfo('template_directory'); ?>/images/decorationlineleft.png"></div>
      <p class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
   <div class="rightline"><img src="<?php bloginfo('template_directory'); ?>/images/decorationlineright.png"></div>
  </div>
    <?php get_sidebar();?>
<div id="right-content">
   

<?php if ( have_posts()) : while ( have_posts() ):the_post();?>
<?php the_content(''); ?>
<?php endwhile; endif;?>
<small>page.php</small>
</div>
</div>
</div>
</div>



<!-- start footer -->

<?php get_footer(); ?>

<!-- End footer -->
