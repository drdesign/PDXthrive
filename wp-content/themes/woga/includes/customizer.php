<?php

function lawyeria_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

	/*
    ** Contact Settings
    */
    $wp_customize->add_section( 'contact_settings' , array(
    	'title'       => __( 'Contact - Settings:', 'ti' ),
    	'priority'    => 250,
	) );

		/* Title Panel*/
		$wp_customize->add_setting( 'ti_contact_panel_title',array('default' => __('Get in Touch with Us','ti')) );
		$wp_customize->add_control( 'ti_contact_panel_title', array(
		    'label'    => __( 'Contact panel title:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_contact_panel_title',
			'priority' => '1',
		) );

		/* Content Panel*/
		$wp_customize->add_setting( 'ti_contact_panel_content',array('default' => __('You have a question or only want to contact us? Please use the form below.','ti')) );
		$wp_customize->add_control( 'ti_contact_panel_content', array(
		    'label'    => __( 'Contact panel description:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_contact_panel_content',
			'priority' => '2',
		) );

		/* Telephone - Title */
		$wp_customize->add_setting( 'ti_telephone_title',array('default' => __('Phone','ti')) );
		$wp_customize->add_control( 'ti_telephone_title', array(
		    'label'    => __( 'Telephone - Title:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_telephone_title',
			'priority' => '3',
		) );

		/* Telephone - Number */
		$wp_customize->add_setting( 'ti_telephone_number',array('default' => __('342-546-777','ti')) );
		$wp_customize->add_control( 'ti_telephone_number', array(
		    'label'    => __( 'Telephone - Number:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_telephone_number',
			'priority' => '4',
		) );

		/* Mail - Title */
		$wp_customize->add_setting( 'ti_mail_title',array('default' => __('Email','ti')) );
		$wp_customize->add_control( 'ti_mail_title', array(
		    'label'    => __( 'Mail - Title:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_mail_title',
			'priority' => '5',
		) );

		/* Mail */
		$wp_customize->add_setting( 'ti_mail_content',array('default' => __('contact@themeisle.com','ti')) );
		$wp_customize->add_control( 'ti_mail_content', array(
		    'label'    => __( 'Mail:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_mail_content',
			'priority' => '6',
		) );

		/* Contact - Address - Title */
		$wp_customize->add_setting( 'ti_contact_address_title',array('default' => __('Address','ti')) );
		$wp_customize->add_control( 'ti_contact_address_title', array(
		    'label'    => __( 'Contact Address - Title:', 'ti' ),
		    'section'  => 'contact_settings',
		    'settings' => 'ti_contact_address_title',
			'priority' => '7',
		) );

		/* Contact - Address */
		$wp_customize->add_setting( 'ti_contact_address_content',array('default' => __('7th Avenue, New York City','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_address_content', array(
		            'label' 	=> __( 'Contact Address - Content:', 'ti' ),
		            'section' 	=> 'contact_settings',
		            'settings' 	=> 'ti_contact_address_content',
		            'priority' 	=> '8'
		        )
		    )
		);

		/* Contact Form 7 - Shortcode */
		$wp_customize->add_setting( 'ti_contact_contactform7_shortcode' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_contactform7_shortcode', array(
		            'label' 	=> __( 'Contact Form 7 - Shortcode:', 'ti' ),
		            'section' 	=> 'contact_settings',
		            'settings' 	=> 'ti_contact_contactform7_shortcode',
		            'priority' 	=> '9'
		        )
		    )
		);

		/* Map - Code */
		$wp_customize->add_setting( 'ti_contact_map_code',array('default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5525199.9705362385!2d11.573861450784019!3d47.453833152541606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sro!4v1422450164656" width="600" height="450" frameborder="0" style="border:0"></iframe>') );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_map_code', array(
		            'label' 	=> __( 'Map - Code:', 'ti' ),
		            'section' 	=> 'contact_settings',
		            'settings' 	=> 'ti_contact_map_code',
		            'priority' 	=> '10'
		        )
		    )
		);

	/*
    ** Header - Settings
    */
    $wp_customize->add_section( 'header_settings' , array(
    	'title'       => __( 'Header - Settings:', 'ti' ),
    	'priority'    => 300,
	) );

		/* Header - Logo */
		$wp_customize->add_setting( 'ti_header_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_header_logo', array(
		    'label'    => __( 'Hader - Logo:', 'ti' ),
		    'section'  => 'header_settings',
		    'settings' => 'ti_header_logo',
		    'priority' => '1',
		) ) );

	/*
    ** Subheader - Settings
    */
    $wp_customize->add_section( 'subheader_settings' , array(
    	'title'       => __( 'Subheader - Settings:', 'ti' ),
    	'priority'    => 350,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_subheader_article_title', array('default' => __('Start woging right now !','ti')) );
		$wp_customize->add_control( 'ti_subheader_article_title', array(
		    'label'    => __( 'Subheader - Title:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_article_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_subheader_article_content', array('default' => __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_subheader_article_content', array(
		            'label' 	=> __( 'Subheader - Content', 'ti' ),
		            'section' 	=> 'subheader_settings',
		            'settings' 	=> 'ti_subheader_article_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Article - Button Text */
		$wp_customize->add_setting( 'ti_subheader_article_button_text', array('default' => __('Learn more','ti')) );
		$wp_customize->add_control( 'ti_subheader_article_button_text', array(
		    'label'    => __( 'Subheader - Button Text:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_article_button_text',
			'priority' => '3',
		) );

		/* Article - Button Link */
		$wp_customize->add_setting( 'ti_subheader_article_button_link' );
		$wp_customize->add_control( 'ti_subheader_article_button_link', array(
		    'label'    => __( 'Subheader - Button Link:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_article_button_link',
			'priority' => '4',
		) );

		/* Change background image */
		$wp_customize->add_setting( 'ti_subheader_background_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_subheader_background_image', array(
		    'label'    => __( 'Background image:', 'ti' ),
		    'section'  => 'subheader_settings',
		    'settings' => 'ti_subheader_background_image',
		    'priority' => '5',
		) ) );

	// /*
 //    ** Calculate bmi
 //    */
 //    $wp_customize->add_section( 'calculate_bmi_settings' , array(
 //    	'title'       => __( 'BMI Calculator - Status:', 'ti' ),
 //    	'priority'    => 450,
	// ) );

	// 	/* Show calc section */
	// 	$wp_customize->add_setting( 'ti_calculate_bmi_status',array('default' => 'true'));
	// 	$wp_customize->add_control( 'ti_calculate_bmi_status', array(
	// 	    'label'    => __( 'Show section', 'ti' ),
	// 	    'section'  => 'calculate_bmi_settings',
	// 	    'settings' => 'ti_calculate_bmi_status',
	// 		'priority' => '1',
 //       		'type' => 'checkbox',
	// 	) );

	// 	/* Change background image */
	// 	$wp_customize->add_setting( 'ti_calculate_bmi_background_image' );
	// 	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_calculate_bmi_background_image', array(
	// 	    'label'    => __( 'Background image:', 'ti' ),
	// 	    'section'  => 'calculate_bmi_settings',
	// 	    'settings' => 'ti_calculate_bmi_background_image',
	// 	    'priority' => '2',
	// 	) ) );

	/*
    ** Testimonials - Settings
    */
    $wp_customize->add_section( 'testimonials_settings' , array(
    	'title'       => __( 'Testimonials - Settings:', 'ti' ),
    	'priority'    => 450,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_testimonials_title' );
		$wp_customize->add_control( 'ti_testimonials_title', array(
		    'label'    => __( 'Testimonials - Title:', 'ti' ),
		    'section'  => 'testimonials_settings',
		    'settings' => 'ti_testimonials_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_testimonials_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_testimonials_content', array(
		            'label' 	=> __( 'Testimonials - Content:', 'ti' ),
		            'section' 	=> 'testimonials_settings',
		            'settings' 	=> 'ti_testimonials_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Article - Number of articles */
		$wp_customize->add_setting( 'ti_testimonials_number_of_articles' );
		$wp_customize->add_control( 'ti_testimonials_number_of_articles', array(
		    'label'    => __( 'Testimonials - Number of articles:', 'ti' ),
		    'section'  => 'testimonials_settings',
		    'settings' => 'ti_testimonials_number_of_articles',
			'priority' => '3',
		) );

	/*
    ** Program - Settings
    */
    $wp_customize->add_section( 'program_settings' , array(
    	'title'       => __( 'Program - Settings:', 'ti' ),
    	'priority'    => 450,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_program_title' );
		$wp_customize->add_control( 'ti_program_title', array(
		    'label'    => __( 'Program section - Title:', 'ti' ),
		    'section'  => 'program_settings',
		    'settings' => 'ti_program_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_program_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_program_content', array(
		            'label' 	=> __( 'Program section - Content:', 'ti' ),
		            'section' 	=> 'program_settings',
		            'settings' 	=> 'ti_program_content',
		            'priority' 	=> '2'
		        )
		    )
		);

	/*
    ** Latest news - Settings
    */
    $wp_customize->add_section( 'latest_news_settings' , array(
    	'title'       => __( 'Latest news - Settings:', 'ti' ),
    	'priority'    => 450,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_latest_news_title',array('default' => __('Latest News','ti')) );
		$wp_customize->add_control( 'ti_latest_news_title', array(
		    'label'    => __( 'Latest news - Title:', 'ti' ),
		    'section'  => 'latest_news_settings',
		    'settings' => 'ti_latest_news_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_latest_news_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_latest_news_content', array(
		            'label' 	=> __( 'Latest news - Content:', 'ti' ),
		            'section' 	=> 'latest_news_settings',
		            'settings' 	=> 'ti_latest_news_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Article - Number of articles */
	    $wp_customize->add_setting(
		    'ti_latest_news_number_of_articles',
		    array(
		        'default' => '3',
		    )
		);
		$wp_customize->add_control( 'ti_latest_news_number_of_articles', array(
		    'label'    => __( 'Latest news - Number of articles:', 'ti' ),
		    'section'  => 'latest_news_settings',
		    'settings' => 'ti_latest_news_number_of_articles',
			'priority' => '3',
		) );

	/*
    ** Features - Settings
    */
    $wp_customize->add_section( 'features_settings' , array(
    	'title'       => __( 'Features - Settings:', 'ti' ),
    	'priority'    => 450,
	) );

		/* Article - Title */
		$wp_customize->add_setting( 'ti_features_article_title',array('default' => __('Featured Area','ti')) );
		$wp_customize->add_control( 'ti_features_article_title', array(
		    'label'    => __( 'Articles - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_article_title',
			'priority' => '1',
		) );

		/* Article - Content */
		$wp_customize->add_setting( 'ti_features_article_content',array('default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_article_content', array(
		            'label' 	=> __( 'Article - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_article_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Box 1 - Image */
		$wp_customize->add_setting( 'ti_features_box1_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box1_image', array(
		    'label'    => __( 'Box 1 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box1_image',
		    'priority' => '3',
		) ) );

		/* Box 1 - Title */
		$wp_customize->add_setting( 'ti_features_box1_title',array('default' => __('Meet The Master','ti')) );
		$wp_customize->add_control( 'ti_features_box1_title', array(
		    'label'    => __( 'Box 1 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box1_title',
			'priority' => '4',
		) );

		/* Box 1 - Title Link */
		$wp_customize->add_setting( 'ti_features_box1_titlelink',array('default' => '#') );
		$wp_customize->add_control( 'ti_features_box1_titlelink', array(
		    'label'    => __( 'Box 1 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box1_titlelink',
			'priority' => '5',
		) );

		/* Box 1 - Content */
		$wp_customize->add_setting( 'ti_features_box1_content',array('default' => __('Customize this from Appearance -> Customizer','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box1_content', array(
		            'label' 	=> __( 'Box 1 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box1_content',
		            'priority' 	=> '6'
		        )
		    )
		);

		/* Box 2 - Image */
		$wp_customize->add_setting( 'ti_features_box2_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box2_image', array(
		    'label'    => __( 'Box 2 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_image',
		    'priority' => '7',
		) ) );

		/* Box 2 - Title */
		$wp_customize->add_setting( 'ti_features_box2_title',array('default' => __('Prepare Yourself','ti')) );
		$wp_customize->add_control( 'ti_features_box2_title', array(
		    'label'    => __( 'Box 2 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_title',
			'priority' => '8',
		) );

		/* Box 2 - Title Link */
		$wp_customize->add_setting( 'ti_features_box2_titlelink',array('default' => '#') );
		$wp_customize->add_control( 'ti_features_box2_titlelink', array(
		    'label'    => __( 'Box 2 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_titlelink',
			'priority' => '9',
		) );

		/* Box 2 - Content */
		$wp_customize->add_setting( 'ti_features_box2_content',array('default' => __('Customize this from Appearance -> Customizer','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box2_content', array(
		            'label' 	=> __( 'Box 2 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box2_content',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Box 3 - Image */
		$wp_customize->add_setting( 'ti_features_box3_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box3_image', array(
		    'label'    => __( 'Box 3 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_image',
		    'priority' => '11'
		) ) );

		/* Box 3 - Title */
		$wp_customize->add_setting( 'ti_features_box3_title',array('default' => __('Relax Excercising','ti')) );
		$wp_customize->add_control( 'ti_features_box3_title', array(
		    'label'    => __( 'Box 3 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_title',
			'priority' => '12'
		) );

		/* Box 3 - Title Link */
		$wp_customize->add_setting( 'ti_features_box3_titlelink',array('default' => '#') );
		$wp_customize->add_control( 'ti_features_box3_titlelink', array(
		    'label'    => __( 'Box 3 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_titlelink',
			'priority' => '13'
		) );

		/* Box 3 - Content */
		$wp_customize->add_setting( 'ti_features_box3_content',array('default' => __('Customize this from Appearance -> Customizer','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box3_content', array(
		            'label' 	=> __( 'Box 3 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box3_content',
		            'priority' 	=> '14'
		        )
		    )
		);


		//Custom section by Danniel Rolfe

		/* Box 4 - Image */
		$wp_customize->add_setting( 'ti_features_box4_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box4_image', array(
		    'label'    => __( 'Box 4 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_image',
		    'priority' => '15',
		) ) );

		/* Box 4 - - Title */
		$wp_customize->add_setting( 'ti_features_box4_title',array('default' => __('Meet The Master','ti')) );
		$wp_customize->add_control( 'ti_features_box4_title', array(
		    'label'    => __( 'Box 4 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_title',
			'priority' => '16',
		) );

		/* Box 4 - Title Link */
		$wp_customize->add_setting( 'ti_features_box4_titlelink',array('default' => '#') );
		$wp_customize->add_control( 'ti_features_box4_titlelink', array(
		    'label'    => __( 'Box 4 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box4_titlelink',
			'priority' => '17',
		) );

		/* Box 4 - Content */
		$wp_customize->add_setting( 'ti_features_box4_content',array('default' => __('Customize this from Appearance -> Customizer','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box4_content', array(
		            'label' 	=> __( 'Box 4 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box4_content',
		            'priority' 	=> '18'
		        )
		    )
		);

		/* Box 5 - Image */
		$wp_customize->add_setting( 'ti_features_box5_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box5_image', array(
		    'label'    => __( 'Box 5 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box5_image',
		    'priority' => '19',
		) ) );

		/* Box 5 - Title */
		$wp_customize->add_setting( 'ti_features_box5_title',array('default' => __('Prepare Yourself','ti')) );
		$wp_customize->add_control( 'ti_features_box5_title', array(
		    'label'    => __( 'Box 5 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box5_title',
			'priority' => '20',
		) );

		/* Box 5 - Title Link */
		$wp_customize->add_setting( 'ti_features_box5_titlelink',array('default' => '#') );
		$wp_customize->add_control( 'ti_features_box5_titlelink', array(
		    'label'    => __( 'Box 5 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box2_titlelink',
			'priority' => '21',
		) );

		/* Box 5 - Content */
		$wp_customize->add_setting( 'ti_features_box5_content',array('default' => __('Customize this from Appearance -> Customizer','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box5_content', array(
		            'label' 	=> __( 'Box 5 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box5_content',
		            'priority' 	=> '22'
		        )
		    )
		);

		/* Box 6 - Image */
		$wp_customize->add_setting( 'ti_features_box6_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_features_box6_image', array(
		    'label'    => __( 'Box 6 - Image:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box6_image',
		    'priority' => '23'
		) ) );

		/* Box 6 - Title */
		$wp_customize->add_setting( 'ti_features_box6_title',array('default' => __('Relax Excercising','ti')) );
		$wp_customize->add_control( 'ti_features_box6_title', array(
		    'label'    => __( 'Box 6 - Title:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box6_title',
			'priority' => '24'
		) );

		/* Box 6 - Title Link */
		$wp_customize->add_setting( 'ti_features_box3_titlelink',array('default' => '#') );
		$wp_customize->add_control( 'ti_features_box3_titlelink', array(
		    'label'    => __( 'Box 6 - Title Link:', 'ti' ),
		    'section'  => 'features_settings',
		    'settings' => 'ti_features_box3_titlelink',
			'priority' => '25'
		) );

		/* Box 6 - Content */
		$wp_customize->add_setting( 'ti_features_box6_content',array('default' => __('Customize this from Appearance -> Customizer','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box6_content', array(
		            'label' 	=> __( 'Box 6 - Content:', 'ti' ),
		            'section' 	=> 'features_settings',
		            'settings' 	=> 'ti_features_box6_content',
		            'priority' 	=> '26'
		        )
		    )
		);

	/*
    ** Footer - Settings
    */
    $wp_customize->add_section( 'footer_settings' , array(
    	'title'       => __( 'Footer - Settings:', 'ti' ),
    	'priority'    => 550,
	) );

		/* Content */
		$wp_customize->add_setting( 'ti_footer_content',array('default' => __('Copyright Woga. All rights reserved.','ti')) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_content', array(
				    'label'    => __( 'Content:', 'ti' ),
				    'section'  => 'footer_settings',
				    'settings' => 'ti_footer_content',
					'priority' => '1',
		        )
		    )
		);

	/*
    ** 404 Page - Settings
    */
    $wp_customize->add_section( '404page_settings' , array(
    	'title'       => __( '404 Page - Settings:', 'ti' ),
    	'priority'    => 700,
	) );

		/* Title */
		$wp_customize->add_setting( 'ti_404page_title' );
		$wp_customize->add_control( 'ti_404page_title', array(
		    'label'    => __( 'Title:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_title',
			'priority' => '1',
		) );

		/* Subtitle */
		$wp_customize->add_setting( 'ti_404page_subtitle' );
		$wp_customize->add_control( 'ti_404page_subtitle', array(
		    'label'    => __( 'Subtitle:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_subtitle',
			'priority' => '2',
		) );

		/* Content */
		$wp_customize->add_setting( 'ti_404page_settings_content' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_404page_settings_content', array(
		            'label' 	=> __( 'Content:', 'ti' ),
		            'section' 	=> '404page_settings',
		            'settings' 	=> 'ti_404page_settings_content',
		            'priority' 	=> '3'
		        )
		    )
		);


}
add_action( 'customize_register', 'lawyeria_customizer' );

if( class_exists( 'WP_Customize_Control' ) ):
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>