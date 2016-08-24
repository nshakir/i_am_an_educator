<div class="sidebar">
  <div class="border-sidebar">
    <h3>Search Topics</h3>
 <?php get_search_form();?>
<?php if ( !function_exists('sidebar') || !dynamic_sidebar('sidebar_subpage') ) : ?>
  <h3>Search By Month</h3>
  <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
    <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option>
    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
  </select>
<?php endif; ?>
</div>



</div>
