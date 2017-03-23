<?php
/**
 * Theme: Earthlings
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package earthlings
 */
?>
	</div><!-- #content -->

	<?php // Page bottom (before footer) widget area
	get_sidebar( 'pagebottom' );
	?>

	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">

	<?php // Footer "sidebar" widget area (1 to 4 columns supported)
	get_sidebar( 'footer' );
	?>

	<?php // Check for footer navbar (optional)
	global $xsbf_theme_options;
	$nav_menu = null;
	if ( function_exists('has_nav_menu') AND has_nav_menu( 'footer' ) ) {
		$nav_menu = wp_nav_menu(
			array( 'theme_location' => 'footer',
			'container_div' 		=> 'div', //'nav' or 'div'
			'container_class' 		=> '', //class for <nav> or <div>
			'menu_class' 			=> 'list-inline dividers', //class for <ul>
			'walker' 				=> new wp_bootstrap_navwalker(),
			'fallback_cb'			=> '',
			'echo'					=> false, // we'll output the menu later
			'depth'					=> 1,
			)
		);

	// If not, default one
	} elseif ( $xsbf_theme_options['sample_footer_menu'] ) {
		$nav_menu = '
		<div class="sample-menu-footer-container">
		<ul id="sample-menu-footer" class="list-inline dividers">
		<li id="menu-item-sample-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-sample-1"><a class="smoothscroll" title="'
		.__( 'Back to top of page', 'earthlings' )
		//.'" href="#page"><span class="fa fa-angle-up"></span> '
		.'" href="#page">';

		// Load a different up arrow icon, depending on what font icon set is loaded
		if ( wp_style_is( 'font-awesome', 'done' ) ) {
			$nav_menu .= '<span class="fa fa-angle-up"></span> ';
		} else {
			$nav_menu .= '<span class="glyphicon glyphicon-menu-up"></span> ';
		}
		$nav_menu .= __( 'Top', 'earthlings' )
		.'</a></li>';

		$nav_menu .= '<li id="menu-item-sample-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sample-2"><a title="'
		.__( 'Home', 'earthlings' )
		.'" href="' . get_home_url() . '">'
		.__( 'Home', 'earthlings' )
		.'</a></li>
		</ul>
		</div>';
	} //endif has_nav_menu()
?>

	<?php // Check for site credits (can be overriden in a child theme)
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '<span class="credits-copyright">&copy; %1$s %2$s</span>', 'earthlings' ),
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>'
	);
	$site_credits = apply_filters( 'xsbf_credits', $site_credits );
 	?>

	<?php // If either footer nav or site credits, display them
	if ( $nav_menu OR $site_credits ) : ?>
	<div class="after-footer">
	<div class="container">

		<?php // Footer nav menu
		if ( $nav_menu ) : ?>
			<div class="footer-nav-menu text-center">
			<nav id="footer-navigation" class="secondary-navigation" role="navigation">
				<h1 class="menu-toggle sr-only"><?php _e( 'Footer Menu', 'earthlings' ); ?></h1>
				<?php echo $nav_menu; ?>
			</nav>
			</div><!-- .footer-nav-menu -->
		<?php endif; ?>

		<div class="social text-center">
			<a href="mailto:earthlings.net.in@gmail.com"><i class="fa fa-envelope-o"></i>&nbsp;earthlings.net.in@gmail.com</a>
			<a href="tel:09860344411"><i class="fa fa-phone"></i>&nbsp;+91 98603 44411</a>
			<br />
			<a href="https://www.facebook.com/earthlings.net.in" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/_Earthlings_" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com/earthlings.net.in/" target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="https://in.pinterest.com/earthlings774" target="_blank"><i class="fa fa-pinterest"></i></a>
		</div><!-- .social -->

		<div id="site-credits" class="site-credits text-center">
			<?php echo $site_credits; ?>
		</div><!-- .site-credits -->

	</div><!-- .container -->
	</div><!-- .after-footer -->
	<?php endif; ?>

	<?php get_template_part( 'svg', 'footer' ); ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
