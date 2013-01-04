<?php
function new_excerpt_more( $more ) {
    return ' &hellip; <a href="'. get_permalink() . '">Lire la suite &rarr;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'automatic-feed-links' );
