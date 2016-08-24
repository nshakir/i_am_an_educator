<?php get_header(); ?>
<div id="wrapper">
    <div id="content-wrapper">
      <div id="news-post">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <h3 class="header-blog"><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h3>
      <small>Posted on <?php the_time('F j, Y'); //get the time ?> in <?php the_category(', '); //get the category ?></small>
      <a href="<?php the_permalink(); //link to the page or posting ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
      <?php the_excerpt(); // get the posting's excerpt ?>
      <?php endwhile; endif; // end the loop ?>

<small>index.php</small>
  </div>
    </div>

    <?php get_sidebar();?>
<?php get_footer();?>
