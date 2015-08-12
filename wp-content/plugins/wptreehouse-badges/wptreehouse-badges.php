<?php 

/*
 *	Plugin Name: Treehouse Badges Plugin
 *	Plugin URI: http://wptreehouse.com/wptreehouse-badges-plugin/
 *	Description: Provides both widgets and shortcodes to help you display your Treehouse profile badges on your website.  The official Treehouse badges plugin.
 *	Version: 1.0
 *	Author: Josh Richardson
 *	Author URI: http://joshuarichardson.com.au
 *	License: GPL2
 *
*/


/*
 *
 * Assign global variables
 *
*/

$plugin_url = WP_PLUGIN_URL . '/wptreehouse-badges';
$options = array();


/*
 *
 * Add a link to our plugin in the admin area
 * under 'Settings > Treehouse Badges'
 *
*/


function wp_treehouse_badges_menu() {

	/*
	 * Use the add_options_page function
	 * add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function )
	 *
	*/

	add_options_page(
		'Official Treehouse Badges Plugin',
		'Treehouse Badges',
		'manage_options',
		'wptreehouse-badges',
		'wptreehouse_badges_options_page'

	);


}
add_action( 'admin_menu', 'wp_treehouse_badges_menu' );


function wptreehouse_badges_options_page() {

	if( !current_user_can( 'manage_options' ) ) {

		wp_die( 'You do not have sufficient permissions to access this page' );

	}

	global $plugin_url;
	global $options;

	if( isset( $_POST['wptreehouse_form_submitted'] ) ) {
		
		$hidden_field = esc_html( $_POST['wptreehouse_form_submitted'] );

		if( $hidden_field == 'Y' ) {

			$wptreehouse_username = esc_html( $_POST['wptreehouse_username'] );

			$options['wptreehouse_username'] = $wptreehouse_username;
			$options['last_updated']         = time();

			update_option( 'wptreehouse_badges', $options );

			
		}
	}

	$options = get_option( 'wptreehouse_badges' );

	if( $options != '' ){

		$wptreehouse_username = $options['wptreehouse_username'];

	}

	require( 'inc/options-page-wrapper.php' );


}


class Wptreehouse_Badges_Widget extends WP_Widget {

	function wptreehouse_badges_widget() {
		// Instantiate the parent object
		parent::__construct( false, 'Official Treehouse Badges Widget' );
	}

	function widget( $args, $instance ) {
		// Widget output

		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		$options = get_options( 'wptreehouse_badges' );
		$wpthreehouse_profile = $options['wpthreehouse_profile'];

		require( 'inc/front-end.php' )
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options

		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);

		return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form

		$title = esc_attr( $instance['title'] );

		require( 'inc/widget-fields.php' );

	}
}

function wptreehouse_badges_register_widgets() {

	register_widget( 'Wptreehouse_Badges_Widget extends WP_Widget {
' );

}


function wptreehouse_badges_get_profile( $
 ){

	$json_feed_url = 'http://teamtreehouse.com/' . $wptreehouse_username . '.json';


	return json_feed_url;

}

add_action( 'widgets_init', 'myplugin_register_widgets' );


function wptreehouse_badges_styles() {

	wp_enqueue_style( 'wptreehouse_badges_stles', plugins_url( 'wptreehouse-badges/wptreehouse-badges.css' ) );

}
add_action( 'admin_head', 'wptreehouse_badges_styles' );




?>