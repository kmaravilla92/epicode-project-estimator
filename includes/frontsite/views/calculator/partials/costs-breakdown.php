<div class="epc-panel epc-panel--flush js" data-calc-id="<?= $calc_id ?>">
  <div class="epc-u-padding epc-u-background-color--secondary">
    <header>
      <hgroup>
        <h5 class="epc-title epc-title--4 epc-u-margin-bottom--4x-small">
          <span class="epc-u-color--secondary-dark epc-project-title js"><?= __( 'My project', EPC_LANG_DOMAIN ) ?></span>
        </h5>
        <h6 class="epc-u-color--white-light epc-project-subtitle js"></h6>
      </hgroup>
    </header>
    <?php foreach ( $intervals as $interval ) { ?>
    <div class="epc-u-padding-top epc-u-padding-bottom">
      <table class="epc-table epc-table--fixed epc-table--white">
        <tbody>
          <?php foreach ( $services[$interval] as $service_key => $service_label ) { ?>
          <tr class="epc-table__row">
            <td class="epc-table__head">
              <?php if ( $interval . '-additional' === $service_key ) { ?>
              <span class="extra-cost-qty js" data-interval="<?= $interval ?>">0</span>
              <?php } ?>
              <?= $service_label ?>
            </td>
            <td class="epc-table__data epc-u-text-align--right">
              <span class="epc-service-cost js" data-service="<?= $service_key ?>">-</span>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <hr class="epc-hr epc-hr--white">
    <div class="epc-u-padding-top epc-u-padding-bottom--2x-small">
      <table class="epc-table epc-table--fixed epc-table--white">
        <tbody>
          <tr class="epc-table__row">
            <td class="epc-table__head">&nbsp;</td>
            <td class="epc-table__data epc-u-text-align--right">
              <span class="epc-interval-cost js" data-interval="<?= $interval ?>">- </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php } ?>
  </div>
</div> <!-- .epc-panel -->
<div class="epc-u-text-align--center epc-u-background-color--white">
  <a href="#" class="epc-u-display--block epc-u-padding epc-link epc-modal-link js" data-modal="<?= $modal_submission_id ?>">
    <div class="epc-u-color--error">
      <?php
      the_epc_icon( 'pdf' );
      _e( 'Download als PDF', EPC_LANG_DOMAIN ); ?>
    </div>
  </a>
</div>
