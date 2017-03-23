<?php
/**
 * Theme: Earthlings.
 *
 * Template Name: Page - No Sidebar
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 */
get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<?php get_sidebar('home'); ?>

<?php get_template_part('svg', 'general'); ?>
<?php
if (is_page()) {
    if (get_queried_object()->post_name == 'about') {
        get_template_part('static', 'about');
    }
}
?>

<div class="container">
<div id="main-grid" class="row">

	<div id="primary" class="content-area-wide col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('content', 'page'); ?>

				<?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) :
                ?>
				<div class="comments-wrap">
				<?php comments_template(); ?>
				</div><!-- .comments-wrap" -->
				<?php endif; ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
