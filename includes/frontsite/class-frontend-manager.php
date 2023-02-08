<?php
namespace EpicodeProjectCalculator\FrontSite;

class FrontendManager
{
  public static function initialize()
  {
    add_action( 'wp_enqueue_scripts', [__CLASS__, 'enqueueScripts'], 999 );
    add_action( 'wp_head', 'epc_icons_sprite' );
    add_action( 'wp_head', [__CLASS__, 'renderCustomCss'] );
    add_action( 'wp', [__CLASS__, 'addBodyClass'] );
  }

  public static function enqueueScripts()
	{
    if ( get_option('epc-use-default-style', 'yes') == 'yes' ) {
      // wp_register_style(
      //   $handle = SCRIPT_VENDOR_HANDLE,
      //   $src = EPC_ASSETS_DIR_URL . '/dist/css/vendor.css',
      //   $deps = [],
      //   $ver = EPC_ASSETS_VERSION
      // );

      // wp_enqueue_style($handle);

      wp_register_style(
        $handle = SCRIPT_PUBLIC_HANDLE,
        $src = EPC_ASSETS_DIR_URL . '/dist/css/public.css',
        $deps = [],
        $ver = EPC_ASSETS_VERSION
      );

      wp_enqueue_style($handle);
    }

    wp_register_script(
      $handle = SCRIPT_VENDOR_HANDLE,
      $src = EPC_ASSETS_DIR_URL . '/dist/js/vendor.js',
      $deps = [],
      $ver = EPC_ASSETS_VERSION,
      $in_footer = true
    );

    wp_enqueue_script($handle);

    wp_register_script(
      $handle = SCRIPT_PUBLIC_HANDLE,
      $src = EPC_ASSETS_DIR_URL . '/dist/js/public.js',
      $deps = [],
      $ver = EPC_ASSETS_VERSION,
      $in_footer = true
    );

    wp_enqueue_script($handle);
	}

  public static function renderCustomCss()
	{
    $custom_css = get_option( 'epc-custom-css', '' );
    if ( ! empty( $custom_css ) ) {
      printf('<style>%s</style>', $custom_css);
    }
}

	public static function addBodyClass()
	{
    global $post;

    if ( has_shortcode( $post->post_content, EPC_SHORTCODE_KEY ) ) {
      add_filter( 'body_class', function( $classes ) {
        $body_class = 'has-' . EPC_PREFIX;
        return array_merge( $classes, [$body_class] );
      } );
    }
	}
}
