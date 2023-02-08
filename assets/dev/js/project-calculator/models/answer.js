export default class AnswerModel {
  constructor(answer) {
    this.label = answer.label;
    this.multipliable = answer.multipliable;
    this.isBlock = answer.is_block;
    this.multipliableLabel = answer.multipliable_label;
    this.blockQuantity = answer.block_quantity;
    this.description = answer.description;
    this.image = answer.image;
    this.cost = answer.cost;

    this.multipliableValue = 0;
  }

  getLabel() {
    return this.label;
  }

  getDescription() {
    return this.description;
  }

  getImage() {
    return this.image;
  }

  isMultipliable() {
    return this.multipliable;
  }

  setMultipliableValue(value = 0) {
    this.multipliableValue = value;
  }

  getBlockQuantity() {
    return parseInt(this.blockQuantity);
  }

  isFixedBlockQuantity() {
    return this.isBlock && !this.multipliable;
  }

  getCosts() {
    return this.cost;
  }

  getSubTitleLabel() {
    if (this.isMultipliable()) {
      return `${this.multipliableValue} ${this.multipliableLabel}`;
    }
    return this.label;
  }
}
