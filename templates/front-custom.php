<?php
/*
Template Name: Front Custom
*/
get_header(); ?>

    <header id="front-hero" role="banner">
        <div class="marketing">
            <div class="tagline small-10 large-centered columns">
                <h1><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
                <div class="small-6 large-centered columns">
                    <a role="button" class="download large button show-for-medium-up" href="http://gradesavers.com/index.php/submit-assignment/">Submit Assignment</a>

                </div>
            </div>
        </div>

    </header>


    <!--full width class services for background panel-->
    <div class="services">
        <div class="row">
            <div class="small-12 large-12 columns" role="main">

                <?php /* Start loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article <?php post_class() ?> id="post-
                            <?php the_ID(); ?>">
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                        <div class="row">
                                            <!--   how it works HEADER TITLE full width of page inside custom field plugin -->
                                            <div class="small-12 large-12 large-centered columns">
                                                <h2><?php the_field('how_can_help'); ?></h2>
                                            </div>
                                            <!--   SERVICES text full width of page inside custom field plugin -->
                                            <div class="row">
                                                <div class="small-12 large-6 columns">
                                                    <i class="fa fa-file-word-o fa-3x"></i>
                                                    <h4><?php the_field('help_paper_header');?></h4>
                                                    <p>
                                                    <?php the_field('services_one_text');?>
                                                    </p>

                                                    <i class="fa fa-calculator fa-3x"></i>
                                                    <h4><?php the_field('math_tutor_header');?></h4>
                                                    <p>
                                                        <?php the_field('math_tutor_text');?>
                                                    </p>
                                                </div>

                                                <div class="small-12 large-6 columns">
                                                    <i class="fa fa-calendar fa-3x"></i>
                                                    <h4><?php the_field('services_three_header');?></h4>
                                                    <p>
                                                        <?php the_field('services_three_text'); ?>
                                                    </p>

                                                    <i class="fa fa-book fa-3x"></i>
                                                    <h4><?php the_field('services_four_header');?></h4>
                                                    <p>
                                                        <?php the_field('services_four_text'); ?>
                                                    </p>
                                                </div>
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
    </div>

    <?php get_footer(); ?>