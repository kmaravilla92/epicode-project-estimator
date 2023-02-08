<?php
namespace EpicodeProjectCalculator\Admin;

/**
* Custom version of WP's admin notices.
*/
class AdminNotice
{
	/**
	* Adds a new message via admin_notices WP action hook.
	*
	* @param string $message The message to be displayed.
	* @param string $type The type of notice to be displayed.
	*
	* @return void
	*/
	public static function add( string $message = '', string $type = 'success' )
	{
		add_action( 'admin_notices', function () use( $message, $type ) {
			static::renderMessage( $message, $type );
		} );
	}

	/**
	* Renders the WP admin notice.
	*
	* @param string $message The message to be displayed.
	* @param string $type The type of notice to be displayed.
	*
	* @return void
	*/
	public static function renderMessage( string $message = '', string $type = 'success' )
	{
		$classes = "updated notice notice-{$type} is-dismissible";
		printf('<div class="%s"><p>%s</p></div>', $classes, $message);
	}
}
