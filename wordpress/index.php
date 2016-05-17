<?php get_header(); ?>
<div id="content">
 <div class="menu-desbackground">

<div id="menucontent">


  <div id="ourblog">
   <div class="leftline"><img src="<?php bloginfo('template_directory'); ?>/images/decorationlineleft.png"></div>
     <p class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
   <div class="rightline"><img src="<?php bloginfo('template_directory'); ?>/images/decorationlineright.png"></div>
  </div>
    <?php get_sidebar(); ?>
<div id="right-content">
   

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<small>Posted on <?php the_time('F,j,Y');?> at <?php the_time('g:i a'); ?> by <?php the_author();?> in <?php the_category(',');?></small>
<?php the_post_thumbnail('thumbnail');?>
<?php the_excerpt();?>
<?php endwhile; endif;?>
<small>index.php</small>
</div>
</div>
</div>
</div>



<!-- start footer -->

<?php get_footer(); ?>

<!-- End footer -->
