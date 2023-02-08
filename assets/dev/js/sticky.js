import $ from 'jquery';
import Sticky from 'sticky-js';

const stickySelector = '.js.epc-sticky';
const $stickys = $(stickySelector);
let instances = {};

const init = () => {
  $stickys.each((i, element) => {
    const $element = $(element);
    const identifier = $element.data('sticky-id');

    instances[identifier] = new Sticky(stickySelector);
  });
};

$(document).ready(init);

export default instances;
