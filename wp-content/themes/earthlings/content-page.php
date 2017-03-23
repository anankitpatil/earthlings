<?php
/**
 * Theme: Earthlings
 *
 * The template used for displaying page content in page.php
 *
 * @package earthlings
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="xsbf-entry-content" class="entry-content">

		<?php the_content(); ?>

		<?php get_template_part( 'content', 'page-nav' ); ?>

		<?php edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span> Edit', 'flat-bootstrap' ), '<footer class="entry-meta"><div class="edit-link">', '</div></footer>' ); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
