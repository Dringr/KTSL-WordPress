<?php
/*
Template Name: Insights Template
*/
get_header(); ?>

<style>
    h5 {
        color:#090968;
    }
</style>

<?php get_template_part( 'template-parts/featured-image-insight' ); ?>

<!-- INSIGHTS SECTION -->
<section class="section--small">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell large-8">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
      <div class="cell large-3 large-offset-1">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/svg/Download.svg" alt="" width="50px;" style="padding-bottom: 2rem;">
        <p class="text--subtitle" style="padding-bottom: 2rem;font-size:1.4rem;">Download the demo</p>
        <label>
          <input class="form form--grey" type="text" placeholder="Name" />
        </label>
        <label>
          <input class="form form--grey" type="text" placeholder="Email" />
        </label>
        <label>
          <input class="form form--grey" type="text" placeholder="Company" />
        </label>
        <p class="margin-bottom-0"><small>For futher information on how we process your data, refer to the <a
              href="">Privacy Statement</a></small></p>
        <a href="" class="button tertiary" style="padding: 0.8rem 3.5rem;">Send</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();