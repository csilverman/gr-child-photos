<?php
/**
 * "Small" layout for Display Posts Shortcode
 *
 * @package      StudyFinds2018
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

global $wp_query;
$wp_query->is_singular = false;
require get_template_directory() . '/template-parts/content.php';


/*
echo '<article class="post-summary small">';
	echo '<h2 class="entry-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
echo '</article>';
*/
