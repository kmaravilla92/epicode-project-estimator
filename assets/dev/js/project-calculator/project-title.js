import $ from 'jquery';

export default class ProjectTitles {
  constructor({ $titleInput, $titleLabel, $subTitleLabel }) {
    this.$titleInput = $titleInput;
    this.$titleLabel = $titleLabel;
    this.$subTitleLabel = $subTitleLabel;
  }

  initialize() {
    this.bindEvents();
  }

  bindEvents() {
    this.$titleInput.on('keyup', this.updateTitleLabel.bind(this));
  }

  updateTitleLabel({ currentTarget }) {
    const title = $(currentTarget).val();
    this.$titleLabel.each((i, elem) => {
      const $elem = $(elem);
      if ($elem.is('[value]')) {
        $elem.val(title);
      } else {
        $elem.html(title);
      }
    });
  }

  updateSubtitleLabel(subtitles = []) {
    subtitles = subtitles.join(', ');
    this.$subTitleLabel.each((i, elem) => {
      const $elem = $(elem);
      if ($elem.is('[value]')) {
        $elem.val(subtitles);
      } else {
        $elem.html(subtitles);
      }
    });
  }
}
