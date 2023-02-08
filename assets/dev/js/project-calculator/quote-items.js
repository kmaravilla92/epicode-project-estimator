import {
  cloneDeep as ldCloneDeep
} from 'lodash';

export default class QuoteItems {
  constructor($inputField) {
    this.$inputField = $inputField;

    this.initialItems = {
      questions: [],
      blocks: [],
      blocks_count: 0,
      extras: {
        once: [],
        monthly: []
      },
      costs: {
        once: [],
        monthly: []
      },
      costsTotal: {
        once: {
          cost: 0,
          costFormatted: 0
        },
        monthly: {
          cost: 0,
          costFormatted: 0
        }
      }
    };

    this.items = this.initialItems;
  }

  addQuestion(question) {
    this.items.questions.push(question);
    return this;
  }

  addBlocks(block) {
    this.items.blocks.push(block);
    return this;
  }

  computeBlocksCount() {
    this.items.blocks_count = this.items.blocks.reduce((acc, cur) => acc + cur.qty, 0);
    return this;
  }

  addExtraByInterval(interval, extra) {
    this.items.extras[interval].push(extra);
    return this;
  }

  addCost(interval, cost) {
    this.items.costs[interval].push(cost);
    return this;
  }

  setCostsTotalByInterval(interval, cost) {
    this.items.costsTotal[interval] = cost;
    return this;
  }

  resetItems() {
    this.items = ldCloneDeep(this.initialItems);
    return this;
  }

  getItems() {
    return this.items;
  }

  getItemsAsJSONString() {
    return JSON.stringify(this.getItems());
  }

  syncItemsToInputField() {
    this.$inputField.val(this.getItemsAsJSONString());
    return this;
  }
}
