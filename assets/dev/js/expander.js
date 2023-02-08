import $ from 'jquery';

// Variables
// --------------------------------
const $expanders = $('.js.epc-expander');

let instances = {};

// Class
// --------------------------------
class Expander {
  constructor($elem) {
    this.$elem = $elem;
    this.$link = this.$elem.find('.js.epc-expander__link');
    this.$content = this.$elem.find('.js.epc-expander__content');

    this.id = this.$elem.data('expander-id');
    this.manualOpen = this.$elem.data('expander-manual-open');
    if (typeof this.manualOpen === 'undefined') {
      this.manualOpen = true;
    }

    this.expandHeight = this.$content[0].scrollHeight;
    this.expanded = this.$elem.data('expanded');

    this.init();
  }

  init() {
    this.$link.on('click', this.handleClick.bind(this));
  }

  handleClick(e) {
    e.preventDefault();
    if (this.manualOpen) {
      this.expanded ? this.close() : this.expand();
    }
  }

  recalcContentHeight() {
    // Kind of hacky, but it works for recalculating height of content
    this.$content.css('height', 'auto');

    this.expandHeight = this.$content.css('height');
    this.$content.css('height', this.expandHeight);
  }

  expand() {
    this.expandHeight = this.$content[0].scrollHeight;

    this.$content.css('height', this.expandHeight);
    this.$elem.addClass('is-active');

    this.expanded = true;
  }

  close() {
    this.$elem.removeClass('is-active');
    this.$content.css('height', 0);

    this.expanded = false;
  }
}


// Functions
// --------------------------------
const init = () => {
  if (!$expanders.length) return;

  $expanders.each(function() {
    const expander = new Expander($(this));
    instances[expander.id] = expander;
  });
};


// Event listeners
// --------------------------------
$(document).ready(init);

export default instances;
