<?php
namespace EpicodeProjectCalculator\Admin\Pages;

use EpicodeProjectCalculator\Admin\AdminNotice;
/**
* Manages the administration pages.
*/
class Main
{
  /**
  * Initializes filters/actions used by the admin page.
  * - Hooks POST request for saving styles and settings.
  *
  * @return void
  */
  public static function initialize()
  {
    add_action( 'admin_post_save-style', [__CLASS__, 'saveStyle'] );
    add_action( 'admin_post_save-settings', [__CLASS__, 'saveSettings'] );
  }

  /**
  * Renders the admin page with the list of tabs
  * and active tab being displayed.
  *
  * @return void
  */
  public static function render()
  {
    $tabs = self::getTabs();
    $active_tab = self::getActiveTab();

    echo epc_load_view(
      EPC_ADMIN_VIEWS . '/main/index',
      compact(
        'tabs',
        'active_tab'
      )
    );
  }

  /**
  * Handles POST request for saving styles.
  *
  * @return void
  */
  public static function saveStyle()
  {
    update_option( 'epc-custom-css', $_POST['epc-custom-css'] );
    update_option( 'epc-use-default-style', $_POST['epc-use-default-style'] );
    $http_referer = wp_get_referer();
    if ( ! isset( $_GET['success'] ) ) {
        $http_referer .= '&success=true&prev_action=save-style';
    }
    wp_redirect( $http_referer );
    exit;
  }

  /**
  * Handles POST request for saving settings.
  *
  * @return void
  */
  public static function saveSettings()
  {
    update_option( 'epc-settings', $_POST['epc-settings'] );
    $http_referer = wp_get_referer();
    if ( ! isset( $_GET['success'] ) ) {
        $http_referer .= '&success=true&prev_action=save-settings';
    }
    wp_redirect( $http_referer );
    exit;
  }

  /**
  * Identifies which admin page tab is active.
  *
  * @return string
  */
  protected static function getActiveTab() : string
  {
    return $_GET['tab'] ?? 'welcome';
  }

  /**
  * List of admin page tabs.
  *
  * @return array
  */
  protected static function getTabs() : array
  {
    return [
      'welcome'         =>  [
        'title' => __( 'Welcome', EPC_LANG_DOMAIN ),
        'view'  => self::viewWelcome()
      ],
      'style'   =>  [
        'title' => __( 'Style', EPC_LANG_DOMAIN ),
        'view'  => self::viewStyle()
      ],
      'settings'        =>  [
        'title' => __( 'Settings', EPC_LANG_DOMAIN ),
        'view'  => self::viewSettings()
      ],
    ];
  }

  /**
  * Renders the welcome admin page.
  *
  * @return string
  */
  protected static function viewWelcome() : string
  {
    return epc_load_view( EPC_ADMIN_VIEWS . '/main/partials/tab-content/welcome' );
  }

  /**
  * Renders the styles form settings.
  *
  * @return string
  */
  protected static function viewStyle() : string
  {
    $custom_css = get_option( 'epc-custom-css' );
    $use_default_style = get_option( 'epc-use-default-style' ) == 'yes';

    if ( isset( $_GET['success'] ) && $_GET['prev_action'] == 'save-style' ) {
      AdminNotice::renderMessage(
        __( 'Style settings has been successfully saved!', EPC_LANG_DOMAIN )
      );
    }

    return epc_load_view(
      EPC_ADMIN_VIEWS . '/main/partials/tab-content/style',
      compact(
        'custom_css',
        'use_default_style'
      )
    );
  }

  /**
  * Renders the settings form.
  *
  * @return string
  */
  protected static function viewSettings() : string
  {
    $settings = get_option( 'epc-settings' );

    if ( isset( $_GET['success'] ) && $_GET['prev_action'] == 'save-settings' ) {
      AdminNotice::renderMessage(
        __( 'Settings has been successfully saved!', EPC_LANG_DOMAIN )
      );
    }

    return epc_load_view(
      EPC_ADMIN_VIEWS . '/main/partials/tab-content/setting',
      compact( 'settings' )
    );
  }
}
