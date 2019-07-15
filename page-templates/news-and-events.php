<?php
/*
Template Name: What's New?
*/
get_header(); ?>

<section class="site-hero site-hero--insights">
    <div class="hero-content">
        <h1>News & events</h1>
        <p class="text--white">
            KTSL offer Professional Services to implement, deliver and <br />
            support a range of the products from BMC with specific <br />
            expertise around the BMC Service Management Portfolio. <br />
            A range of case studies are below.
        </p>
    </div>
</section>


<!-- LATEST INSIGHTS SECTION -->
<section class="section--medium bg--large-hex-2">
    <div class="grid-container">
        <h2 class="text-center text--primary">What's new?</h2>
        <div class="news">

            <?php

    $blog_cat = array(
        'category_name' => 'blog',
        'showposts' => -1,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $blog_query = new WP_Query( $blog_cat );
    if ( $blog_query->have_posts()) {
        $i = 0; 
        while ( $blog_query->have_posts()) {
            $i++;
            $blog_query->the_post(); ?>


            <div class="news__item">
                <div class="card bg--primary card-hover blog">
                    <div class="card-image blog__item" style="height:170px;">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="card-section blog__section">
                        <h4><?php the_title(); ?></h4>
                        <?php if ($i <= 3) { // these are added and not within the 3 show posts ?>
                        <div class="text--white">
                            <?php the_excerpt(); ?>
                        </div>
                        <?php } ?>
                        <a href="<?php the_permalink(); ?>" class="button white">Discover more</a>
                    </div>
                </div>

            </div>

            <?php } ?>

            <?php } else {
        // no posts found
    }

    wp_reset_postdata(); ?>





            <div class="container">
                <h2 class="text--primary text-center padding-top-2 padding-bottom-1">Latest events</h2>
                <div class="grid-container grid-container-padded grid--demo">
                    <div class="grid-x grid-padding-x grid-margin-x small-up-1 medium-up-2 large-up-3">






                        <?php
                          $query = new WP_Query(array(
                            'post_status' => 'publish',
                            'category_name' => 'event',
                            'orderby' => 'publish_date',
                            'order' => 'ASC',
                            'posts_per_page' => 3
                          ));
                          ?>
                        <?php if ($query->have_posts()) : ?>
                        <!-- the loop -->
                        <?php while ($query->have_posts()) : $query->the_post(); ?>


                        <a href="<?php the_permalink(); ?>" class="cell flex-container">
                            <div class="flex-child-auto event__item" style="height: 100%; position:relative;">

                                <?php the_post_thumbnail(); ?>

                                <p style="position: absolute; bottom: 13px; left: 100px;"
                                    class="text--white text--subtitle">
                                    <?php the_title(); ?>
                                </p>
                                <div>
                                    <img style="position: absolute; bottom:0; left:0;"
                                        src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/svg/square-arrow.svg"
                                        alt="" width="80px;">
                                </div>
                            </div>
                        </a>

                        <?php endwhile; ?>
                        <!-- end of the loop -->
                        <?php wp_reset_postdata(); ?>
                        <?php else :  ?>
                        <p><?php _e('There are currently no events, please check back soon.'); ?></p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer();