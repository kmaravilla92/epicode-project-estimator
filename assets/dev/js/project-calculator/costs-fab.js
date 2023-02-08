import $ from 'jquery';
import { throttle } from '../utilities';

// Variables
const $window = $(window);

export default class CostsFAB {
  constructor(
    $element,
    $fab,
    offset = 96 // Default section padding
  ) {
    // jQuery objects
    this.$element = $element;
    this.$fab = $fab;
    // Scalar
    this.offset = offset;
    this.isActive = false;
  }

  initialize() {
    this.bindEvents();
  }

  bindEvents() {
    this.$fab.detach().appendTo($('body'));
    $window.on('scroll load', throttle(this.toggleFABVisibility.bind(this), 100));
  }

  toggleFABVisibility() {
    const elementScrollThreshold = {
      above: this.$element.offset().top - this.offset,
      below: ((this.$element.offset().top + this.$element.outerHeight(true)) + this.offset) - window.innerHeight
    };

    const windowScrollTop = $window.scrollTop();
    const windowScrollTBottom = $window.scrollTop() + window.innerHeight;

    if (!this.isActive && windowScrollTBottom >= elementScrollThreshold.above && windowScrollTop <= elementScrollThreshold.below) {
      this.$fab.addClass('is-active');
      this.isActive = true;
    } else if (this.isActive && (windowScrollTBottom < elementScrollThreshold.above || windowScrollTop > elementScrollThreshold.below)) {
      this.$fab.removeClass('is-active');
      this.isActive = false;
    }
  }
}
