<header>
  <hgroup class="epc-u-margin-bottom">
    <?php if ( ! empty( $header['supertitle'] ) ) { ?>
    <h4 class="epc-u-color--grey epc-u-margin-bottom--4x-small"><?= $header['supertitle'] ?></h4>
    <?php } ?>
    <?php if ( ! empty( $header['title'] ) ) { ?>
    <h3 class="epc-title epc-title--2"><?= $header['title'] ?></h3>
    <?php } ?>
  </hgroup>
  <?php if ( ! empty( $header['subtitle'] ) ) { ?>
  <div class="epc-rich-content">
    <?= $header['subtitle'] ?>
  </div>
  <?php } ?>
</header>
