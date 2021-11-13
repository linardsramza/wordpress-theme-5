<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Headings                           -
// -----------------------------------------

$options[]    = array(
  'id'        => '_page_headings',
  'title'     => 'Headings',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    array(
      'name'  => 'page_headings',
      'fields' => array(              
        
        array(
          'id'    => 'heading_1',
          'type'  => 'text',
          'title' => 'Heading 1',
          'sanitize' => FALSE,
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
          'desc'  => 'Defines the most important heading. This field overrides the main page title on the faq-end.',
        ),      

      ),
    ),

  ),
);

// -----------------------------------------
// FAQ Options                             -
// -----------------------------------------

$options[]    = array(
  'id'        => '_faq_page_options',
  'title'     => 'FAQs',
  'post_type' => 'page',
  'page_template' => 'page-faqs.php',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    array(
      'name'  => 'faqs',
      'title' => 'FAQs',
      'icon'  => 'fas fa-question-circle',

      'fields' => array(
        array(
          'id'              => 'faqs',
          'type'            => 'group',
          'title'           => 'FAQs',
          'button_title'    => 'Add FAQ',
          'accordion_title' => 'question',
          'fields'          => array(

            array(
              'id'          => 'question',
              'type'        => 'text',
              'title'       => 'Question',
              'attributes'    => array(
                'autocomplete' => 'off',
              ),
            ),

            array(
              'id'          => 'answer',
              'type'        => 'textarea',
              'title'       => 'Answer',
              'attributes'    => array(
                'autocomplete' => 'off',
              ),
            ),
          )
        ),
      ),
    ),
  ),
);

// -----------------------------------------
// Achievements Options                    -
// -----------------------------------------

$options[]    = array(
  'id'        => '_achievements_page_options',
  'title'     => 'Achievements',
  'post_type' => 'page',
  'page_template' => 'template-achievements.php',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    array(
      'name'  => 'achievements',
      'title' => 'Achievements',
      'icon'  => 'fas fa-trophy',

      'fields' => array(
        array(
          'id'              => 'achievements',
          'type'            => 'group',
          'title'           => 'Achievements',
          'button_title'    => 'Add Achievement',
          'accordion_title' => 'settlement',
          'fields'          => array(

            array(
              'id'          => 'settlement',
              'type'        => 'text',
              'title'       => 'Settlement',
              'attributes'    => array(
                'autocomplete' => 'off',
              ),
            ),

            array(
              'id'          => 'settlement_postfix',
              'type'        => 'text',
              'title'       => 'Settlement Postfix',
              'attributes'    => array(
                'autocomplete' => 'off',
              ),
            ),

            array(
              'id'          => 'settlement_category',
              'type'        => 'text',
              'title'       => 'Settlement Category',
              'attributes'    => array(
                'autocomplete' => 'off',
              ),
            ),

            array(
              'id'          => 'settlement_description',
              'type'        => 'textarea',
              'title'       => 'Settlement Description',
              'attributes'    => array(
                'autocomplete' => 'off',
              ),
            ),
          )
        ),
      ),
    ),
  ),
);

CSFramework_Metabox::instance( $options );
