<?php
namespace EpicodeProjectCalculator\Admin\MetaBoxes;

use WP_Post;
use EpicodeProjectCalculator\ShortcodeManager;

/**
* Manages the metaboxes for epc_calculator post type.
*/
class PostTypeCalculator
{
	/**
	* Initializes filter/hooks
	* - Hooks loading of metaboxes
	*
	* @return void
	*/
	public static function initialize()
	{
		add_action( 'load-post.php',     [__CLASS__, 'initMetaBoxes'] );
		add_action( 'load-post-new.php', [__CLASS__, 'initMetaBoxes'] );
	}

	/**
	* Hooks metabox.
	*
	* @return void
	*/
	public static function initMetaBoxes()
	{
		add_action( 'add_meta_boxes', [__CLASS__, 'addMetaBoxes'] );
	}

	/**
	* Adds metabox.
	*
	* @return void
	*/
	public static function addMetaBoxes()
	{
		add_meta_box(
			EPC_PREFIX . '-calculator-shortcode',
			__( 'Shortcode', EPC_LANG_DOMAIN ),
			[__CLASS__, 'renderCalculatorShortcode'],
			EPC_POST_TYPE_CALCULATOR,
      'side'
		);
	}

	/**
	* Renders shortcode text field.
	*
	* @param WP_Post $post WP_Post instance
	*
	* @return void
	*/
	public static function renderCalculatorShortcode( WP_Post $post )
	{
		echo ShortcodeManager::generateShortcodeTextField( $post->ID );
	}
}
