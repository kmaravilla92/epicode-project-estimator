import $ from 'jquery';

const $overlays = $('.js.epc-overlay');

let instances = {};

class Overlay {
  constructor($element) {
    this.$element = $element;
    this.isActive = false;
  }

  activate(clickCallback = () => {}) {
    if (this.isActive) return;

    this.$element.addClass('is-active');

    this.$element.on('click', clickCallback);
    this.isActive = true;
  }

  deactivate() {
    if (!this.isActive) return;

    this.$element.removeClass('is-active');

    // if (callback) callback()
    this.$element.off('click');
    this.isActive = false;
  }
}

$(document).ready(() => {
  $overlays.each((i, overlay) => {
    const $overlay = $(overlay);
    const overlayId = $overlay.data('id') || null;
    instances[overlayId] = new Overlay($overlay);
  });
});

export default instances;
