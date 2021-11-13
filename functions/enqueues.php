<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper.min.css', '4.2.2', null);
		wp_enqueue_style('swiper-css');

		wp_register_style('theme-css', get_template_directory_uri() . '/assets/css/theme.min.css', false, null);
		wp_enqueue_style('theme-css');

		// Scripts

		wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '1.14.3', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false, '4.1.3', true);
		wp_enqueue_script('bootstrap-js');

		wp_register_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper.min.js', false, '4.2.2', true);
		wp_enqueue_script('swiper-js');

		wp_register_script('aos-js', get_template_directory_uri() . '/assets/js/aos.js', false, null, true);
		wp_enqueue_script('aos-js');

		wp_register_script('bideo-js', get_template_directory_uri() . '/assets/js/bideo.js', false, null, true);
		wp_enqueue_script('bideo-js');

		wp_register_script('scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', false, null, true);
		wp_enqueue_script('scripts-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);

//Load non-critical styles, fonts and icons in the footer.

function enqueue_footer_styles() {

};
add_action( 'wp_footer', 'enqueue_footer_styles' );