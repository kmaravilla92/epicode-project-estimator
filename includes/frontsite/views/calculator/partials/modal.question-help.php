<aside
  class="epc-modal js"
  data-modal="<?= $modal_id ?>"
  data-overlay-id="<?= $overlay_id ?>">
  <a href="#" class="epc-link epc-link--grey-light epc-modal__close js">
    <?php the_epc_icon( 'close-circle', ['epc-icon--large'] ) ?>
  </a>
  <header class="epc-modal__header">
    <h6 class="epc-u-margin-bottom--none epc-u-color--grey-light">Help</h6>
    <h4 class="epc-u-color--secondary-dark"><?= $question['question'] ?></h4>
  </header>
  <div class="epc-modal__body">
    <?= $question['help'] ?>
  </div>

  <hr class="epc-u-margin-top epc-u-margin-bottom">

  <footer class="epc-modal__footer">
    <?php
    $simplified = true;
    echo epc_load_view( EPC_FRONSITE_VIEWS . '/calculator/partials/contact-personnel', compact( 'simplified' ) ) ?>
  </footer>
</aside>
