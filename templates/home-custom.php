<?php
/*
Template Name: HOMEPAGE
*/
get_header(); ?>

    <?php get_template_part( 'parts/featured-image' ); ?>

        <div class="row">
            <div class="small-12 large-12 columns" role="main">

                <?php /* Start loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article <?php post_class() ?> id="post-
                            <?php the_ID(); ?>">
                                <header>
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                </header>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                        <div class="row">
                                            <!--   tagline text entry call-->
                                            <div class="small-12 large-6 columns">
                                                <h4><?php the_field('tagline'); ?></h4>
                                            </div>
                                            <!--   right side graphic for homepage inside custom field plugin -->
                                            <div class="small-12 large-6 columns">
                                                <?php if( get_field('image') ): ?>

                                                    <img src="<?php the_field('image'); ?>" />

                                                    <?php endif; ?>
                                            </div>

                                            <!--   how it works HEADER TITLE full width of page inside custom field plugin -->
                                            <div class="small-12 large-12 columns">
                                                <h4><?php the_field('how_it_works_header'); ?></h4>
                                            </div>
                                            <!--   how it works text full width of page inside custom field plugin -->
                                            <div class="small-12 large-12 columns">
                                                <p>
                                                    <?php the_field('how_it_works_text'); ?>
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                <footer>
                                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                                        <p>
                                            <?php the_tags(); ?>
                                        </p>
                                </footer>
                                <?php comments_template(); ?>
                        </article>
                        <?php endwhile; // End the loop ?>

            </div>
        </div>

        <?php get_footer(); ?>