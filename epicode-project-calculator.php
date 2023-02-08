<?php
/**
* Plugin Name: Epicode Project Calculator
* Plugin URI: https://epicode.nl/
* Description: An awesome project cost estimator with flexible costing.
* Version: 0.0.1
* Author: Epicode
* Author URI: https://epicode.nl/
* Text Domain: epc-lang
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Composer's vendor autoloader
require_once __DIR__ . '/vendor/autoload.php';

if ( class_exists( 'EpicodeProjectCalculator\ProjectCalculator' ) ) {
    (new EpicodeProjectCalculator\ProjectCalculator())->initialize(__FILE__);
}
