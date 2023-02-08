<?php

// Icons sprite
// --------------------------------
function epc_icons_sprite() {
  $icons_sprite = EPC_ASSETS_DIR_PATH . '/dist/images/icons-sprite.svg';

  // Stop if there is no icons sprite
  if (!file_exists($icons_sprite)) return;

  echo '<div style="display: none !important;">';
    include($icons_sprite);
  echo '</div>';
}

// Print an icon
// --------------------------------
function the_epc_icon($icon, $classes = []) {
  echo get_epc_icon($icon, $classes);
}

function get_epc_icon($icon, $classes = []) {
  $classes_str = isset($classes[0]) ? ' ' . implode(' ', $classes) : '';

  ob_start(); ?>

  <svg class="epc-icon<?= $classes_str; ?>">
    <use xlink:href="#<?= $icon; ?>"></use>
  </svg>

<?php return ob_get_clean();
}
