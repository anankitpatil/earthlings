<?php
/**
 * Theme: Earthlings.
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<?php get_sidebar('home'); ?>

<?php if (is_home()) {
    get_template_part('svg', 'home');
    get_template_part('static', 'home');
} elseif (is_category('Access Bars')) {
    get_template_part('svg', 'access-bars');
    get_template_part('static', 'access-bars');
} elseif (is_category('Access Consciousness')) {
    get_template_part('svg', 'access-consciousness');
    get_template_part('static', 'access-consciousness');
} elseif (is_category('Dance Movement Therapy')) {
    get_template_part('svg', 'dance-movement-therapy');
    get_template_part('static', 'dance-movement-therapy');
} elseif (is_category('Drum Circles')) {
    get_template_part('svg', 'drum-circles');
    get_template_part('static', 'drum-circles');
} elseif (is_category('Peer Group Theatre')) {
    get_template_part('svg', 'group-theatre');
    get_template_part('static', 'group-theatre');
} elseif (is_category('Spoken Word')) {
    get_template_part('svg', 'spoken-word');
    get_template_part('static', 'spoken-word');
} elseif (is_category('Story Telling')) {
    get_template_part('svg', 'story-telling');
    get_template_part('static', 'story-telling');
} elseif (is_category('Visual Art Therapy')) {
    get_template_part('svg', 'visual-art-therapy');
    get_template_part('static', 'visual-art-therapy');
} elseif (is_category('Art-Based Therapies')) {
    get_template_part('svg', 'art-based-therapies');
    get_template_part('static', 'art-based-therapies');
} elseif (is_category('Clinical Hypnotherapy')) {
    get_template_part('svg', 'clinical-hypnotherapy');
    get_template_part('static', 'clinical-hypnotherapy');
} elseif (is_category('Community Events')) {
    get_template_part('svg', 'community-events');
    get_template_part('static', 'community-events');
};?>

<div class="container">
<div id="main-grid" class="row">

	<section id="primary" class="content-area col-lg-12">
		<main id="main" class="site-main <?php if (is_home() || is_category()) {
            echo 'root-main';
        } ?>" role="main">
			<?php
            // Ger query for modification
            global $query_string;
            parse_str($query_string, $args);

            // Add event post type
            $args['post_type'] = array('post', 'event');

            // Add category events
            if (is_category()) {
                //$args['event-categories'] = $args['category_name'];

                if (strpos($args['category_name'], '/') !== false) {
                    $terms = substr($args['category_name'], strpos($args['category_name'], '/') + 1);
                } else {
                    $terms = $args['category_name'];
                }
                $args['tax_query'] = array(
                                        'relation' => 'OR',
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => $terms,
                                        ),
                                        array(
                                            'taxonomy' => 'event-categories',
                                            'field' => 'slug',
                                            'terms' => $terms,
                                        ),
                                    );

                unset($args['category_name']);
            }

            query_posts($args);

            if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php
                    if (get_post_format() != 'page' and get_post_format() != 'post' and get_post_format() != 'event') {
                        /* Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that
                         * will be used instead.
                         */
                        get_template_part('content', get_post_type());
                    } else {
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that
                         * will be used instead.
                         */
                        get_template_part('content', get_post_format());
                    }
                    ?>

				<?php endwhile; ?>

				<?php get_template_part('content', 'index-nav'); ?>

			<?php else : ?>

				<?php get_template_part('no-results', 'index'); ?>

			<?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

	<?php // get_sidebar(); ?>

</div><!-- .row -->
<div class="row">
	<div class="col-lg-12 text-center bottom-arrow">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="236.4px" height="237.6px" viewBox="0 0 236.4 237.6" style="enable-background:new 0 0 236.4 237.6;" xml:space="preserve">
			<style type="text/css">
				.sg0 {
					fill: none;
					stroke: #000000;
					stroke-width: 0.75;
					stroke-linecap: round;
					stroke-linejoin: round;
				}
				.sg1 {
					fill: none;
					stroke: #000000;
					stroke-width: 0.75;
					stroke-miterlimit: 10;
				}
				.sg2 {
					fill: none;
					stroke: #000000;
					stroke-width: 0.75;
					stroke-miterlimit: 10;
					stroke-dasharray: 5.4598, 5.4598;
				}
			</style>
			<g id="XMLID_14_">
				<circle id="XMLID_70_" class="sg0" cx="53.4" cy="27.9" r="4.7" />
				<circle id="XMLID_69_" class="sg0" cx="66.5" cy="27.9" r="4.7" />
				<circle id="XMLID_68_" class="sg0" cx="27.9" cy="65.1" r="4.7" />
				<circle id="XMLID_67_" class="sg0" cx="27.9" cy="52" r="4.7" />
				<circle id="XMLID_66_" class="sg0" cx="43.6" cy="152.5" r="11.1" />
				<circle id="XMLID_65_" class="sg0" cx="43.6" cy="152.5" r="6.3" />
				<g id="XMLID_56_">
					<path id="XMLID_64_" class="sg1" d="M49.1,48.1l8.5,8.5v-12C54.5,44.8,51.6,46,49.1,48.1z" />
					<path id="XMLID_63_" class="sg1" d="M60.5,44.5v12l8.5-8.5C66.6,46,63.6,44.8,60.5,44.5z" />
					<path id="XMLID_62_" class="sg1" d="M43.6,58.6h12l-8.5-8.5C45.1,52.5,43.9,55.4,43.6,58.6z" />
					<path id="XMLID_61_" class="sg1" d="M62.5,58.6h12c-0.3-3.1-1.5-6.1-3.5-8.5L62.5,58.6z" />
					<path id="XMLID_60_" class="sg1" d="M62.5,61.4l8.5,8.5c2-2.4,3.2-5.4,3.5-8.5H62.5z" />
					<path id="XMLID_59_" class="sg1" d="M43.6,61.4c0.3,3.1,1.5,6.1,3.5,8.5l8.5-8.5H43.6z" />
					<path id="XMLID_58_" class="sg1" d="M60.5,63.4v12c3.1-0.3,6.1-1.5,8.5-3.5L60.5,63.4z" />
					<path id="XMLID_57_" class="sg1" d="M49.1,71.9c2.4,2,5.4,3.2,8.5,3.5v-12L49.1,71.9z" />
				</g>
				<g id="XMLID_49_">
					<path id="XMLID_55_" class="sg0" d="M86,72.5c-3.8-1.5-6.8-5.2-7.4-9.8c-0.6-4.6,1.2-8.9,4.4-11.4c3.8,1.5,6.8,5.2,7.4,9.8
								C91.1,65.6,89.2,69.9,86,72.5z" />
					<path id="XMLID_54_" class="sg0" d="M85,66.3c0,0,2.1-19.8-12.3-22.7" />
					<path id="XMLID_53_" class="sg0" d="M117.2,59.6c-3.4,2.2-8.1,2.6-12.3,0.5c-4.1-2.1-6.6-6.1-6.8-10.2c3.4-2.2,8.1-2.6,12.3-0.5
								S117,55.5,117.2,59.6z" />
					<path id="XMLID_52_" class="sg0" d="M108.6,54.9c0,0-11.2-9.1-23.2-7.6" />
					<path id="XMLID_51_" class="sg0" d="M107.8,82c-4.1-0.2-8.1-2.7-10.2-6.9c-2.1-4.1-1.7-8.8,0.5-12.2c4.1,0.2,8.1,2.7,10.2,6.9
								C110.4,73.9,110.1,78.6,107.8,82z" />
					<path id="XMLID_50_" class="sg0" d="M104.5,73.4c0,0-11.8-23.9-24.8-27.3" />
				</g>
				<g id="XMLID_42_">
					<path id="XMLID_48_" class="sg0" d="M72.6,88.7c-1.5-3.8-5.2-6.8-9.8-7.4c-4.6-0.6-8.9,1.2-11.4,4.4c1.5,3.8,5.2,6.8,9.8,7.4
								C65.7,93.8,70.1,91.9,72.6,88.7z" />
					<path id="XMLID_47_" class="sg0" d="M66.5,87.7c0,0-19.8,2.1-22.7-12.3" />
					<path id="XMLID_46_" class="sg0" d="M59.8,119.9c2.2-3.4,2.6-8.1,0.5-12.3s-6.1-6.6-10.2-6.8c-2.2,3.4-2.6,8.1-0.5,12.3
								S55.7,119.7,59.8,119.9z" />
					<path id="XMLID_45_" class="sg0" d="M55,111.3c0,0-9.1-11.2-7.6-23.2" />
					<path id="XMLID_44_" class="sg0" d="M82.1,110.5c-0.2-4.1-2.7-8.1-6.9-10.2s-8.8-1.7-12.2,0.5c0.2,4.1,2.7,8.1,6.9,10.2
								C74,113.1,78.7,112.8,82.1,110.5z" />
					<path id="XMLID_43_" class="sg0" d="M73.6,107.2c0,0-23.9-11.8-27.3-24.8" />
				</g>
				<line id="XMLID_41_" class="sg1" x1="43.6" y1="141.5" x2="43.6" y2="75.4" />
				<circle id="XMLID_40_" class="sg0" cx="150.2" cy="43.6" r="11.1" />
				<circle id="XMLID_39_" class="sg0" cx="150.2" cy="43.6" r="6.3" />
				<line id="XMLID_38_" class="sg1" x1="139.1" y1="43.6" x2="73.1" y2="43.6" />
				<g id="XMLID_36_">
					<g>
						<line class="sg1" x1="236.4" y1="43.6" x2="233.4" y2="43.6" />
						<line class="sg2" x1="228" y1="43.6" x2="176.1" y2="43.6" />
						<line class="sg1" x1="173.4" y1="43.6" x2="170.4" y2="43.6" />
					</g>
				</g>
				<g id="XMLID_34_">
					<g>
						<line class="sg1" x1="43.6" y1="237.6" x2="43.6" y2="234.6" />
						<line class="sg2" x1="43.6" y1="229.1" x2="43.6" y2="177.2" />
						<line class="sg1" x1="43.6" y1="174.5" x2="43.6" y2="171.5" />
					</g>
				</g>
				<path id="XMLID_33_" class="sg0" d="M48.6,37.9h59.6h0.7c13.4,0,21.5-19.5,8.8-32.2c-7.1-7.1-18.6-7.1-25.7,0
							c-5.7,5.7-5.7,14.9,0,20.6c4.5,4.5,11.9,4.5,16.5,0c3.6-3.6,3.6-9.5,0-13.2c-2.9-2.9-7.6-2.9-10.5,0c-2.3,2.3-2.3,6.1,0,8.4
							c1.9,1.9,4.9,1.9,6.7,0c1.5-1.5,1.5-3.9,0-5.4" />
				<line id="XMLID_32_" class="sg0" x1="43.6" y1="37.9" x2="32.1" y2="37.9" />
				<path id="XMLID_31_" class="sg0" d="M37.9,48.6v59.6v0.7c0,13.4-19.5,21.5-32.2,8.8c-7.1-7.1-7.1-18.6,0-25.7
							c5.7-5.7,14.9-5.7,20.6,0c4.5,4.5,4.5,11.9,0,16.5c-3.6,3.6-9.5,3.6-13.2,0c-2.9-2.9-2.9-7.6,0-10.5c2.3-2.3,6.1-2.3,8.4,0
							c1.9,1.9,1.9,4.9,0,6.7c-1.5,1.5-3.9,1.5-5.4,0" />
				<line id="XMLID_30_" class="sg0" x1="37.9" y1="43.6" x2="37.9" y2="32.1" />
				<line id="XMLID_29_" class="sg0" x1="72.6" y1="73" x2="90" y2="91" />
				<line id="XMLID_28_" class="sg0" x1="90" y1="79.3" x2="78.3" y2="91" />
			</g>
		</svg>
	</div>
	<div class="col-lg-12 text-center break-flower-footer">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
			<style type="text/css">
				.sy0 {
					fill: none;
					stroke: #000000;
					stroke-linecap: round;
					stroke-linejoin: round;
					transform-origin: center center;
				}
			</style>
			<g id="XMLID_673_">
				<path id="XMLID_676_" class="sy0 fa-spin fa-fw" d="M25.5,17.6c1.4,0,2.6-1.2,2.6-2.6s-1.2-2.6-2.6-2.6c-0.4,0-0.7,0.1-1,0.2
				c0-0.1-0.1-0.3-0.1-0.4c0.3,0,0.7-0.2,1-0.3c1.2-0.7,1.6-2.3,0.9-3.5S24,6.7,22.8,7.4c-0.3,0.2-0.6,0.4-0.8,0.7
				C22,8.1,21.9,8,21.9,8c0.3-0.2,0.5-0.5,0.7-0.8c0.7-1.2,0.3-2.8-0.9-3.5s-2.8-0.3-3.5,0.9c-0.2,0.3-0.3,0.6-0.3,1
				c-0.1,0-0.3-0.1-0.4-0.1c0.1-0.3,0.2-0.7,0.2-1c0-1.4-1.2-2.6-2.6-2.6c-1.4,0-2.6,1.2-2.6,2.6c0,0.4,0.1,0.7,0.2,1
				c-0.1,0-0.3,0.1-0.4,0.1c0-0.3-0.2-0.7-0.3-1c-0.7-1.2-2.3-1.6-3.5-0.9C7.1,4.4,6.7,6,7.4,7.2C7.6,7.5,7.9,7.8,8.1,8
				C8.1,8,8,8.1,8,8.1C7.8,7.9,7.5,7.6,7.2,7.4C6,6.7,4.4,7.1,3.7,8.4s-0.3,2.8,0.9,3.5c0.3,0.2,0.6,0.3,1,0.3c0,0.1-0.1,0.3-0.1,0.4
				c-0.3-0.1-0.7-0.2-1-0.2c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6c0.4,0,0.7-0.1,1-0.2c0,0.1,0.1,0.3,0.1,0.4c-0.3,0-0.7,0.2-1,0.3
				c-1.2,0.7-1.6,2.3-0.9,3.5s2.3,1.6,3.5,0.9c0.3-0.2,0.6-0.4,0.8-0.7C8,21.9,8.1,22,8.1,22c-0.3,0.2-0.5,0.5-0.7,0.8
				c-0.7,1.2-0.3,2.8,0.9,3.5c1.2,0.7,2.8,0.3,3.5-0.9c0.2-0.3,0.3-0.6,0.3-1c0.1,0,0.3,0.1,0.4,0.1c-0.1,0.3-0.2,0.7-0.2,1
				c0,1.4,1.2,2.6,2.6,2.6c1.4,0,2.6-1.2,2.6-2.6c0-0.4-0.1-0.7-0.2-1c0.1,0,0.3-0.1,0.4-0.1c0,0.3,0.2,0.7,0.3,1
				c0.7,1.2,2.3,1.6,3.5,0.9c1.2-0.7,1.6-2.3,0.9-3.5c-0.2-0.3-0.4-0.6-0.7-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.2,0.3,0.5,0.5,0.8,0.7
				c1.2,0.7,2.8,0.3,3.5-0.9s0.3-2.8-0.9-3.5c-0.3-0.2-0.6-0.3-1-0.3c0-0.1,0.1-0.3,0.1-0.4C24.8,17.5,25.2,17.6,25.5,17.6z" />
				<circle id="XMLID_675_" class="sy0" cx="15" cy="15" r="6.3" />
				<circle id="XMLID_674_" class="sy0" cx="15" cy="15" r="1.5" />
			</g>
		</svg>
	</div>
</div>
</div><!-- .container -->

<?php get_footer(); ?>
