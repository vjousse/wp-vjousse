<?php if (have_posts()) : ?>
<div id="posts">
  <?php while (have_posts()) : the_post(); ?>
    <div class="twelve columns">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="postdetails">Posté le <strong><?php the_date(); ?></strong> dans <?php the_category(', '); ?>.</div>

        <?php the_excerpt('Lire la suite →'); ?>
    </div>
  <?php endwhile; ?>
    <div class="six columns">
        <?php previous_posts_link("« Entrées plus récentes"); ?>
    </div>
    <div class="six columns next">
        <?php next_posts_link("Entrées plus anciennes »"); ?>
    </div>
</div>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
