import $ from 'jquery';

import {
  each as ldEach,
  cloneDeep as ldCloneDeep
} from 'lodash';

export default class ExtraCostsQTYManager {
  constructor($root) {
    this.initialQtys = {
      once: 0,
      monthly: 0
    };
    this.qtys = this.initialQtys;

    this.$root = $root;
  }

  getQtys() {
    return this.qtys;
  }

  getQtyByInterval(interval) {
    return this.qtys[interval];
  }

  addQtyByInterval(interval, qty = 1) {
    this.qtys[interval] += qty;
    return this;
  }

  resetQtys() {
    this.qtys = ldCloneDeep(this.initialQtys);
    return this;
  }

  displayQtys() {
    ldEach(this.qtys, (qty, interval) => {
      $(`.js.extra-cost-qty[data-interval="${interval}"]`, this.$root).html(qty);
    });
    return this;
  }
}
