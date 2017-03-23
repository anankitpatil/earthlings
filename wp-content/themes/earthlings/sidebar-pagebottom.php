<?php
/**
 * Theme: Earthlings
 *
 * The "sidebar" for the bottom of the page (before the widgetized footer area). If no
 * widgets added AND preivewing the theme, then display some widgets as samples. Once the
 * theme is actually in use, it will be empty until the user adds some actual widgets.
 *
 * @package earthlings
 */
?>
<!--
<?php
global $xsbf_theme_options;

/* If page bottom "sidebar" has widgets, then display them */
$sidebar_pagebottom = get_dynamic_sidebar( 'sidebar-4' );
$sidebar_pagebottom = apply_filters( 'xsbf_pagebottom', $sidebar_pagebottom );

if ( $sidebar_pagebottom ) :
?>
	<div id="sidebar-pagebottom" class="sidebar-pagebottom">
		<?php //echo apply_filters( 'xsbf_pagebottom', $sidebar_pagebottom ); ?>
		<?php echo $sidebar_pagebottom; ?>
	</div>

<?php
/* Otherwise, if user is previewing this theme, then show an example */
elseif ( $xsbf_theme_options['sample_widgets'] ) :
?>
	<div id="sidebar-pagebottom" class="sidebar-pagebottom">

		<aside id="sample-text" class="widget widget_text section bg-lightgreen text-center clearfix">
		<div class="container">
		<h2 class="widget-title"><?php _e( 'THIS IS A CALL TO ACTION AREA', 'earthlings' ); ?></h2>
		<div class="textwidget">
		<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		<p><?php _e( "This is just an example shown for the theme preview. You can add text widgets here to put whatever you'd like.", 'earthlings' ); ?></p>
		<p><button type="button" class="btn btn-hollow btn-lg"><?php _e( 'Call To Action Button', 'earthlings' ); ?></button></p>
		</div>
		</div>
		</div>
		</div>
		</aside>

	</div>

<?php endif;?>
-->
