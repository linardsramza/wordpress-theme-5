<?php
/*
|--------------------------------------------------------------------------
| OTM THEME FUNCTIONS
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Codestar Framework Initialization
|--------------------------------------------------------------------------
*/

require_once get_template_directory() .'/cs-framework/cs-framework.php';
define( 'CS_ACTIVE_LIGHT_THEME',  false );
define( 'CS_ACTIVE_FRAMEWORK',    true );
define( 'CS_ACTIVE_METABOX',      true );
define( 'CS_ACTIVE_TAXONOMY',     false );
define( 'CS_ACTIVE_SHORTCODE',    false );
define( 'CS_ACTIVE_CUSTOMIZE',    false );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/*
|--------------------------------------------------------------------------
| OTM Shortcodes
|--------------------------------------------------------------------------
*/

/* Get Current Year */
if( ! function_exists( 'otm_shortcode_current_year' ) ) {
  function otm_shortcode_current_year(){
  	return date('Y');
  }
}
add_shortcode('otm-current-year', 'otm_shortcode_current_year');

/* Get Site Name */
if( ! function_exists( 'otm_shortcode_site_name' ) ) {
	function otm_shortcode_site_name(){
		return get_bloginfo('name');
	}
}
add_shortcode('otm-site-title', 'otm_shortcode_site_name');

/* Nav Map Link */
if( ! function_exists( 'otm_shortcode_nav_map_link' ) ) {
	function otm_shortcode_nav_map_link(){
		return '<a href="' . get_site_url() . '/site-map.htm" title="Nav Map">Nav Map</a>';
	}
}
add_shortcode('otm-nav-map-link', 'otm_shortcode_nav_map_link');

/* Get E-Mail Address */
if( ! function_exists( 'otm_shortcode_email' ) ) {
	function otm_shortcode_email(){
		return otm_get_option('email');
	}
}
add_shortcode('otm-email', 'otm_shortcode_email');

/* Get Local Phone Number */
if( ! function_exists( 'otm_shortcode_phone_number' ) ) {
	function otm_shortcode_phone_number(){
		return otm_get_option('phone_number');
	}
}
add_shortcode('otm-phone-number', 'otm_shortcode_phone_number');

/* Get International Phone Number */
if( ! function_exists( 'otm_shortcode_phone_number_intl' ) ) {
	function otm_shortcode_phone_number_intl(){
		return otm_get_option('phone_number_intl');
	}
}
add_shortcode('otm-phone-number-intl', 'otm_shortcode_phone_number_intl');

/* Get Address Line 1 */
if( ! function_exists( 'otm_shortcode_address_line_1' ) ) {
	function otm_shortcode_address_line_1(){
		return otm_get_option('address_line_1');
	}
}
add_shortcode('otm-address-line-1', 'otm_shortcode_address_line_1');

/* Get Address Line 2 */
if( ! function_exists( 'otm_shortcode_address_line_2' ) ) {
	function otm_shortcode_address_line_2(){
		return otm_get_option('address_line_2');
	}
}
add_shortcode('otm-address-line-2', 'otm_shortcode_address_line_2');

/* Get Address */
if( ! function_exists( 'otm_shortcode_address' ) ) {
	function otm_shortcode_address(){
		return otm_get_option('address');
	}
}
add_shortcode('otm-address', 'otm_shortcode_address');

/* Get Address Link */
if( ! function_exists( 'otm_shortcode_address_link' ) ) {
	function otm_shortcode_address_link(){
		return otm_get_option('address_link');
	}
}
add_shortcode('otm-address-link', 'otm_shortcode_address_link');

/*
|--------------------------------------------------------------------------
| OTM Theme Helper Functions
|--------------------------------------------------------------------------
*/

/* Get Image URL From an Option */
if( ! function_exists( 'otm_get_image_url' ) ) {
	function otm_get_image_url( $image ){
		return wp_get_attachment_image_url( otm_get_option( $image ), 'full' );
	}
}

/* Get meta data */
if( ! function_exists( 'otm_get_meta' ) ) {
	function otm_get_meta( $meta_id, $meta_field ){
		$meta_data = get_post_meta( get_the_ID(), $meta_id, true );
		$meta_field = $meta_data[$meta_field];
		return $meta_field;
	}
}

/*
|--------------------------------------------------------------------------
| Miscellaneous Functions
|--------------------------------------------------------------------------
*/

/* Remove WordPress, comments, and customize menu from admin bar */
function otm_admin_bar_customizations( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('customize');
	if(!is_admin()):
  $args = array(
      'id'     => 'current-page-id',
      'title'  => 'Current Page ID: ' . get_the_ID(),
      'href'   => get_edit_post_link(),
      'meta'   => false
  );
  $wp_admin_bar->add_node( $args );
	endif;
}
add_action( 'admin_bar_menu', 'otm_admin_bar_customizations', 999 );

// WordPress login logo link url modification
function otm_loginlogo_url($url) {
  return home_url();
}
add_filter( 'login_headerurl', 'otm_loginlogo_url' );

// // WordPress login logo link title modification
function isacustom_wp_login_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'isacustom_wp_login_title');

// WordPress admin panel footer text modification
function otm_admin_footer_text () {
   echo '';
}
add_filter('admin_footer_text', 'otm_admin_footer_text');

// Customize the login page
function otm_customize_login() { ?>
    <style type="text/css">		
        #login h1 a, .login h1 a {
          background-image: url(<?php echo otm_get_image_url('logo_dark'); ?>);
					height:65px;
					width:320px;
					background-size: contain;
					background-repeat: no-repeat;
        	padding-bottom: 0px;
        }
				.login form {
					border-radius: 10px;
					padding: 25px!important;
				}
			#nav,
			#backtoblog {
				display: none;
			}
			.login form .input, .login input[type=text],
			#rememberme {
				border-radius: 5px;
			}
			input[type=text]:focus, input[type=password]:focus, input[type=checkbox]:focus {
			  border-color: #d6d6d6!important;
			  box-shadow: 0 0 2px rgba(114, 119, 124,.8)!important;
			}
			.wp-core-ui .button-primary {
		    background: #72777c!important;
		    border-color: #72777c!important;
		    box-shadow: none!important;
		    color: #fff!important;
		    text-decoration: none!important;
		    text-shadow: none!important;
			}	
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'otm_customize_login' );

//Allow SVG files to be uploaded through "Add Media"
/**
 * Add svg MIME type support
 *
 * @param $mimes
 *
 * @return mixed
 */
function svg_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'svg_mime_types' );

/**
 * Ajax get_attachment_url_media_library
 */
function svg_get_attachment_url_media_library() {

	$url          = '';
	$attachmentID = isset( $_REQUEST['attachmentID'] ) ? $_REQUEST['attachmentID'] : '';
	if ( $attachmentID ) {
		$url = wp_get_attachment_url( $attachmentID );
	}

	echo $url;

	die();
}

add_action( 'wp_ajax_svg_get_attachment_url', 'svg_get_attachment_url_media_library' );