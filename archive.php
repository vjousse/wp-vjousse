<?php get_header(); ?>
<div class="main">
  <?php query_posts('posts_per_page=20'); ?>
  <?php get_template_part('loop'); ?>
</div>
<?php get_footer(); ?>
