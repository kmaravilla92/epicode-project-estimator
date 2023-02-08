<?php
namespace EpicodeProjectCalculator;

use Exception;

/**
* Manages shortcode creation and registration.
*/
class ShortcodeManager
{
  /**
  * Registers creation of shortcode
  *
  * @return boolean
  */
  public static function initialize()
  {
    add_shortcode( EPC_SHORTCODE_KEY, [__CLASS__, 'render'] );
  }

  /**
  * Renders the calculator used for shortcode
  *
  * @param array $atts Shortcode options.
  * @return string
  */
  public static function render( $atts ) : string
  {
    $atts = shortcode_atts( [
      'id' => 0
    ], $atts );

    try {
      return FrontSite\Calculator::render( $atts['id'] );
    } catch ( Exception $e ) {
      return $e->getMessage();
    }
  }

  /**
  * Generates shortcode's text
  *
  * @param int $calc_id ID of calculator.
  * @return string
  */
  public static function generateShortcodeText( int $calc_id ) : string
  {
    return sprintf( '[%s id=%s]', EPC_SHORTCODE_KEY, $calc_id );
  }

  /**
  * Generates shortcode's text input, used via admin for
  * easy copy/paste of shortcode's text.
  *
  * @param int $calc_id ID of calculator.
  * @return string
  */
  public static function generateShortcodeTextField( int $calc_id ) : string
  {
    $shortcode_text = ShortcodeManager::generateShortcodeText( $calc_id );
    return sprintf(
      '<input
        type="text"
        value="%s"
        class="large-text code"
        readonly="readonly"
        onfocus="this.select()">
      ',
      $shortcode_text
    );
  }
}
