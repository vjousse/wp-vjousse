<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="twelve columns">

        <div class="postdetails">
            <h1><?php the_title(); ?></h1>
            <p>Posté le <strong><?php the_date(); ?></strong> par <strong><?php the_author(); ?></strong>.</p>
        </div>

        <?php the_content(); ?>
<hr style="padding-bottom: 20px;"/>
<div class="social-button-container">

<div class="SocialCustomMenu">
<span class="share_top_text">Partagez ce contenu sur </span><a class="scmTwitter" href="http://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?> via @vjousse "title="Tweet this!">Twitter</a>
<a class="scmFacebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?> - <?php echo wp_get_shortlink();?> "title="Share on Facebook!">Facebook</a>
<a class="scmGoogleplus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false; "title="Share on Google +!">Google +</a>
  <a class="scmPinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?> - <?php echo wp_get_shortlink();?> "title="Share on Pinterest!">Pinterest</a></a>
</div>
</div>
        <p style="padding-top: 15px"><strong>Abonnez-vous à la Newsletter</strong> pour être automatiquement tenu au courant des nouveautés !</p>
        <?php $widgetNL = new WYSIJA_NL_Widget(true);
        echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php')); ?>

    </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
