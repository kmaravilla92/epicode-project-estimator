import $ from 'jquery';

// Helpers
import {
  sumBy as ldSumBy,
  each as ldEach,
  mapValues as ldMapValues,
  cloneDeep as ldCloneDeep
} from 'lodash';

// Components
import expanderInstances from '../expander';
import stickyInstances from '../sticky';

// Helpers
import {
  answerInputsFilter,
  formatPrice
} from './helpers';

// Models
import EPCDataModel from './models/epc-data';
import CostModel from './models/cost';
import QuestionModel from './models/question';
import AnswerModel from './models/answer';

// Components
import ProjectTitles from './project-title';
import DownloadQuotation from './download-quotation';
import QuoteItems from './quote-items';
import ExtraCostsQTYManager from './extra-costs';
import CostsFAB from './costs-fab';

// Main class
class ProjectCalculator {
  constructor($root) {
    // jQuery objects
    this.$root = $root;

    // Scalar
    this.epcData = new EPCDataModel(this.$root.data('epc_data'));

    // jQuery objects
    // Used for querying elements outside of the this.$root like modals
    this.$otherRoot = $(`.js[data-calc-id="${this.epcData.calc_id}"]`);

    this.$titleInput = $('.js.epc-calc-input[data-type="title-input"]', this.$root);
    this.$answerInputs = $('.js.epc-calc-input', this.$root);

    this.$projectTitle = $('.js.epc-project-title', this.$otherRoot);
    this.$projectSubTitle = $('.js.epc-project-subtitle', this.$otherRoot);
    this.$quoteItemsField = $('.js.epc-quote-items', this.$otherRoot);

    this.hourlyRates = this.epcData.hourly_rate;
    this.services = this.epcData.services;
    this.initialCosts = this.costs = this.epcData.initial_costs;

    // Class instances
    this.ProjectTitles = new ProjectTitles({
      $titleInput: this.$titleInput,
      $titleLabel: this.$projectTitle,
      $subTitleLabel: this.$projectSubTitle
    });
    this.QuoteItems = new QuoteItems(this.$quoteItemsField);
    this.DownloadQuotation = new DownloadQuotation($('.js.epc-submission-form', this.$otherRoot));
    this.ExtraCostsQTYManager = new ExtraCostsQTYManager(this.$otherRoot);
    this.CostsFAB = new CostsFAB(this.$root, $('.js.epc-costs-fab', this.$root));
  }

  initialize() {
    this.bindEvents();
    this.ProjectTitles.initialize();
    this.DownloadQuotation.initialize();
    this.CostsFAB.initialize();
  }

  bindEvents() {
    this.$answerInputs.on('change', this.onAnswerChange.bind(this));
    this.$titleInput.on('blur', this.onTitleInputBlur.bind(this));
  }

  resetCosts() {
    this.initialCosts = ldCloneDeep(this.initialCosts);
    this.costs = this.initialCosts;
  }

  // @NOTE: Needs code review, can be simplified.
  calculateCosts() {
    this.resetCosts();
    this.QuoteItems.resetItems();
    this.ExtraCostsQTYManager.resetQtys();

    const $answers = this.$answerInputs.filter(answerInputsFilter);
    let costs = {
      once: ldMapValues(this.initialCosts.once, cost => []),
      monthly: ldMapValues(this.initialCosts.monthly, cost => [])
    };
    let subtitles = [];

    // Iterate through selected answers
    $answers.each((i, elem) => {
      const $answer = $(elem);
      let {
        question,
        answer
      } = $answer.data();

      // Use models for extra functionality
      const questionModel = new QuestionModel(question);
      const answerModel = new AnswerModel(answer);

      // Add answer & answer's question to quote items (Simplified)
      this.QuoteItems.addQuestion({
        question: questionModel.question,
        answer: answerModel.label
      });

      // If answer is multipliable
      const multiplierValue = parseFloat($(`[data-answer-id="${$answer.attr('id')}"]`, this.$root).val());

      // Updates `costs` object to add fixed/percentage costs
      // used for linear calculation.
      ldEach(answerModel.getCosts(), rawCost => {
        const costModel = new CostModel(rawCost, this.hourlyRates);
        const costType = costModel.getCostType();
        const costServiceKey = costModel.getServiceKey();
        const serviceCost = costs[costModel.interval][costServiceKey];

        // fixed or percentage
        if (!(costType in serviceCost)) {
          costs[costModel.interval][costServiceKey][costType] = [];
        }

        if (costType !== 'percentage' && answerModel.isMultipliable()) {
          costModel
            .setIsCostMultipliable(true)
            .setCostMultiplier(multiplierValue);

          answerModel.setMultipliableValue(multiplierValue);
        }

        const answerTotalCost = costModel.getTotalCost();

        costs[costModel.interval][costServiceKey][costType].push({
          value: answerTotalCost
        });

        // Set/add extra costs
        if (costModel.isAdditionalCost()) {
          this.ExtraCostsQTYManager.addQtyByInterval(costModel.interval);

          this.QuoteItems.addExtraByInterval(costModel.interval, {
            label: answerModel.getLabel(),
            description: answerModel.getDescription(),
            image: answerModel.getImage(),
            cost: answerTotalCost,
            costFormatted: formatPrice(answerTotalCost, costModel.interval)
          });
        }
      });

      // Add blocks
      if (answerModel.isFixedBlockQuantity()) {
        this.QuoteItems.addBlocks({
          qty: answerModel.getBlockQuantity()
        });
      } else if (answerModel.isMultipliable()) {
        this.QuoteItems.addBlocks({
          qty: multiplierValue
        });
      }

      // Set subtitles
      if (questionModel.isAnswerAsSubtitle()) {
        subtitles.push(answerModel.getSubTitleLabel());
      }
    });

    // Service costs
    let serviceCosts = {};
    ldEach(costs, (costsByInterval, interval) => {
      serviceCosts[interval] = {
        total: 0,
        totalFormatted: 0
      };

      // once or monthly
      ldEach(costsByInterval, (costsByType, type) => {
        const fixedInitCost = ldSumBy(costsByType['fixed'], cost => cost.value);

        let serviceCost = parseFloat(fixedInitCost);

        serviceCosts[interval][type] = {
          cost: 0,
          costFormatted: 0
        };

        ldEach(costsByType['percentage'], percentage => {
          const percentageValue = parseFloat(percentage.value);
          serviceCost = (1 + (percentageValue / 100)) * parseFloat(serviceCost);
        });

        serviceCost = parseFloat(serviceCost);

        serviceCosts[interval][type] = {
          cost: serviceCost,
          costFormatted: formatPrice(serviceCost, interval)
        };

        serviceCosts[interval].total += serviceCost;

        this.QuoteItems.addCost(interval, {
          label: this.epcData.getServiceLabel(type, interval),
          costs: serviceCosts[interval][type]
        });
      });

      serviceCosts[interval].totalFormatted = formatPrice(serviceCosts[interval].total, interval);

      this.QuoteItems.setCostsTotalByInterval(interval, {
        total: serviceCosts[interval].total,
        totalFormatted: serviceCosts[interval].totalFormatted
      });
    });

    this.ProjectTitles.updateSubtitleLabel(subtitles);
    this
      .QuoteItems
      .computeBlocksCount()
      .syncItemsToInputField();

    this.ExtraCostsQTYManager.displayQtys();
    this.displayServiceCosts(serviceCosts);
  }

  displayServiceCosts(serviceCosts = {}) {
    ldEach(serviceCosts, (costs, interval) => {
      // Services total costs
      ldEach(costs, (cost, serviceKey) => {
        $(`.js.epc-service-cost[data-service="${serviceKey}"]`, this.$otherRoot).html(
          cost.costFormatted
        );
      });

      // Interval total costs
      $(`.js.epc-interval-cost[data-interval="${interval}"]`, this.$otherRoot).html(
        costs.totalFormatted
      );
    });
  }

  openNextQuestion($element) {
    const nextExpander = $element.data('next-expander');
    const expanderInstance = expanderInstances[nextExpander];
    if (expanderInstance) {
      expanderInstance.expand();
    }
  }

  recalcExpanderHeight($element) {
    const expander = $element.data('expander');
    const expanderInstance = expanderInstances[expander];
    if (expanderInstance) {
      expanderInstance.recalcContentHeight();
    }
  }

  updateSticky() {
    if (stickyInstances['epc-costs-breakdown']) {
      stickyInstances['epc-costs-breakdown'].update();
    }
  }

  // @NOTE: Same as onTitleInputBlur
  onAnswerChange({ currentTarget }) {
    this.openNextQuestion($(currentTarget));
    this.recalcExpanderHeight($(currentTarget));
    this.calculateCosts();
    // this.updateSticky();
  }

  // @NOTE: Same as onAnswerChange
  onTitleInputBlur({ currentTarget }) {
    this.openNextQuestion($(currentTarget));
    this.calculateCosts();
    // this.updateSticky();
  }
}

$(document).ready(() => {
  $('.js.epc').each((i, elem) => {
    const projectCalculator = new ProjectCalculator($(elem));
    projectCalculator.initialize();
  });
});
