<?php

/**
 * Template Name: Shop Page
 * Template Post Type: page
 *  */

get_header()
?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="shop-page">
            <h2><?php _e('Shop', 'textdomain'); ?></h2>
            <div class="shop-products">
                <?php
                do_action("woocommerce_before_shop_loop");
                echo do_shortcode('[products columns="3"]');
                do_action("woocommerce_after_shop_loop");
                ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer()
?>