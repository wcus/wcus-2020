<?php
/**
 * Functions and definitions for WCUS 2020.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wcus-2020
 */

/**
 * Turn on "new" features for this local site. New features are enabled based on time of site
 * creation, approximated based on ID number in the wordcamp.org network. That doesn't map to
 * local sites, so there is difference in markup for some features if we don't whitelist the ID.
 *
 * Change this to the Site ID of your local development site (though it will likely be 47 if
 * this is the first additional site you've created)
 */
function wcus_2020_enable_features( $sites ) {
	$sites[] = 47;
	$sites[] = 49;
	return $sites;
}
add_filter( 'wcpt_speaker_post_avatar_enabled_site_ids',       'wcus_2020_enable_features' );
add_filter( 'wcpt_session_post_speaker_info_enabled_site_ids', 'wcus_2020_enable_features' );
add_filter( 'wcpt_session_post_slides_info_enabled_site_ids',  'wcus_2020_enable_features' );
add_filter( 'wcpt_session_post_video_info_enabled_site_ids',   'wcus_2020_enable_features' );
add_filter( 'wcpt_speaker_post_session_info_enabled_site_ids', 'wcus_2020_enable_features' );

/**
 * Enqueue child theme style and dequeue the parent style.
 */
function wcus_2020_enqueue_styles() {
	$version = '1.0.0';
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$version = filemtime( dirname( __FILE__ ) . '/style.css' );
	}

	wp_dequeue_style( 'campsite-2017-style' );
	wp_enqueue_style( 'wcus-2020-style', get_stylesheet_directory_uri() . '/style.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', 'wcus_2020_enqueue_styles', 12 );

// Enqueue a mock subscription widget (Jetpack requires a live site).
require_once __DIR__ . '/mock-widget-subscriptions.php';
