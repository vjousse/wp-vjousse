<?php get_header(); ?>
<div class="main">
  <h1>Catégorie : <?php single_cat_title(); ?></h1>
  <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
