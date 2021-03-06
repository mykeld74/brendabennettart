<?php
/**
 * Display the taxonomy for the post.
 *
 * @package Reach
 */

/* Only show this if there are categories or tags to show. */
if ( ( has_category() || has_tag() ) == false ) :
	return;
endif;

/* Hide post meta if that setting is ticked */
if ( reach_hide_post_meta() ) :
	return;
endif;
?>

<div class="meta meta-taxonomy">
	<p class="center">
		<?php if ( has_category() ) : ?>
			<span class="categories with-icon" data-icon="&#xf02c;"><?php the_category( ', ' ) ?></span>
		<?php endif ?>

		<?php if ( has_tag() ) : ?>
			<span class="tags with-icon" data-icon="&#xf15b;"><?php the_tags( '' ) ?></span>
		<?php endif ?>
	</p>
</div>
