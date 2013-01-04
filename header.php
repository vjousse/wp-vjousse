<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php the_title(); ?></title>

  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <!-- Included CSS Files (Compressed) -->
  <!--<link rel="stylesheet" href="stylesheets/foundation.min.css">-->
  <link rel="stylesheet" href="stylesheets/app.css">
  <?php wp_head(); ?>
</head>
<body>

    <div class="row">
        <div class="header">
            <div class="twelve columns">
                <div class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
                <p class="subtitle"><?php bloginfo('description'); ?></p>
                <hr />
            </div>
        </div>

        <div class="content">

