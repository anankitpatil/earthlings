<?php
/**
 * Theme: Earthlings
 *
 * The template used for displaying single post header meta (posted on, by, etc.)
 *
 * @package earthlings
 */
?>

<header class="entry-header">
	<div class="entry-meta">

		<?php // if ( !is_single() AND !is_page() ) : ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php // endif; // !is_single... ?>

		<div class="entry-tags">
			 <?php $categories = get_the_category();
			 	$taxonomies = get_terms();
				//var_dump($taxonomies);
				if ( ! empty( $categories ) ) {
					$i = 0;
					foreach ( $categories as $category ) {
						if ( $i != 0 ) echo ', ';
						echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
						$i++;
					}
				} else {
					$i = 0;
					foreach ( $taxonomies as $taxonomy ) {
						if ( $taxonomy->taxonomy == 'event-categories' ) {
							$link = '';
							$_categories = get_categories( array( 'hide_empty'=>0 ) );
							foreach ($_categories as $category) {
								if ($taxonomy->name == $category->name) $link = esc_url( get_category_link( $category->term_id ) );
							}
							if ( $i != 0 ) echo ', ';
							echo '<a href="' . $link . '">' . esc_html( $taxonomy->name ) . '</a>';
							$i++;
						}
					}
				} ?>
		</div>

		<?php if ( is_single() /*OR is_home()*/ ) : ?>

			<?php $the_date = get_the_date(); ?>
			<span class="posted-on"><!--<span class="glyphicon glyphicon-calendar"></span>&nbsp;-->
				<?php echo $the_date; ?>
			</span>

			&nbsp;/&nbsp;

			<?php // if ( is_multi_author() ) : ?>
	 			<!--&nbsp;|&nbsp;<span class="by-line">-->
	 			<!--<span class="glyphicon glyphicon-user"></span>&nbsp;-->
	 			<span class="author vcard">
					<?php the_author(); // the_author_posts_link(); ?>
				</span>
			<!--</span>-->
			<?php // endif; // is_multi_author ?>

		<?php //endif; // is_single ?>

		<!--<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			 &nbsp;|&nbsp;<span class="comments-link">
			 <span class="glyphicon glyphicon-comment"></span>&nbsp;
			 <?php comments_popup_link( __( 'Leave a comment', 'earthlings' ), __( '1 Comment</span>', 'earthlings' ), __( '% Comments', 'earthlings' ), 'smoothscroll' ); ?>
			 </span>
		<?php endif; // ! post_password... ?>-->

		<!--&nbsp;|&nbsp;<span class="comments-link">-->

		<?php endif; // is_single ?>

		<?php if ( is_singular( 'event' ) ) : ?>

			<div class="event-meta">

				<?php $meta = get_post_meta( $post->ID );  ?>
				<span><?php echo date( 'h:i A', strtotime( $meta['_event_start_time'][0] ) ); ?></span> to <span><?php echo date( 'h:i A', strtotime( $meta['_event_end_time'][0] ) ); ?></span>
				on the
				<span><?php echo date('jS F Y', strtotime( $meta['_event_start_date'][0] ) ); ?></span>
				<?php if ( $meta['_event_start_date'][0] != $meta['_event_end_date'][0] ) : ?>
					to <span><?php echo date('jS F Y', strtotime( $meta['_event_end_date'][0] ) ); ?></span>
				<?php endif; ?>

			</div>

			<div class="event-map">

				<?php $location = em_get_location( $meta['_location_id'][0] ); // var_dump($location); ?>

				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
				<div id='gmap_canvas' class="map"></div>
				<script type='text/javascript'>
				    function init_map() {
				        var myOptions = {
				            zoom: 12,
							scrollwheel: false,
				            center: new google.maps.LatLng( <?php echo $location->location_latitude; ?>, <?php echo $location->location_longitude; ?> ),
				            mapTypeId: google.maps.MapTypeId.ROADMAP
				        };
				        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
				        marker = new google.maps.Marker({
				            map: map,
				            position: new google.maps.LatLng( <?php echo $location->location_latitude; ?>, <?php echo $location->location_longitude; ?> )
				        });
				        infowindow = new google.maps.InfoWindow({
				            content: '<strong> <?php echo $location->location_name; ?> </strong> <br /> <?php echo str_replace( ', ', '<br />', $location->location_address ); ?> <br /> <?php echo $location->location_town . ', ' . $location->location_state; ?>'
				        });
				        google.maps.event.addListener(marker, 'click', function() {
				            infowindow.open(map, marker);
				        });
				        infowindow.open(map, marker);
				    }
				    google.maps.event.addDomListener(window, 'load', init_map);
				</script>

			</div>

		<?php endif; // Event details ?>

	</div><!-- .entry-meta -->
</header><!-- .entry-header -->
