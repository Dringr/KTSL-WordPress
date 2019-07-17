<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>

<header style="height:50vh;" class="site-hero site-hero--single" 
role="banner" 
data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], 
[<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], 
[<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], 
[<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]" 
style=" background-size: cover;background-repeat: no-repeat;">

</header>


<?php endif;
