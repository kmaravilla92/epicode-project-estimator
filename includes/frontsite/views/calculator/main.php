<section
  class="epc js"
  data-epc_data="<?= htmlspecialchars( json_encode( $data ), ENT_QUOTES, 'UTF-8' ) ?>">
  <div class="epc-overlay js" data-id="<?= $overlay_id ?>"></div>
  <div class="epc-wrapper epc-wrapper--small">
    <div class="epc-grid epc-grid--small" data-sticky-container>
      <div class="epc-grid__item epc-grid__item--2/3@medium-up">
        <?=
        epc_load_view(
          EPC_FRONSITE_VIEWS . '/calculator/partials/header',
          compact( 'header' )
        ) ?>
        <div class="epc-u-margin-top--2x-large">
          <ul class="epc-list epc-list--small">
            <li class="epc-list__item">
              <div class="epc-panel u-margin-bottom">
                <input
                  type="text"
                  placeholder="<?php _e( 'Geef je project een naam', 'epc' ); ?>"
                  class="input epc-calc-input epc-calc-input--project js"
                  data-type="title-input"
                  data-next-expander="calc-<?= $calc_id ?>-question-0-expander">
              </div>
            </li>
            <?php
            $count = 0;
            foreach ( $questions as $question_key => $question ) {
              $count++;
              $multiple_answers = $question['multiple_answers'];
              $modal_id = sprintf( 'calc-%s-question-%s-modal', $calc_id, $question_key );
              $expander_id = sprintf( 'calc-%s-question-%s-expander', $calc_id, $question_key );
              $next_expander = sprintf( 'calc-%s-question-%s-expander', $calc_id, $question_key + 1 ); ?>
              <li class="epc-list__item">
                <div class="epc-panel">
                  <div
                    class="epc-expander epc-expander--large js <?= $count == 1 ? 'is-active': ''; ?>"
                    data-expander-id="<?= $expander_id ?>">
                    <header>
                      <div class="epc-layout epc-layout--x-small epc-layout--center">
                        <div class="epc-layout__item">
                          <a href="#" class="epc-expander__link epc-u-text-decoration--none js">
                            <div class="epc-layout epc-layout--x-small epc-layout--center">
                              <div class="epc-layout__item epc-layout__item--fixed">
                                  <?php the_epc_icon( 'plus-circle', ['epc-expander__icon', 'epc-u-color--primary'] ) ?>
                              </div>
                              <div class="epc-layout__item">
                                <h5><?= $question['question'] ?></h5>
                              </div>
                            </div>
                          </a>
                        </div>

                        <div class="epc-layout__item epc-layout__item--fixed">
                          <a href="#" class="epc-modal-link js" data-modal="<?= $modal_id ?>">
                            <?php the_epc_icon( 'info-circle', ['epc-icon--large', 'epc-u-color--grey-light'] ) ?>
                          </a>
                        </div>
                      </div>
                    </header>
                    <div class="epc-expander__content js">
                      <div class="epc-u-margin-top--2x-small">
                        <!-- answers -->
                        <ul class="epc-list">
                        <?php
                        foreach ( $question['answers'] as $answer_key => $answer ) {
                          $label = $answer['label'];
                          $is_multipliable = $answer['multipliable'];

                          $input_type = $multiple_answers ? 'checkbox' : 'radio';
                          if ( $input_type == 'radio' ) {
                            $input_name = sprintf( 'question-%s-answer', $question_key );
                          } else {
                            $input_name = sprintf( 'question-%s-answer-%s', $question_key, $answer_key );
                          }

                          $input_value = '';
                          $input_id = $label_for = $label . ' - ' . $answer_key;
                          $is_checked = ( $input_type == 'radio' && $answer_key == 0 ) ? 'checked' : ''; ?>

                          <li class="epc-list__item">
                            <input
                              type="<?= $input_type ?>"
                              id="<?= $input_id ?>"
                              class="epc-calc-input epc-u-margin-right--4x-small js"
                              name="<?= $input_name ?>"
                              value="<?= $input_value ?>"
                              <?= $is_checked ?>
                              data-type="answer-input"
                              data-question="<?= htmlspecialchars( json_encode( $question ), ENT_QUOTES, 'UTF-8' ) ?>"
                              data-answer="<?= htmlspecialchars( json_encode( $answer ), ENT_QUOTES, 'UTF-8' ) ?>"
                              data-expander="<?= $expander_id; ?>"
                              data-next-expander="<?= $next_expander ?>">

                            <label for="<?= $label_for ?>"><?= $label ?></label>
                          <?php
                          if ( $is_multipliable ) { ?>
                            <div class="epc-multipliable-answer">
                              <div class="layout layout--center layout--x-small">
                                <div class="layout__item">
                                  <input type="number" value="0" class="epc-input epc-calc-input js" data-type="answer-input-multipliable" data-answer-id="<?= $input_id; ?>">
                                </div>
                                <div class="layout__item layout__item--fixed">
                                  <?= $answer['multipliable_label'] ?>
                                </div>
                              </div>
                            </div>
                          <?php
                          } ?>
                          </li>
                        <?php
                        } ?>
                        </ul>
                      </div>
                    </div>
                  </div> <!-- .epc-expander -->
                </div> <!-- .panel -->
                <?php
                // Question's help
                echo epc_load_view(
                  EPC_FRONSITE_VIEWS . '/calculator/partials/modal.question-help',
                  compact( 'modal_id', 'question', 'overlay_id' )
                ) ?>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <!-- Costs Breakdown -->
      <div class="epc-grid__item epc-grid__item--1/3@medium-up epc-u-display--none@medium-down">
        <div
          class="epc-sticky js"
          data-sticky-id="epc-costs-breakdown"
          data-sticky-wrap="true"
          data-margin-top="24"
          data-sticky-for="640">
          <?=
          epc_load_view(
            EPC_FRONSITE_VIEWS . '/calculator/partials/costs-breakdown',
            compact( 'calc_id', 'services', 'intervals', 'modal_submission_id' )
          ) ?>
        </div>
      </div>
    </div> <!-- .grid -->
  </div> <!-- .wrapper -->

  <!-- Submission modal -->
  <?=
  epc_load_view(
    EPC_FRONSITE_VIEWS . '/calculator/partials/modal.submission',
    compact( 'calc_id', 'modal_submission_id', 'modal_submission_thankyou_id', 'overlay_id' )
  ) ?>

  <!-- FAB -->

  <?=
  epc_load_view(
    EPC_FRONSITE_VIEWS . '/calculator/partials/modal.costs-breakdown',
    compact( 'calc_id', 'services', 'intervals', 'overlay_id', 'modal_submission_id', 'modal_costs_breakdown_id' )
  ) ?>

  <aside class="epc-fab epc-costs-fab epc-modal-link js" data-modal="<?= $modal_costs_breakdown_id ?>">
    <div class="epc-layout epc-layout--small epc-layout--center">
      <div class="epc-layout__item epc-layout__item--fixed">
        <figure class="epc-costs-fab__icon">
          <?php the_epc_icon( 'plus' ) ?>
        </figure>
      </div>
      <div class="epc-layout__item">
        <div class="epc-u-text-align--right epc-u-color--white js" data-calc-id="<?= $calc_id ?>">
          <span class="epc-interval-cost js" data-interval="once">&euro; 0,- </span>
        </div>
      </div>
    </div>
  </aside>
  <span class="js epc-end"></span>
</section>
