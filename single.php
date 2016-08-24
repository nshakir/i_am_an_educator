<?php get_header(); ?>
<div id="wrapper">
    <div id="content-wrapper">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <article id="post-<?php the_ID(); ?>" class="post">
      <h2><?php the_title(); // get the page or posting title ?></a></h2>
      <small>Posted on <?php the_time('F j, Y'); //get the time ?> in <?php the_category(', '); //get the category ?></small>
      <?php the_post_thumbnail( 'large' ); ?></a>
      <?php the_content(''); // get the posting's excerpt ?>
      <div id="comments"><?php comments_template(); ?></div>
      <?php endwhile; endif; // end the loop ?>

<small>single.php</small>
</article>
    </div>

<?php get_sidebar(); ?>
<?php get_footer();?>
