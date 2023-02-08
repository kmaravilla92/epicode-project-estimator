<?php
namespace EpicodeProjectCalculator\FrontSite;

use Dompdf\Dompdf;

class DownloadQuotation
{
  public static function initialize()
  {
    add_action( 'wp_ajax_download-quotation', [__CLASS__, 'handleDownloadQuotation'] );
    add_action( 'wp_ajax_nopriv_download-quotation', [__CLASS__, 'handleDownloadQuotation'] );

    add_action( 'admin_post_view-submission-pdf', [__CLASS__, 'handleSubmissionPDFView'] );
    add_action( 'admin_post_nopriv_view-submission-pdf', [__CLASS__, 'handleSubmissionPDFView'] );
  }

  public static function handleDownloadQuotation()
  {
    $form_details = $_POST['submission'];
    $submission_id = self::saveSubmission( $form_details );
    self::sendQuoteToCustomerViaEmail( $submission_id, $form_details );
    self::sendEmailNotificationToAdmin( $submission_id, $form_details );

    $response_data = [
      'success' => true,
      'message' => __( 'Controleer alstublieft uw e-mail voor verdere instructies over het downloaden van uw PDF-prijsopgave.', EPC_LANG_DOMAIN )
    ];

    wp_send_json( $response_data, 200 );
  }

  public static function handleSubmissionPDFView()
  {
    $submission_id = $_GET['submission_id'];
    $hashed_secret_key = $_GET['secret_key'];

    
    $form_details = get_post_meta( $submission_id, 'form-details', true );
    $secret_key = get_post_meta( $submission_id, 'secret-key', true );

    if (!wp_check_password($secret_key, $hashed_secret_key)) {
      wp_die( __( 'Unable to access PDF.', EPC_LANG_DOMAIN ) );
    }

    $pdf_name = __( 'Prijsindicatie', EPC_LANG_DOMAIN ) . ' ' . get_bloginfo( 'name' ) . '.pdf';

    $quote_pdf = new Dompdf;
    $quote_html = self::loadQuoteItemsHTML( $form_details );

    $quote_pdf->loadHtml( $quote_html );
    $quote_pdf->setPaper( 'A4', 'portrait' );
    $quote_pdf->render();
    $quote_pdf->stream( $pdf_name, ['Attachment' => false] );
  }

  public static function wp_mail_content_type()
  {
    return 'text/html';
  }

  private function sendQuoteToCustomerViaEmail( int $submission_id, array $form_details )
  {
      // Settings
    $settings = get_option( 'epc-settings' );

    // send email to user
    $to = $form_details['email'];
    $subject = __( 'Prijsindicatie voor ', EPC_LANG_DOMAIN ) . $form_details['title'];
    $message = epc_load_view(
      EPC_FRONSITE_VIEWS . '/submission/email-customer',
      [
        'subject'               => $subject,
        'client_name'           => $form_details['name'],
        'project_name'          => $form_details['title'],
        'admin_name'            => $settings['admin-name'],
        'submission_pdf_link'   => self::getSubmissionPDFViewLinkById($submission_id),
      ]
    );

    $headers = [];
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = sprintf('From: %s <%s>', $settings['admin-name'], $settings['admin-email']);

    add_filter( 'wp_mail_content_type', [__CLASS__, 'wp_mail_content_type'] );
    wp_mail( $to, $subject, $message, $headers );
    remove_filter( 'wp_mail_content_type', [__CLASS__, 'wp_mail_content_type'] );
  }

  private function sendEmailNotificationToAdmin( int $submission_id, array $form_details )
  {
    // Settings
    $settings = get_option( 'epc-settings' );

    // send email to admin
    $to = $settings['admin-email'];
    $subject = __( 'A new contact request via ', EPC_LANG_DOMAIN ) . get_bloginfo( 'name' ) . ' ' . __( 'has been received.', EPC_LANG_DOMAIN );

    $message = epc_load_view(
      EPC_FRONSITE_VIEWS . '/submission/email-admin',
      [
        'client_name'     => $form_details['name'],
        'admin_name'      => $settings['admin-name'],
        'submission_link' => get_edit_post_link( $submission_id )
      ]
    );

    $headers = [];
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = sprintf('From: %s <%s>', $settings['admin-name'], $settings['admin-email']);

    wp_mail( $to, $subject, $message, $headers );
  }

  private function saveSubmission( array $form_details )
  {
    // insert submission post type
    $post_title = sprintf(
      '%s %s %s %s',
      __( 'Quotation request by', EPC_LANG_DOMAIN ),
      $form_details['name'],
      __( 'at' ),
      date('F d,Y H:i:s A')
    );

    $meta_input = [
      'form-details' => $form_details,
      'secret-key' => uniqid()
    ];

    $post_arr = [
      'post_type'   => EPC_POST_TYPE_SUBMISSION,
      'post_status' => 'publish',
      'post_title'  => $post_title,
      'meta_input'  => $meta_input,
    ];

    return wp_insert_post( $post_arr );
  }

  public static function loadQuoteItemsHTML( array $form_details, string $view_path = 'frontsite' ) : string
  {
    $quote_items = json_decode( $form_details['quote_items'], true );
    $view_root_path = EPC_FRONSITE_VIEWS;
    if ( $view_path == 'admin' ) {
      $view_root_path = EPC_ADMIN_VIEWS;
    }
    return epc_load_view(
      $view_root_path . '/submission/quotation-dompdf-html',
      compact('form_details', 'quote_items')
    );
  }

  public static function getSubmissionPDFViewLinkById( int $submission_id ) : string
  {
    $secret_key = get_post_meta($submission_id, 'secret-key', true);
    $http_query = http_build_query([
      'action' => 'view-submission-pdf',
      'submission_id' => $submission_id,
      'secret_key' => wp_hash_password($secret_key)
    ]);
    return admin_url( 'admin-post.php?' . $http_query );
  }
}
