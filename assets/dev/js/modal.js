import $ from 'jquery';
import {
  each as ldEach
} from 'lodash';
import overlayInstances from './overlay';

// Variables
// --------------------------------
const $modals = $('.js.epc-modal');
const $body = $(document.body);

let instances = {};


// Object
// --------------------------------
class Modal {
  constructor($modal) {
    this.$modal = $modal;
    this.id = this.$modal.data('modal');
    this.overlayId = this.$modal.data('overlay-id');
    this.overlay = overlayInstances[this.overlayId];

    this.$link = $(`.js.epc-modal-link[data-modal='${this.id}']`);
    this.$close = this.$modal.find('.js.epc-modal__close');

    this.isActive = false;

    this.deactivateFromDOM = e => {
      if ($body.hasClass('modal-is-active') && e.keyCode === 27) {
        this.deactivate.apply(this);
      }
    };

    this.init();
  }

  init() {
    // Modals should be direct descendants of body element
    this.$modal.detach().appendTo($body);

    // Add to modal instances
    instances[this.id] = this;

    // Event listeners
    this.$link.on('click', this.activate.bind(this));
    this.$close.on('click', this.deactivate.bind(this));
  }

  activate(e) {
    e && e.preventDefault();
    if (this.isActive) return;

    // Deactivates all active modal
    ldEach(instances, instance => {
      instance.deactivate();
    });

    // Activate overlay with deactivate as callback
    this.overlay.activate(this.deactivate.bind(this));

    // Add active classes
    $body.addClass('modal-is-active');
    this.$modal.addClass('is-active');

    // Set state
    this.isActive = true;

    // Listen for escape key
    $(document).on('keydown', this.deactivateFromDOM);
  }

  deactivate(e) {
    e && e.preventDefault();
    if (!this.isActive) return;

    // Deactivate overlay
    this.overlay.deactivate();

    // Remove active classes
    $body.removeClass('modal-is-active');
    this.$modal.removeClass('is-active');

    // Set state
    this.isActive = false;

    // Stop listening for escape key
    $(document).off('keydown', this.deactivateFromDOM);
  }
}


// Functions
// --------------------------------
const init = e => {
  // Stop if no modals
  if (!$modals.length) return;

  $modals.each(function() {
    new Modal($(this));
  });
};


// Event listeners
// --------------------------------
$(document).ready(init);


// Export instances
// --------------------------------
export default instances;
