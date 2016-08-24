<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Nectar Shakir | Web Design | Web Development | UX Experience | Seattle, WA">
<head>
  <title><?php bloginfo('description'); ?> | <?php bloginfo('name') ?>Website Redesign | Seattle, WA</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<div id="main-nav">
    <a href="home.html"><h1>I <span class="title">AM</span> AN EDUCATOR</h2></a>

    <div id="nav-items">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'main-nav', 'items-wrap' => '<ul id="nav-items"</ul>', ) ); ?>    </div>
</div>  <div id="wrapper">
