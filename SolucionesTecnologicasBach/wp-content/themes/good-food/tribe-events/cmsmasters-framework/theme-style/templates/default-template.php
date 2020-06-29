<?php
/**
 * @cmsmasters_package 	Good Food
 * @cmsmasters_version 	1.0.4
 */


get_header();


list($cmsmasters_layout) = good_food_theme_page_layout_scheme();


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">' . "\n\t";
}


echo '<div id="tribe-events-pg-template" class="clearfix">' . "\n\t";
	tribe_events_before_html();
	tribe_get_view();
	tribe_events_after_html();
	echo '<div class="cl"></div>';
echo '</div> <!-- #tribe-events-pg-template -->' . "\n";


echo '</div>' . "\n" . 
'<!-- Finish Content -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- Start Sidebar -->' . "\n" . 
	'<div class="sidebar">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- Finish Sidebar -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- Start Sidebar -->' . "\n" . 
	'<div class="sidebar fl">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- Finish Sidebar -->' . "\n";
}


get_footer();

