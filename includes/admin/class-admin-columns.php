<?php
namespace EpicodeProjectCalculator\Admin;

use EpicodeProjectCalculator\ShortcodeManager;

/**
* Manages admin columns for post types.
*/
class AdminColumns
{
  /**
  * Initializes filter/action hooks for admin columns.
  *
  * @return void
  */
  public static function initialize()
  {
    $post_types = [
      EPC_POST_TYPE_CALCULATOR,
      EPC_POST_TYPE_SUBMISSION,
    ];

    foreach ( $post_types as $post_type ) {
      $columns_name = "manage_{$post_type}_posts_columns";
      $custom_column_name = "manage_{$post_type}_posts_custom_column";
      add_filter( $columns_name, [__CLASS__, $columns_name] );
      add_action( $custom_column_name, [__CLASS__, $custom_column_name], 10, 2 );
    }
  }

  /**
  * Manages columns for epc_calculator post type.
  *
  * @param array $columns Array of admin columns.
  * @return void
  */
  public static function manage_epc_calculator_posts_columns( $columns )
  {
    $temp_date = $columns['date'];
    unset( $columns['date'] );
    $columns['shortcode'] = __( 'Shortcode', EPC_LANG_DOMAIN );
    $columns['date'] = $temp_date;
    return $columns;
  }

  /**
  * Manages the data to be rendered for each columns for epc_calculator post type.
  *
  * @param array $column Column key.
  * @param int $post_id ID of the post.
  * @return void
  */
  public static function manage_epc_calculator_posts_custom_column( string $column, int $post_id )
  {
    switch( $column ) {
      case 'shortcode':
        echo ShortcodeManager::generateShortcodeTextField( $post_id );
        break;
      default:
        break;
    }
  }

  /**
  * Manages columns for epc_submission post type.
  *
  * @param array $columns Array of admin columns.
  * @return void
  */
  public static function manage_epc_submission_posts_columns( $columns )
  {
    $temp_date = $columns['date'];
    unset( $columns['date'] );
    $columns['client'] = __( 'Client', EPC_LANG_DOMAIN );
    $columns['date'] = $temp_date;
    return $columns;
  }

  /**
  * Manages the data to be rendered for each columns for epc_submission post type.
  *
  * @param array $column Column key.
  * @param int $post_id ID of the post.
  * @return void
  */
  public static function manage_epc_submission_posts_custom_column( $column, $post_id )
  {
    $form_details = get_post_meta( $post_id, 'form-details', true );
    switch( $column ) {
      case 'client':
        printf( '%s (<a href="mailto:%s">%s</a>)', $form_details['name'], $form_details['email'], $form_details['email'] );
        break;
      default:
        break;
    }
  }
}
