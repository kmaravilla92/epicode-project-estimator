<?php
namespace EpicodeProjectCalculator;

/**
* Main class for this plugin.
* Manages initialization of different components,
* plugin activate, deactivation and uninstallation.
*/
class ProjectCalculator
{
  /**
  * Initializes most of the parts of the calculator.
  *
  * @return void
  */
  public function initialize($plugin_file_path)
  {
    add_action( 'plugins_loaded', [ACFLoader::class, 'initialize'] );
    add_action( 'init', [PostTypesManager::class, 'registerPostTypes'] );
    add_action( 'init', [ShortcodeManager::class, 'initialize'] );
    add_action( 'init', [FrontSite\DownloadQuotation::class, 'initialize'] );

    if ( is_admin() ) {
      add_action( 'admin_init', [Admin\AdminColumns::class, 'initialize'] );
      add_action( 'admin_init', [Admin\Pages\Main::class, 'initialize'] );
      add_action( 'admin_menu', [Admin\MenuSetting::class, 'initialize'] );
      add_action( 'admin_init', [Admin\MetaBoxes\PostTypeSubmission::class, 'initialize'] );
      add_action( 'admin_init', [Admin\MetaBoxes\PostTypeCalculator::class, 'initialize'] );
    } else {
      // FrontSite
      add_action( 'init', [FrontSite\FrontendManager::class, 'initialize'] );
    }

    // Plugin hooks
    register_activation_hook( $plugin_file_path, [__CLASS__, 'activate'] );
    register_deactivation_hook( $plugin_file_path, [__CLASS__, 'deactivate'] );
    register_uninstall_hook( $plugin_file_path, [__CLASS__, 'uninstall'] );
  }

  /**
  * Adds initial data of this plugin when activated.
  *
  * @return void
  */
  public static function activate()
  {
    if ( ! get_option( 'epc-use-default-style' ) ) {
      add_option( 'epc-use-default-style', 'yes' );
    }

    if ( ! get_option( 'epc-custom-css' ) ) {
      add_option( 'epc-custom-css', '' );
    }

    if ( ! get_option( 'epc-settings' ) ) {
      add_option( 'epc-settings', [
        'admin-name' => 'Epicode Developer',
        'admin-email' => 'developer@epicode.nl'
      ] );
    }
  }

  /**
  * Nothing.
  *
  * @return void
  */
  public static function deactivate()
  {
    // Nothing to do here.
  }

  /**
  * Removes all the data of this plugin when uninstalled.
  *
  * @return void
  */
  public static function uninstall()
  {
    // Remove all options
    delete_option( 'epc-use-default-style' );
    delete_option( 'epc-custom-css' );
    delete_option( 'epc-settings' );

    // Remove all posts by post type
    $post_types = PostTypesManager::getPostTypes();
    foreach ( $post_types as $post_type ) {
      $posts_to_delete = get_posts( ['post_type' => $post_type] );
      foreach( $posts_to_delete as $post_to_delete ) {
        wp_delete_post( $post_to_delete->ID, true );
      }
    }
  }
}
