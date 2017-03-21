<?php get_header(); ?>

<!-- MAIN SECTION -->

<div class="row">
 
<!-- CONTENT -->
       
  <div class="col-sm-12 blog-main">
  
<?php
  if (have_posts() ): while (have_posts() ) : the_post();
    get_template_part('content-single', get_post_format() );
   
    if ( comments_open() || get_coments_number() );
      comments_template();
          
  endwhile; endif;
?>

  </div><!-- / END CONTENT -->

</div><!-- / END MAIN SECTION -->

<?php get_footer(); ?>
