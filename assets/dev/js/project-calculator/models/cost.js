// Helpers
import {
  isEmpty as ldIsEmpty
} from 'lodash';

export default class CostModel {
  constructor(cost, hourlyRates = {}) {
    this.interval = cost.interval;
    this.service = cost.service;
    this.unit = cost.unit;
    this.value = cost.value;

    this.isCostMultipliable = false;
    this.costMultiplier = 1;
    this.hourlyRates = hourlyRates;
  }

  setIsCostMultipliable(isCostMultipliable = false) {
    this.isCostMultipliable = isCostMultipliable;
    return this;
  }

  setCostMultiplier(costMultiplier = 1) {
    this.costMultiplier = costMultiplier;
    return this;
  }

  getCostType() {
    return this.unit === 'percentage' ? 'percentage' : 'fixed';
  }

  getServiceKey() {
    return `${this.interval}-${this.service}`;
  }

  getTotalCost() {
    let totalCost = 0;

    switch (this.unit) {
      case 'hours':
        let hourlyRate = this.hourlyRates[this.service];
        if (ldIsEmpty(hourlyRate)) {
          hourlyRate = this.hourlyRates.basic;
        }
        totalCost = parseFloat(this.value) * parseFloat(hourlyRate);
        break;
      case 'price':
      case 'percentage':
        totalCost = this.value;
        break;
      default:
        break;
    }

    if (this.isCostMultipliable) {
      totalCost *= this.costMultiplier;
    }

    return parseFloat(totalCost);
  }

  isAdditionalCost() {
    return this.service === 'additional';
  }

  isExtraCost() {
    return this.isAdditionalCost();
  }
}
