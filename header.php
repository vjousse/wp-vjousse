<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php the_title(); ?></title>

  <!-- Included CSS Files -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700' rel='stylesheet' type='text/css'>
<body>

    <div class="row">
        <div class="header">
            <div class="twelve columns">
                <div class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
                <?php wp_nav_menu( array('theme_location' => 'header')); ?>
                <p class="subtitle"><?php bloginfo('description'); ?><span> — Mark Twain</span></p>


            </div>
        </div>

        <div class="content">

