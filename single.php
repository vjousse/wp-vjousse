<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="twelve columns">

        <div class="postdetails">
            <h1><?php the_title(); ?></h1>
            <p>Posté le <strong><?php the_date(); ?></strong> par <strong><?php the_author(); ?></strong>.</p>
        </div>

        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
