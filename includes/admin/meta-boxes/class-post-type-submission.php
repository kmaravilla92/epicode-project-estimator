<?php
namespace EpicodeProjectCalculator\Admin\MetaBoxes;

use WP_Post;
use EpicodeProjectCalculator\Frontsite\DownloadQuotation;

/**
* Manages the metaboxes for epc_submission post type.
*/
class PostTypeSubmission
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
			EPC_PREFIX . '-submission-details',
			__( 'Details', EPC_LANG_DOMAIN ),
			[__CLASS__, 'renderQuoteRequestDetailsMetaBox'],
			EPC_POST_TYPE_SUBMISSION
		);
	}

	/**
	* Renders the details of the estimate request.
	*
	* @param WP_Post $post WP_Post instance
	*
	* @return void
	*/
	public static function renderQuoteRequestDetailsMetaBox( WP_Post $post )
	{
		$form_details = get_post_meta( $post->ID, 'form-details', true );
		$main_details_map = [
			'name' 						=> __( 'Name', EPC_LANG_DOMAIN ),
			'email' 					=> __( 'Email address', EPC_LANG_DOMAIN ),
			'telephone' 			=> __( 'Contact Number', EPC_LANG_DOMAIN ),
			'message' 				=> __( 'Any comments', EPC_LANG_DOMAIN ),
		];
		$quote_items_html = DownloadQuotation::loadQuoteItemsHTML( $form_details, 'admin' );
		echo epc_load_view(
			EPC_ADMIN_VIEWS . '/submission/meta-box-quote-request-details',
			compact( 'form_details', 'main_details_map', 'quote_items_html' )
		);
	}
}
