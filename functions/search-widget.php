<?php
/**!
 * Search form in widget
 */

if ( ! function_exists('b4st_search_form') ) {

  function b4st_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
      <input class="form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr_x('Search', 'b4st') . '..." name="s" id="s" required/>
      <button type="submit" id="searchsubmit" value="'. esc_attr_x('Search', 'b4st') .'" class="btn btn-primary"><i class="fa fa-search"></i></button>
    </form>';
    return $form;
  }
}
add_filter( 'get_search_form', 'b4st_search_form' );