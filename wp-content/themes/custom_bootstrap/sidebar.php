<!-- SIDEBAR -->

<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
    
<div class="col-sm-3 col-sm-offset-1 blog_sidebar">

<!-- SEARCH INPUT -->
 
  <form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="s"/>
  </form>
  
  <?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- / END SIDEBAR -->