<?php

// CUSTOM FUNCTIONS

// Function for change [...] for link to Read More in blog - posts
function custom_ex_more( $more ) {
    $link_post = get_permalink();
    return ' <a href="'. $link_post .'">Continue Reading >></a>';
}
add_filter( 'excerpt_more', 'custom_ex_more' );