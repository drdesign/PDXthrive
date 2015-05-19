<?php

/* Schedule */
add_action('init', 'ti_schedule_register');

function ti_schedule_register() {
	$labels = array(
		'name' => _x('Schedule', 'post type general name','ti'),
		'singular_name' => _x('Schedule', 'post type singular name','ti'),
		'add_new' => _x('Add New', 'photo','ti'),
		'add_new_item' => __('Add New','ti'),
		'edit_item' => __('Edit Item','ti'),
		'new_item' => __('New','ti'),
		'view_item' => __('View','ti'),
		'search_items' => __('Search','ti'),
		'not_found' =>  __('Nothing found','ti'),
		'not_found_in_trash' => __('Nothing found in Trash','ti'),
		'parent_item_colon' => ''
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-calendar',
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
		); 

	register_post_type( 'schedule' , $args );
	flush_rewrite_rules( false );

}

/* Gallery */
add_action('init', 'ti_gallery_register');

function ti_gallery_register() {
	$labels = array(
		'name' => _x('Gallery', 'post type general name','ti'),
		'singular_name' => _x('Photo', 'post type singular name','ti'),
		'add_new' => _x('Add New', 'photo','ti'),
		'add_new_item' => __('Add New photo','ti'),
		'edit_item' => __('Edit photo Item','ti'),
		'new_item' => __('New photo','ti'),
		'view_item' => __('View photo','ti'),
		'search_items' => __('Search photo','ti'),
		'not_found' =>  __('Nothing found','ti'),
		'not_found_in_trash' => __('Nothing found in Trash','ti'),
		'parent_item_colon' => ''
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-format-gallery',
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
		); 

	register_post_type( 'gallery' , $args );
	flush_rewrite_rules( false );
}

/* Testimonials  */
add_action('init', 'ti_testimonials_register');

function ti_testimonials_register() {
	$labels = array(
		'name' => _x('Testimonials', 'post type general name','codeinwp'),
		'singular_name' => _x('Testimonial', 'post type singular name','codeinwp'),
		'add_new' => _x('Add New testimonial', 'item','codeinwp'),
		'add_new_item' => __('Add New testimonial','codeinwp'),
		'edit_item' => __('Edit testimonial','codeinwp'),
		'new_item' => __('New testimonial','codeinwp'),
		'view_item' => __('View testimonial','codeinwp'),
		'search_items' => __('Search testimonial','codeinwp'),
		'not_found' =>  __('Nothing found','codeinwp'),
		'not_found_in_trash' => __('Nothing found in Trash','codeinwp'),
		'parent_item_colon' => ''
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-book-alt',
		'rewrite' => array('slug'=> 'testimonials'),
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
		); 

	register_post_type( 'testimonials' , $args );
	flush_rewrite_rules( false );

	function ti_testimonials_change_title( $title ){
		$screen = get_current_screen();

		if  ( 'testimonials' == $screen->post_type ) {
			$title = 'Enter name here';
		}

		return $title;
	}
	add_filter( 'enter_title_here', 'ti_testimonials_change_title' );


	function ti_testimonials_info_person() {
		global $post;

		$testimonial_info_person = get_post_meta($post->ID, 'testimonial_info_person', true);
		?>
		<input type="text" value="<?php echo $testimonial_info_person; ?>" name="testimonial_info_person" style="width: 100%;">
		<?php
	}

	function ti_save_testimonials_details($post_id){
		if(isset($_POST["testimonial_info_person"])) 
			update_post_meta($post_id, "testimonial_info_person", $_POST["testimonial_info_person"]);
	}
	add_action('save_post', 'ti_save_testimonials_details');

	function ti_testimonials_init(){
 		add_meta_box("ti_testimonials_info_person", "Info person", "ti_testimonials_info_person", "testimonials", "side", "low");
	}
	add_action("admin_init", "ti_testimonials_init");
}

?>