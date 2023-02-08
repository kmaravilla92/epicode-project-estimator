<?php
$icon_size = $simplified ? '' : 'epc-icon--large'; ?>

<div class="epc-layout epc-layout--x-small epc-layout--center">
  <div class="epc-layout__item epc-layout__item--fixed">
    <figure class="epc-avatar epc-avatar--bordered">
      <div class="epc-background" style="background-image: url('<?= EPC_ASSETS_DIR_URL ?>/dist/images/avatar-willem.jpg');"></div>
    </figure>
  </div>
  <div class="epc-layout__item">
    <h6 class="epc-u-margin-bottom--none epc-u-color--primary-dark">Willem</h6>
    <span>Managing Director</span>
  </div>
</div>

<div class="epc-u-margin-top<?= $simplified ? '--2x-small' : '' ?>">
  <ul class="epc-list epc-list--x-small">
    <li class="epc-list__item">
      <div class="epc-layout epc-layout--x-small epc-layout--center">
        <div class="epc-layout__item epc-layout__item--fixed">
          <?php the_epc_icon( 'phone', [$icon_size, 'epc-u-color--primary-dark'] ) ?>
        </div>
        <div class="epc-layout__item">
          <?php if ( ! $simplified ) { ?>
          <h6 class="epc-u-margin-bottom--none epc-u-color--primary-dark">Bellen</h6>
          <?php } ?>
          <a href="tel:+0853030050" class="epc-u-color--grey">085 - 30 300 50</a> <br>
        </div>
      </div>
    </li>
    <li class="epc-list__item">
      <div class="epc-layout epc-layout--x-small epc-layout--center">
        <div class="epc-layout__item epc-layout__item--fixed">
          <?php the_epc_icon( 'email', [$icon_size, 'epc-u-color--primary-dark'] ) ?>
        </div>
        <div class="epc-layout__item">
          <?php if ( ! $simplified ) { ?>
          <h6 class="epc-u-margin-bottom--none epc-u-color--primary-dark">Email</h6>
          <?php } ?>
          <a href="mailto:hello@epicode.nl" class="epc-u-color--grey">hello@epicode.nl</a>
        </div>
      </div>
    </li>
  </ul>
</div>
