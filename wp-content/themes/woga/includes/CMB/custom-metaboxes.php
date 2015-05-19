<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
require_once 'init.php';

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

add_filter( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb2_sample_metaboxes( array $meta_boxes ) {

	/**
	 * Schedule
	 */
	$meta_boxes['schedule'] = array(
		'id'         => 'schedule',
		'title'      => __( 'Time', 'ti' ),
		'object_types'      => array( 'schedule' ), // Post type
		'context'    => 'side',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
			    'name'    => 'Day',
			    'id'      => 'schedule_day',
			    'type'    => 'select',
			    'options' => array(__( 'Sunday', 'ti' ),__( 'Monday', 'ti' ),__( 'Tuesday', 'ti' ),__( 'Wednesday', 'ti' ),__( 'Thursday', 'ti' ),__( 'Friday', 'ti' ),__( 'Saturday', 'ti' )),
			    'default' => 6,
			),
			array(
			    'name' => 'Start',
			    'id'   => 'schedule_start',
			    'type' => 'text_time',
			),
			array(
			    'name' => 'End',
			    'id'   => 'schedule_end',
			    'type' => 'text_time',
			),
		),
	);
	$meta_boxes['headline'] = array(
		'id'         => 'headline',
		'title'      => __( 'Headline', 'ti' ),
		'object_types'      => array( 'schedule' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => false, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
			    'name' => 'Headline',
			    'type' => 'text',
			    'id'   => 'schedule_headline'
			),
		),
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}