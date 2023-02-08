<style>
  .u-padding-top {
    padding-top: 24px;
  }
  .u-epc-padding-left {
    padding-left: 24px;
  }
  .u-font-size--2x-large {
    font-size: 1.5rem;
  }
</style>
<?php
$divider = '<br><hr><br>'; ?>
<h1>
  <?php
  $title = sprintf(
    '%s %s',
    __( 'Project estimate for', EPC_LANG_DOMAIN ),
    $form_details['title']
  );
  if ( isset( $form_details['custom_header_title'] ) ) {
    $title = $form_details['custom_header_title'];
  }
  echo $title; ?>
</h1>

<!-- Project & client initial details -->
<table class="widefat">
  <tbody>
    <tr>
      <td>
        <strong><?= __( 'Project type', EPC_LANG_DOMAIN ) ?>: </strong>
      </td>
      <td class="u-epc-padding-left"><?= $form_details['subtitle'] ?: __( 'N/A', EPC_LANG_DOMAIN ) ?></td>
    </tr>
    <tr>
      <td>
        <strong><?= __( 'Client name', EPC_LANG_DOMAIN ) ?>: </strong>
      </td>
      <td class="u-epc-padding-left"><?= $form_details['name'] ?></td>
    </tr>
    <tr>
      <td>
        <strong><?= __( 'Client email', EPC_LANG_DOMAIN ) ?>: </strong>
      </td>
      <td class="u-epc-padding-left"><?= $form_details['email'] ?></td>
    </tr>
    <tr>
      <td>
        <strong><?= __( 'Client contact #', EPC_LANG_DOMAIN ) ?>: </strong>
      </td>
      <td class="u-epc-padding-left"><?= $form_details['telephone'] ?></td>
    </tr>
    <tr>
      <td>
        <strong><?= __( 'Client message', EPC_LANG_DOMAIN ) ?>: </strong>
      </td>
      <td class="u-epc-padding-left"><?= $form_details['message'] ?></td>
    </tr>
  </tbody>
</table>

<?= $divider ?>

<!-- Questions & answers -->
<table class="widefat">
  <thead>
    <tr>
      <th>
        <b><?= __( 'Questions', EPC_LANG_DOMAIN ) ?></b>
      </th>
      <th class="u-epc-padding-left">
        <b><?= __( 'Answers', EPC_LANG_DOMAIN ) ?></b>
      </th>
    </tr>
  </thead>
  <tbody>
  <?php
  if ( ! empty( $quote_items['questions'] ) ) {
    foreach ( $quote_items['questions'] as $question ) { ?>
    <tr>
      <td><?= $question['question'] ?></td>
      <td class="u-epc-padding-left"><?= $question['answer'] ?></td>
    </tr>
  <?php
    }
  } ?>
  </tbody>
</table>

<?= $divider ?>

<!-- Costs once/monthly -->
<?php
if ( ! empty( $quote_items['costs'] ) ) {
  foreach ( $quote_items['costs'] as $interval => $costs ) { ?>
<h3><?= ucfirst($interval) ?></h3>
<table class="widefat">
  <thead>
    <tr>
      <th>
        <b><?= __( 'Services', EPC_LANG_DOMAIN ) ?></b>
      </th>
      <th class="u-epc-padding-left">
        <b><?= __( 'Costs', EPC_LANG_DOMAIN ) ?></b>
      </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ( $costs as $cost ) { ?>
    <tr>
      <td><?= $cost['label'] ?></td>
      <td class="u-epc-padding-left"><?= $cost['costs']['costFormatted'] ?></td>
    </tr>
  <?php } ?>
  <tr class="u-font-size--2x-large">
    <td class="u-padding-top">
      <strong>Total:</strong>
    </td>
    <td class="u-padding-top u-epc-padding-left">
      <strong><?= $quote_items['costsTotal'][$interval]['totalFormatted']; ?></strong>
    </td>
  </tr>
  </tbody>
</table>
<?php
  }
} ?>
