<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>

<header style="height:100%;display: flex;align-items: center;" 
role="banner" 
data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], 
[<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], 
[<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], 
[<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]" 
style=" background-size: cover;background-repeat: no-repeat;">
    <div class="hero-content">
        <h1><?php the_title(); ?></h1>
        <p class="text--white">
            We enable you to achieve transformational, <br />
            fit-for-the-future business growth – minimising <br />
            your TCO and maximising your agility.
        </p>
    </div>
</header>


<?php endif;
