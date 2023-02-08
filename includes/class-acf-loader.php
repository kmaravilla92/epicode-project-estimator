<?php
namespace EpicodeProjectCalculator;

/**
* Manages how the ACF will be loaded when the plugin
* is active.
*/
class ACFLoader
{
  /**
  * Determines if ACF is loaded via this plugin.
  */
  private static $acf_is_loaded_here = false;

  /**
  * Initializes ACF filters
  *
  * @return void
  */
  public static function initialize()
  {
    self::maybeLoadACFPlugin();

    add_filter( 'acf/settings/show_admin', [__CLASS__, 'showAdmin'] );
    add_filter( 'acf/settings/load_json', [__CLASS__, 'setJSONPaths'] );
    add_filter( 'acf/settings/path', [__CLASS__, 'setACFPluginPath'] );
    add_filter( 'acf/settings/dir', [__CLASS__, 'setACFPluginPath'] );
  }

  /**
  * Identify whether to show included ACF via admin.
  * If ACF is loaded via this plugin then it will hide it via admin.
  *
  * @return boolean
  */
  public static function showAdmin() : bool
  {
    return ! self::$acf_is_loaded_here;
  }

  /**
  * Determines that ACF JSON paths to be loaded in the system.
  * Helpful for ACF sync functionality.
  *
  * @param array $paths Array of directory paths.
  * @return array
  */
  public static function setJSONPaths( array $paths ) : array
  {
    $paths[] = EPC_DATA_DIR_PATH . '/acf-json';
    return $paths;
  }

  /**
  * Determines directory path where the ACF plugin must be loaded from.
  *
  * @param string $dir_path A directory path.
  * @return string
  */
  public static function setACFPluginPath( string $dir_path ) : string
  {
    if ( self::$acf_is_loaded_here ) {
      $dir_path = EPC_PLUGINS_DIR_PATH . '/advanced-custom-fields-pro/';
    }
    return $dir_path;
  }

  /**
  * Smart loader of ACF plugin. Checks whether if ACF is already loaded
  * in WP, if not loads the version of ACF within this plugin.
  *
  * @return void
  */
  protected static function maybeLoadACFPlugin()
  {
    if ( ! self::isACFPresent() ) {
      include_once EPC_PLUGINS_DIR_PATH . '/advanced-custom-fields-pro/acf.php';
      self::$acf_is_loaded_here = true;
    }
  }

  /**
   * Identify if existing ACF installation is present.
   * If true, it means that ACF is already installed in WP.
   * If false, no ACF installation is present.
   *
   * @return boolean
   */
  protected static function isACFPresent() : bool
  {
    return class_exists( 'ACF' );
  }
}
