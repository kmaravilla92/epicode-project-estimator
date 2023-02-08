<?php
namespace EpicodeProjectCalculator\FrontSite;

use Exception;
use WP_Post;
use WP_Query;

class Calculator
{
  public static function render( int $calc_id ) : string
  {
    if ( ! self::findCalcById( $calc_id ) ) {
      throw new Exception(
        __( sprintf( 'Project calculator with %s id was not found.', $calc_id ), EPC_LANG_DOMAIN )
      );
    }

    $data = self::getData( $calc_id );

    return epc_load_view(
      EPC_FRONSITE_VIEWS . '/calculator/main',
      $data
    );
  }

  public static function getData( int $calc_id ) : array
  {
    $acf_fields = get_fields( $calc_id );
    $services = self::getServices( $acf_fields['questions'] );
    $costs = $initial_costs = self::getInitialCosts( $services );
    $intervals = ['once', 'monthly'];

    $overlay_id = sprintf( 'calc-%s-overlay', $calc_id );
    $modal_submission_id = sprintf( 'calc-%s-submission', $calc_id );
    $modal_submission_thankyou_id = sprintf( 'calc-%s-submission-thankyou', $calc_id );
    $modal_costs_breakdown_id = sprintf( 'calc-%s-costs-breakdown', $calc_id );

    $data = compact(
      'calc_id',
      'services',
      'initial_costs',
      'intervals',
      'overlay_id',
      'modal_submission_id',
      'modal_submission_thankyou_id',
      'modal_costs_breakdown_id'
    ) + $acf_fields;

    return $data;
  }

  public static function getServicesLabels() : array
  {
    return [
      'design'                => __( 'Design', EPC_LANG_DOMAIN ),
      'development'           => __( 'Development', EPC_LANG_DOMAIN ),
      'project_management'    => __( 'Project Management', EPC_LANG_DOMAIN ),
      'hosting'               => __( 'Hosting', EPC_LANG_DOMAIN ),
      'onderhoud'             => __( 'Onderhoud', EPC_LANG_DOMAIN ),
      'additional'            => __( 'Extra\'s', EPC_LANG_DOMAIN ),
    ];
  }

  public static function getServices( array $questions = [] ) : array
  {
    $services_labels = self::getServicesLabels();

    $services = [
      'once' => [],
      'monthly' => [],
    ];

    foreach ( $questions as $question ) {
      $answers = $question['answers'];
      foreach ( $answers as $answer ) {
        $costs = $answer['cost'];
        foreach ( $costs as $cost ) {
          $cost_interval = $cost['interval'];
          $cost_service = $cost['service'];
          $service_key = $cost_interval . '-' . $cost_service;
          $service_label = $services_labels[$cost_service];

          $services[$cost_interval][$service_key] = $service_label;
          // ['label' => '', 'displayed' => false]
        }
      }
    }

    return $services;
  }

  public static function getInitialCosts( array $services = [] ) : array
  {
    $costs = [
      'once' => [],
      'monthly' => []
    ];

    foreach ( $costs as $interval => $cost ) {
      foreach ( $services[$interval] as $service_key => $service_label ) {
        $costs[$interval][$service_key] = 0;
      }
    }

    return $costs;
  }

  public static function findCalcById( int $id ) : ?WP_Post
  {
    $calcs = new WP_Query( [
      'post_type' => EPC_POST_TYPE_CALCULATOR,
      'post__in' => [$id]
    ] );

    return current($calcs->posts) ?: null;
  }
}
