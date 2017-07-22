<?php
/**
 * Theme: Earthlings
 *
 * The default template used for displaying page and article content. Note that certain
 * pages, index, articles may use a different template.
 *
 * @package earthlings
 */
?>
	<?php // Filter old events
	$event_start = get_post_meta( get_the_ID(), '_event_start_date' );

	$time = strtotime($event_start[0]);
	if ($event_start[0] == '' || date('Y-m-d', $time) > date('Y-m-d')) { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'home-post-block'); ?>>

		<?php
		/*
		 * For index pages, display the thumbnail and excerpt
		 */
		?>
		<?php if ( !is_singular() ) : ?>

			<?php if ( has_post_thumbnail() AND !is_search() ) : ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

					<?php the_post_thumbnail( 'post-thumbnail' , $attr = array( 'class'=>'thumbnail img-responsive post-thumbnail' ) ); ?>
					</a>
				</div><!-- .post-thumnail -->
			<?php endif; ?>

			<!--<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>--><!-- .entry-summary -->

			<?php get_template_part( 'content', 'post-header' ); ?>

		<?php
		/*
		 * For non-index pages (single posts and pages), display the full content
		 */
		?>
		<?php else : ?>
			<div id="xsbf-entry-content" class="entry-content">

				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'earthlings' ) ); ?>

				<?php get_template_part( 'content', 'post-footer' ); ?>

				<?php // If multiple pages, display next/previous page links ?>
				<?php get_template_part( 'content', 'page-nav' ); ?>

			</div><!-- .entry-content -->

		<?php endif; ?>

	</article><!-- #post-## -->

	<?php }; ?>
