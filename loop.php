<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="twelve columns">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="postdetails">Posté le <strong><?php the_date(); ?></strong> dans <?php the_category(', '); ?> par <strong><?php the_author(); ?></strong>.</div>

        <?php the_excerpt(); ?> ... <a href="<?php the_permalink(); ?>">Lire la suite →</a>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
