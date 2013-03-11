<?php
/*
Template Name: Custom home
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="twelve columns">
        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

