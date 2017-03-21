<?php get_header(); ?>

<!-- MAIN SECTION -->

<div class="row">
 
<!-- CONTENT -->
       
  <div class="col-sm-12 blog-main">

<?php
  if (have_posts() ): while (have_posts() ) : the_post();
          
    get_template_part('content', get_post_format() );
        
  endwhile; endif;
?>

  </div><!-- / END CONTENT -->

</div><!-- / END MAIN SECTION -->

<?php get_footer(); ?>
