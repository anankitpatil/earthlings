<?php
/**
 * Theme: Earthlings
 *
 * The Template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package earthlings
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<?php get_template_part( 'svg', 'general' ); ?>

<div class="container">
<div id="main-grid" class="row">
	<div class="col-lg-1"></div>
	<div id="primary" class="content-area col-lg-10">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-lg-1"></div>

<?php // get_sidebar(); ?>
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
