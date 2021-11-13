<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$settings           = array(
  'menu_title'      => 'OTM Theme',
  'menu_type'       => 'menu',
  'menu_slug'       => 'otm-theme-options',
	'menu_position'   => '2',
	'menu_icon'       => 'data:image/svg+xml;base64,' . base64_encode('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1085 1024"><path fill="black" d="M772.766 202.831c0.403-54.974 45.061-99.383 100.091-99.383 0.252 0 0.504 0.001 0.755 0.003h-0.039c55.687 0 100.665 44.692 100.665 99.38-0.404 54.973-45.061 99.382-100.091 99.382-0.202 0-0.403-0.001-0.605-0.002h0.031c-0.213 0.002-0.465 0.003-0.716 0.003-55.030 0-99.688-44.409-100.091-99.344v-0.038zM1034.066 72.751c-40.169-47.169-99.608-76.892-165.988-76.892-52.625 0-100.886 18.68-138.516 49.771l0.367-0.295c-20.026 15.53-36.273 34.925-47.811 57.158l-0.452 0.957-149.784 322.271c-2.731 6.14-4.322 13.304-4.322 20.839 0 13.203 4.883 25.266 12.941 34.481l-0.052-0.061c12.851 15.135 34.269 22.846 53.974 17.848l347.83-89.385c25.738-7.693 47.959-20.358 66.564-36.986l-0.167 0.147c46.844-38.885 76.454-97.128 76.454-162.287 0-52.714-19.38-100.902-51.403-137.828l0.222 0.262zM481.479 539.523c48.976 60.114 166.633 18.991 166.633 18.991-13.22 73.817-76.549 129.243-152.979 130.079l-0.089 0.001c-86.101 0-155.924-72.108-155.924-161.778 0-88.1 67.538-159.636 151.926-161.921 0 0-66.967 104.235-9.567 174.629zM489.761 770.125c129.223 0 234.171-103.378 241.311-233.172l75.249-19.99v5.997c0 178.913-141.36 323.842-316.417 323.842-174.629 0-316.56-144.929-316.56-323.842s141.36-323.699 316.56-323.699c25.273 0 49.976 2.856 73.536 8.996l-31.984 70.965c-13.565-2.285-27.558-3.427-41.551-3.427-133.649 0-241.882 110.803-241.882 247.165 0 136.505 108.233 247.165 241.882 247.165zM964.672 522.96c0 274.295-216.037 496.9-482.621 496.9s-482.050-222.606-482.050-496.9c0-274.295 216.037-496.9 482.050-496.9 49.976 0 98.238 7.853 143.073 22.56l-34.84 78.248c-31.858-9.609-68.468-15.14-106.371-15.14-0.655 0-1.309 0.002-1.963 0.005h0.101c-220.749-0.143-399.519 184.053-399.519 411.799s178.913 411.799 399.519 411.799c220.464 0 399.519-184.196 399.519-411.799 0-9.567-0.571-18.562-1.142-28.129l81.389-21.989c2.285 16.278 2.856 32.698 2.856 49.547z"></path></svg>'),
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => '<img src="' . get_template_directory_uri() . '/cs-framework/assets/otm-logo-theme-options.svg">',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => 'General',
  'icon'        => 'fa fa-star',

  'fields'      => array(

		array(
			'id'        => 'logo',
			'type'      => 'fieldset',
			'title'     => 'Logo',
			'un_array'  => true,
			'fields'    => array(

				array(
					'id'        => 'logo_light',
					'type'      => 'image',
					'title'     => 'Light Logo',
					'add_title' => 'Select Logo',
					'desc'      => 'Select a light logo for dark backgrounds.'
				),

				array(
					'id'        => 'logo_dark',
					'type'      => 'image',
					'title'     => 'Dark Logo',
					'add_title' => 'Select Logo',
					'desc'      => 'Select a dark logo for light backgrounds.'
				),
			),
		),

		array(
			'id'        => 'contact_info',
			'type'      => 'fieldset',
			'title'     => 'Contact Information',
			'un_array'  => true,
			'fields'    => array(

				array(
					'id'       => 'email',
					'type'     => 'text',
					'title'    => 'E-Mail',
					'after'     => '<span class="box">Shortcode: [otm-email]</span>',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'       => 'phone_number',
					'type'     => 'text',
					'title'    => 'Local Phone Number',
					'desc'      => 'E.g. (123) 456-7890, 123-456-7890;',
					'after'     => '<span class="box">Shortcode: [otm-phone-number]</span>',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'       => 'phone_number_intl',
					'type'     => 'text',
					'title'    => 'International Phone Number',
					'desc'      => 'E.g. 11234567890, 1-123-456-7890;',
					'after'     => '<span class="box">Shortcode: [otm-phone-number-intl]</span>',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'       => 'fax',
					'type'     => 'text',
					'title'    => 'Fax',
					'desc'      => 'E.g. (123) 456-7890, 123-456-7890;',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),
			),
		),

		array(
			'id'        => 'address',
			'type'      => 'fieldset',
			'title'     => 'Address',
			'un_array'  => true,
			'fields'    => array(

				array(
					'id'       => 'address',
					'type'     => 'text',
					'title'    => 'Full Address',
					'after'     => '<span class="box">Shortcode: [otm-address]</span>',
					'sanitize' => false,
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'       => 'address_line_1',
					'type'     => 'text',
					'title'    => 'Address Line 1',
					'after'     => '<span class="box">Shortcode: [otm-address-line-1]</span>',
					'sanitize' => false,
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'       => 'address_line_2',
					'type'     => 'text',
					'title'    => 'Address Line 2',
					'after'     => '<span class="box">Shortcode: [otm-address-line-2]</span>',
					'sanitize' => false,
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'      => 'address_link',
					'type'    => 'text',
					'title'   => 'Address Link',
					'after'     => '<span class="box">Shortcode: [otm-address-link]</span>',
					'desc'    => 'Define a link where you want the user to land when they click on the address. Usually this is a Google Maps link.',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

			),
		),

  ),
);

// ------------------------------
// Content Section              -
// ------------------------------
$options[] = array(
  'name'   => 'content_section',
  'title'  => 'Content',
  'icon'   => 'fa fa-bookmark'
);

$options[]   = array(
  'name'     => 'social_profiles',
  'title'    => 'Social Profiles',
  'icon'     => 'fa fa-share-alt',
  'fields'   => array(

		array(
			'id'              => 'social_profiles',
			'type'            => 'group',
			'title'           => 'Social Profiles',
			'button_title'    => 'Add Social Profile',
			'accordion_title' => 'social_profile',
			'fields'          => array(

				array(
					'id'          => 'social_profile',
					'type'        => 'text',
					'title'       => 'Social Profile',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),

				),

				array(
					'id'    			=> 'social_profile_icon',
					'type'  			=> 'icon',
					'title' 			=> 'Social Profile Icon',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),

				),

				array(
					'id'          => 'social_profile_url',
					'type'        => 'text',
					'title'       => 'Social Profile URL',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

			)
		),

  )
);

$options[]   = array(
  'name'     => 'testimonials',
  'title'    => 'Testimonials',
  'icon'     => 'far fa-edit',
  'fields'   => array(

		array(
			'id'              => 'testimonials',
			'type'            => 'group',
			'title'           => 'Testimonials',
			'button_title'    => 'Add New Testimonial',
			'accordion_title' => 'testimonial_details',
			'fields'          => array(

				array(
					'id'          => 'testimonial',
					'type'        => 'textarea',
					'title'       => 'Testimonial',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'          => 'testimonial_details',
					'type'        => 'text',
					'title'       => 'Testimonial Details',
					'desc'        => 'Author and/or date of testimonial.',
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
				),

				array(
					'id'       => 'testimonial_rating',
					'type'     => 'select',
					'title'    => 'Testimonial Rating',
					'options'  => array(
						'5' 	   => '★★★★★',
						'4' 	   => '★★★★',
						'3' 	   => '★★★',
						'2'      => '★★',
						'1'  		 => '★',
					),
					'default'  => '5',
				),

			)
		),

  )
);

$current_user = wp_get_current_user();
$nav_map_shortcode = '';
if($current_user->user_login == 'otmseo'): $nav_map_shortcode = ', [otm-nav-map-link]'; endif;

$options[]   = array(
  'name'     => 'footer',
  'title'    => 'Footer',
  'icon'     => 'fa fa-arrow-down',
  'fields'   => array(

		array(
			'id'         => 'copyright_text',
			'type'       => 'textarea',
			'title'      => 'Copyright Text',
			'after'      => '<span class="box">Suggested shortcodes: [otm-current-year], [otm-site-title]' . $nav_map_shortcode . '</span>',
			'default'    => 'Copyright © [otm-site-title] [otm-current-year] All Rights Reserved.',
      'attributes'    => array(
        'autocomplete' => 'off',
      ),
		),

  )
);

// ------------------------------
// Advanced Section             -
// ------------------------------

$options[] = array(
  'name'   => 'advanced_section',
  'title'  => 'Advanced',
  'icon'   => 'fa fa-hashtag'
);

$options[]   = array(
  'name'     => 'custom_css',
  'title'    => 'Custom CSS',
  'icon'     => 'fab fa-css3',
  'fields'   => array(

		array(
			'id'          => 'custom_css',
			'type'   			=> 'aceeditor',
			'attributes'  => array(
					'data-theme'    => 'chrome',
					'data-mode'     => 'css',
			),
			'title'       => 'Custom CSS',
			'desc'       => 'Adds custom CSS in the <code>&lt;head&gt;</code>.',
			'sanitize'    => false,
		),

  )
);

$options[]   = array(
  'name'     => 'custom_javascript',
  'title'    => 'Custom Scripts',
  'icon'     => 'fab fa-js',
  'fields'   => array(

		array(
			'id'          => 'header_scripts',
			'type'   			=> 'aceeditor',
			'attributes'  => array(
					'data-theme'    => 'chrome',
					'data-mode'     => 'html',
			),
			'title'       => 'Header Scripts',
			'desc'       => 'Adds custom scripts in the <code>&lt;head&gt;</code> element.<br>
			Your code needs to be between the <code>&lt;script&gt;&lt;/script&gt;</code> tags.<br>
			This is where Google Analytics scripts are usually placed.',
			'sanitize'    => false,
		),

		array(
			'id'          => 'footer_scripts',
			'type'   			=> 'aceeditor',
			'attributes'  => array(
					'data-theme'    => 'chrome',
					'data-mode'     => 'html',
			),
			'desc'       => 'Adds custom scripts before ending <code>&lt;/body&gt;</code> tag.<br>
			Your code needs to be between the <code>&lt;script&gt;&lt;/script&gt;</code> tags.<br>
			This is where phone tracking scripts are usually placed.',
			'title'       => 'Footer Scripts',
			'sanitize'    => false,
		),

  )
);

// ------------------------------
// Tools Section                -
// ------------------------------
$options[] = array(
  'name'   => 'tools_section',
  'title'  => 'Tools',
  'icon'   => 'fa fa-wrench'
);

// ------------------------------
// Theme Options Backup         -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Theme Options Backup',
  'icon'     => 'far fa-hdd',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

CSFramework::instance( $settings, $options );
