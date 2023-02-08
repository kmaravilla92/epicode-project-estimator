<?php
namespace EpicodeProjectCalculator\Admin;

/**
* Manages admin menu related things.
* Mostly for registering menu items located via
* the sidebar of WP admin.
*/
class MenuSetting
{
  /**
  * Initializes menu/submenu registrations.
  *
  * @return void
  */
  public static function initialize()
  {
    add_menu_page(
      __( 'Epicode Project Calculator', EPC_LANG_DOMAIN ),
      __( 'Epicode Project Calculator', EPC_LANG_DOMAIN ),
      'manage_options',
      EPC_PREFIX,
      [Pages\Main::class , 'render'],
      '',
      30
    );

    add_submenu_page(
      EPC_PREFIX,
      __( 'Calculators', EPC_LANG_DOMAIN ),
      __( 'Calculators', EPC_LANG_DOMAIN ),
      'manage_options',
      'edit.php?post_type=' . EPC_POST_TYPE_CALCULATOR
    );

    add_submenu_page(
      EPC_PREFIX,
      __( 'Submissions', EPC_LANG_DOMAIN ),
      __( 'Submissions', EPC_LANG_DOMAIN ),
      'manage_options',
      'edit.php?post_type=' . EPC_POST_TYPE_SUBMISSION
    );

    add_submenu_page(
      EPC_PREFIX,
      __( 'Settings', EPC_LANG_DOMAIN ),
      __( 'Settings', EPC_LANG_DOMAIN ),
      'manage_options',
      EPC_PREFIX . '&tab=settings',
      [Pages\Main::class, 'render']
    );
  }
}
