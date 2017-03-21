  </div><!-- / MAIN BODY -->

<!-- FOOTER -->
   
  <footer class="blog_footer text-center">
  
<!-- FOOTER SIDEBARS -->
    <?php
    if ( is_active_sidebar( 'sidebar-2' ) ||
       is_active_sidebar( 'sidebar-3' ) ) :
    ?>
    <div class="container">
      <?php
      if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div class="col-sm-offset-2 col-sm-3">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
      <?php }
      if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
        <div class="col-sm-offset-2 col-sm-3">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
      <?php } ?>
    </div>
    <?php endif; ?>

<!-- / END FOOTER SIDEBARS -->
   
    <div class="end_footer">
      designed by <a href="http://brandonsco.de" target="_blank">brandons<span>CO.DE</span></a>
    </div>
    
  </footer><!-- / END FOOTER -->
    
<?php wp_footer(); ?>  
  
</body>
</html>