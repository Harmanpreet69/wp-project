<?php
/*
Template Name: Home page
Template Post Type: Page 
*/

get_header();
?>

<main>
    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="products">
                <?php
                // Shortcode to fetch featured products
                echo do_shortcode('[featured_products per_page="8" columns="4" orderby="date" order="desc"]');
                ?>
            </div>
        </div>
    </section>

    <section class="featured-posts">
        <div class="container">
            <h2>Featured Posts</h2>
            <?php
            $posts_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            ));

            if ($posts_query->have_posts()) :
                while ($posts_query->have_posts()) : $posts_query->the_post();
            ?>
                    <div class="post">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No featured posts found.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>