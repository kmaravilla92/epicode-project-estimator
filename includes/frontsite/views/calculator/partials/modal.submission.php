<aside
  class="epc-modal js"
  data-modal="<?= $modal_submission_id ?>"
  data-overlay-id="<?= $overlay_id ?>"
  data-calc-id="<?= $calc_id ?>">
  <a href="#" class="epc-link epc-link--grey-light epc-modal__close js">
    <?php the_epc_icon( 'close-circle', ['epc-icon--large'] ) ?>
  </a>
  <header class="epic-modal__header">
    <hgroup>
      <h5 class="epc-title epc-title--4 epc-u-margin-bottom--4x-small">
        <span class="epc-u-color--secondary-dark epc-project-title js"><?= __( 'My project', EPC_LANG_DOMAIN ) ?></span>
      </h5>
      <h6 class="epc-u-color--grey-light epc-project-subtitle js"></h6>
    </hgroup>
    <div class="epc-u-margin-top--2x-small epc-u-margin-bottom--2x-large">
      <?= __( 'Klaar met het configureren van je project? Vul hieronder je gegevens in en ontvang de specificatie & een uitleg over onze werkwijze via email!', EPC_LANG_DOMAIN ) ?>
    </div>
  </header>
  <div class="u-margin-top">
    <div class="epc-layout epc-layout--default epc-layout--stack@small">
      <div class="epc-layout__item">
        <form action="<?= admin_url( 'admin-ajax.php' ) ?>" method="POST" class="epc-form epc-submission-form js">
          <input type="hidden" name="submission[title]" value="" class="epc-project-title js">
          <input type="hidden" name="submission[subtitle]" value="" class="epc-project-subtitle js">
          <input type="hidden" name="submission[quote_items]" value="" class="epc-quote-items js">
          <input type="hidden" name="action" value="download-quotation">
          <ul class="list list--x-small">
            <li class="list__item">
              <div class="epc-affix-input epc-affix-input--prefix">
                <span class="epc-affix-input__affix">
                  <?php the_epc_icon( 'user' ) ?>
                </span>
                <input
                  type="text"
                  name="submission[name]"
                  class="epc-input epc-affix-input__input u-color--grey"
                  placeholder="<?= __( 'Naam', EPC_LANG_DOMAIN ) ?>"
                  required="required"
                  autocomplete="off"
                  data-msg="<?= __( 'Verplicht.', EPC_LANG_DOMAIN ) ?>">
                <span class="epc-affix-input__affix epc-affix-input__affix--right epc-form-valid-icon">
                  <svg class="epc-icon epc-u-color--success">
                    <use xlink:href="#check-circle"></use>
                  </svg>
                </span>
              </div>
            </li>
            <li class="list__item">
              <div class="epc-affix-input epc-affix-input--prefix">
                <span class="epc-affix-input__affix">
                  <?php the_epc_icon( 'phone' ) ?>
                </span>
                <input
                  type="tel"
                  name="submission[telephone]"
                  class="epc-input epc-affix-input__input u-color--grey"
                  placeholder="<?= __( 'Telefoonnummer', EPC_LANG_DOMAIN ) ?>"
                  required="required"
                  autocomplete="off"
                  data-msg="<?= __( 'Verplicht.', EPC_LANG_DOMAIN ) ?>">
                <span class="epc-affix-input__affix epc-affix-input__affix--right epc-form-valid-icon">
                  <svg class="epc-icon epc-u-color--success">
                    <use xlink:href="#check-circle"></use>
                  </svg>
                </span>
              </div>
            </li>
            <li class="list__item">
              <div class="epc-affix-input epc-affix-input--prefix">
                <span class="epc-affix-input__affix">
                  <?php the_epc_icon( 'email' ) ?>
                </span>
                <input
                  type="email"
                  name="submission[email]"
                  class="epc-input epc-affix-input__input u-color--grey"
                  placeholder="<?= __( 'Emailaddress', EPC_LANG_DOMAIN ) ?>"
                  required="required"
                  autocomplete="off"
                  data-msg="<?= __( 'Verplicht.', EPC_LANG_DOMAIN ) ?>"
                  data-msg-email="<?= __( 'Ongeldige indeling.', EPC_LANG_DOMAIN ) ?>">
                <span class="epc-affix-input__affix epc-affix-input__affix--right epc-form-valid-icon">
                  <svg class="epc-icon epc-u-color--success">
                    <use xlink:href="#check-circle"></use>
                  </svg>
                </span>
              </div>
            </li>
            <li class="list__item">
              <div class="u-position--relative">
                <textarea
                  name="submission[message]"
                  cols="40"
                  rows="10"
                  class="epc-input epc-input--textarea u-color--grey"
                  placeholder="<?= __( 'Bericht', EPC_LANG_DOMAIN ) ?>"
                  required="required"
                  autocomplete="off"
                  data-msg="<?= __( 'Verplicht.', EPC_LANG_DOMAIN ) ?>"
                  ></textarea>
                <span class="epc-affix-input__affix epc-affix-input__affix--right epc-form-valid-icon">
                  <svg class="epc-icon epc-u-color--success">
                    <use xlink:href="#check-circle"></use>
                  </svg>
                </span>
              </div>
            </li>
            <li class="list__item">
              <div class="u-text-align--right">
                <input type="submit" value="<?= __( 'Versturen', EPC_LANG_DOMAIN ) ?>" class="epc-link">
              </div>
            </li>
          </ul>
          <div class="epc-ajax-loader js"></div>
          <div class="epc-form-message js"></div>
        </form>
      </div>
      <div class="epc-layout__item">
        <div class="contact-info epc-u-padding-left">
          <?= epc_load_view( EPC_FRONSITE_VIEWS . '/calculator/partials/contact-personnel', ['simplified' => true] ) ?>
        </div>
      </div>
    </div>
  </div>
</aside>

<?= epc_load_view( EPC_FRONSITE_VIEWS . '/calculator/partials/modal.submission-thankyou', compact( 'overlay_id', 'modal_submission_thankyou_id' ) ); ?>
