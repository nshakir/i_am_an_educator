<div class="sidebar">
  <div class="border-sidebar">

<?php if ( !function_exists('sidebar') || !dynamic_sidebar('sidebar_subpage') ) : ?>

   <h2>Articles by month</h2>
   <ul>
      <?php wp_get_archives('title_li=&type=monthly'); ?>
   </ul>
<?php endif; ?>
</div>



</div>
