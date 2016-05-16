<?php get_header(); ?>
<div id="content">
 <div class="flexslider">
  <ul class="slides">
    <li><img src="<?php bloginfo('template_directory'); ?>/images/slide1.png" width="850px"height="393px"/></li>
    <li><img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" width="850px"height="393px" /></li>
  </ul>
</div>
 <div id="welcome">
  <h2>welcome</h2>
  <h4>MORDERN ENVIORNMENT, CAREFULLY CRAFTED COFFEE, <br>FRESHLY-MADE CREPES AND MUCH MORE.</br></h4></div>
 <div id="CTA">
  <div id="widgets">
  <p class="title">our story</p>
  <?php if (have_posts() ):while(have_posts()):the_post();?><!-- start the loop-->
  <?php the_content('');?><!-- get the home page content-->
  <?php endwhile;endif;?><!-- end the loop-->
<p class="button"><a href="easterncafehomepage.html">read more</a></p>
  </div>
  <div id="widgets">
  <p class="title">Lastest postings</p>
  <ul>
  <?php rewind_posts();?><!-- stop loop1-->
  <?php query_posts('showposts=4');?>
  <?php while(have_posts()):the_post();?><!-- start loop2-->
  <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
    <?php endwhile;?>     
  </ul>
  <p class="button"><a href="easterncafehomepage.html">read more</a></p>
  </div>
  <div id="widgets">
  <p class="title">our menu</p>
  <img src="<?php bloginfo('template_directory'); ?>/images/section2.png">
  <p class="button"><a href="easterncafehomepage.html">read more</a></p>
  </div>
 </div>
</div>



<!-- start footer -->

<?php get_footer(); ?>

<!-- End footer -->
