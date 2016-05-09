<?php get_header(); ?>
<div id="blogcontent">
 <div class="updatesbackground">

  <div id="ourblog">
   <div class="leftline"><img src="<?php bloginfo('template_directory'); ?>/images/decorationlineleft.png"></div>
   <p class="title"></p>
   <div class="rightline"><img src="<?php bloginfo('template_directory'); ?>/images/decorationlineright.png"></div>
  </div>
<div id="updatescontent">
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
</div>
</div>
</div>



<!-- start footer -->

<?php get_footer(); ?>

<!-- End footer -->
