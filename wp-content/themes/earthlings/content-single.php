<?php
/**
 * Theme: Earthlings
 *
 * The template used for displaying a single article (blog post) with sidebar
 *
 * @package earthlings
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'content', 'post-header' ); ?>

	<div id="xsbf-entry-content" class="entry-content">
		<?php the_content(); // wpautop( the_content(), true ); ?>

		<?php get_template_part( 'content', 'post-footer' ); ?>

		<?php get_template_part( 'content', 'page-nav' ); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
