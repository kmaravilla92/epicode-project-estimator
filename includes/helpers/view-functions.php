<?php

if ( ! function_exists( 'epc_load_view' ) ) {
  /**
  * Loads a template from a specified directory and passes
  * associative array to be used as local variables in that template.
  *
  * @param string $path Directory path
  * @param array $data Associative array to used as local variables
  *
  * @return string
  */
  function epc_load_view( string $path, array $data = [] ) : string {
    extract($data);
    $template = "$path.php";
    if ( ! file_exists( $template ) ) {
      wp_die( "Template not found: $template" );
    }
    ob_start();
    include $template;
    return ob_get_clean();
  }
}
