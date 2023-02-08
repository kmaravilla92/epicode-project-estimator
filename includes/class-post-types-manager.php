<?php
namespace EpicodeProjectCalculator;

/**
* Manages post types used by this plugin.
*/
class PostTypesManager
{
  /**
  *  Array of post types used in this plugin.
  *
  * @return boolean
  */
  public static function getPostTypes() : bool
  {
    return [
      EPC_POST_TYPE_CALCULATOR,
      EPC_POST_TYPE_SUBMISSION
    ];
  }

  /**
  *  Register post types.
  *
  * @return void
  */
  public static function registerPostTypes()
  {
    register_post_type( EPC_POST_TYPE_CALCULATOR, [
      'labels'        => [
          'name'          => __( 'Calculator', EPC_LANG_DOMAIN ),
          'singular_name' => __( 'Calculators', EPC_LANG_DOMAIN ),
      ],
      'description'   => __( 'Collection of calculators', EPC_LANG_DOMAIN ),
      'public'        => true,
      'show_in_menu'  => false,
      'supports'      => ['title', 'editor']
    ] );

    if ( is_admin() ) {
      register_post_type( EPC_POST_TYPE_SUBMISSION, [
        'labels'        => [
            'name'          => __( 'Calculator Submission', EPC_LANG_DOMAIN ),
            'singular_name' => __( 'Calculator Submissions', EPC_LANG_DOMAIN ),
        ],
        'description'   => __( 'Collection of calculator submissions', EPC_LANG_DOMAIN ),
        'public'        => true,
        'show_in_menu'  => false,
        'supports'      => ['title']
      ] );
    }
  }
}
