<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();

        // Output product title
        the_title('<h1>', '</h1>');

        // Output product price
        echo '<div class="product-price">' . wc_price(get_post_meta(get_the_ID(), '_price', true)) . '</div>';

        // Output product description
        the_content();


    endwhile;
endif;

get_footer();
