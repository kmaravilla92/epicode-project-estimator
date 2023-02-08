<aside
  class="epc-u-padding--none epc-modal js"
  data-modal="<?= $modal_costs_breakdown_id ?>"
  data-overlay-id="<?= $overlay_id ?>">
  <a href="#" class="epc-modal__close js">
    <?php the_epc_icon( 'close-circle', ['epc-icon--large', 'epc-u-color--white'] ) ?>
  </a>
  <?=
  epc_load_view(
    EPC_FRONSITE_VIEWS . '/calculator/partials/costs-breakdown',
    compact( 'calc_id', 'services', 'intervals', 'overlay_id', 'modal_submission_id' )
  ) ?>
</aside>
