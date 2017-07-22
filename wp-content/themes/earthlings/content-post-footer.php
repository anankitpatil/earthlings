<?php
/**
 * Theme: Earthlings
 *
 * The template used for displaying single post footer meta (categories, tags, etc.)
 *
 * @package earthlings
 */
?>

<?php if ( ! is_search() ) : ?>

	<footer class="entry-meta">

		<?php // Event map
		if ( is_singular( 'event' ) ) : ?>

			<div class="event-map">

				<?php $meta = get_post_meta( $post->ID );  ?>
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

		<?php endif; // Event man ?>

		<?php // if ( ! function_exists( 'xsbf_categorized_blog' ) OR xsbf_categorized_blog() ) : ?>
			<?php // $categories = get_the_category_list( ', ' ); ?>
			<?php // if ( $categories ) : ?>
				<!--<span class="cat-links"><span class="glyphicon glyphicon-tag"></span>&nbsp;-->
				<?php // echo $categories; ?>
				<!--</span>-->
			<?php // endif; ?>
		<?php // endif; ?>

		<?php // the_tags( '<span class="tags-links"><span class="glyphicon glyphicon-tags"></span> &nbsp;', ', ', '</span>' ); ?>

		<?php // edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span> Edit', 'flat-bootstrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-meta -->

<?php endif; ?>
