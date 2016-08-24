<?php get_header(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/onedaystrike.jpg" height="400" width="100%">
  <div id="wrapper">
    <div id="content-wrapper">
    <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis. "</h2>

    <h2>Latest News</h2>
    <div class="border-wrapper">
      <?php rewind_posts(); // stop loop one ?>
      <?php query_posts('showposts=4'); // give directions to loop two ?>
      <?php while (have_posts()) : the_post(); // start loop two ?>
      <div id="grid-blog"><h2 class="blogs">
        <a href="<?php the_permalink(); //link to the page or posting ?>"><?php the_post_thumbnail( 'medium' ); ?></a><br>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>Posted on <?php the_time('F j, Y'); //get the time ?> in <?php the_category(', '); //get the category ?>
      <?php the_excerpt(); // get the posting's excerpt ?></div>
    <?php endwhile; // end loop two ?> </div>
      <br>
      <br>
    <h2>Fun Facts</h2>
    <div class="border-wrapper">
      <div class="cta-news">
<a href="http://www.progressive.org/news/2015/09/188303/education-jesse-hagopian"><img src="<?php bloginfo('template_url'); ?>/images/progressive_magazine_logo.gif" width=200></a>
      <p>"Hagopian’s work bringing together a large, diverse movement to combat overtesting stands out in the Seattle area"</p>
    </div>
    <div class="cta-news">
<a href="http://www.seattletimes.com/nation-world/laid-off-seattle-teacher-jesse-hagopian-lauded-for-aid-to-quake-victims/"><img src="<?php bloginfo('template_url'); ?>/images/seattle-times-logo.jpg" width=200></a>
      <p>"In the middle of this tragedy he helped restore a little of my faith in humanity"<br></p>
    </div>
      <div class="cta-news">
        <a href="http://www.yesmagazine.org/issues/education-uprising/pencils-down"><img src="<?php bloginfo('template_url'); ?>/images/yes_logo.png" width=200></a>
        <p>"It was a powerful moment"<br></p>

    </div>


<br>


  </div>





    </div>

    <div class="sidebar">
      <div class="border-sidebar">
    <h4>About</h4>
    <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/jesseheadshotkickoff.jpg" alt="<?php bloginfo('name'); ?>"/></a>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.</p>
    </div>
    <br>
    <div class="border-sidebar">
    <h4>More Than A Score</h4>
    <a href="http://www.haymarketbooks.org/pb/More-Than-a-Score" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/morethanascore.jpg" alt="<?php bloginfo('name'); ?>"/></a>
    <p>Click here to order Jesse’s book: “More Than a Score: The New Uprising Against High-Stakes Testing”</p>
    </div>
    <br>
    <div class="border-sidebar">
    <?php echo do_shortcode("[embedyt]https://www.youtube.com/watch?v=gL64chNiuJQ&width=200[/embedyt]"); ?></div>
    <br>
    <div class="border-sidebar">
    <h4>Follow Jesse on Social Media</h4>
    <ul id="social">
      <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook29.png" alt="<?php bloginfo('name'); ?>"  width="30"/></a></li>
      <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter47.png" alt="<?php bloginfo('name'); ?>"  width="30"/></a></li>
      <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/logotype46.png" alt="<?php bloginfo('name'); ?>"  width="30"/></a></li>
    </ul>
    </div>
    </div>
    <small>front-page.php</small>
<?php get_footer();?>
