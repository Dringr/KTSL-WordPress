<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		<h2 class="text--tertiary"><?php the_title(); ?></h2>
			<div class="text--tertiary"><?php the_content(); ?>
				<?php foundationpress_entry_meta(); ?>
			</div>
		<div>
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
		</div>
	</div>
</article>
