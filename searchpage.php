<?php
/**
 * This the basic file for displaying pages.
 *
 * search.php
 */

 <?php get_header(); ?>
<div id="wrapper">
    <div id="content-wrapper-subpage">

<span class="header">Search Results</span>

<section>

  <!-- loop to pull blog content -->


<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<article class="post-excerpt">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<small>

Posted on <?php the_time('F j, Y'); ?>
by <?php the_author(); ?>
in <?php the_category(', '); ?>

</small>

<?php the_excerpt(); ?>


</article>
<?php endwhile; ?>

<?php else : ?>
		<h3>Sorry, we couldn't find anything.</h3>
    	<p>Perhaps you can try another search?</p>
		<?php get_search_form(); ?>

<?php endif; //end loop?>



</section>

<aside>
      </div>
<?php get_sidebar();?>
</aside>






<?php get_footer(); ?>
