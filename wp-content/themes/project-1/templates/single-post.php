<?php
/*
Template Name: Post Template
Template Post Type: post
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop.
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on">Posted on <?php the_date(); ?></span>
                        <span class="byline"> by <?php the_author(); ?></span>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    // Display the post content.
                    the_content();
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

        <?php
        // End the loop.
        endwhile;
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>