import $ from 'jquery';

export default class DownloadQuotation {
  constructor($form) {
    // jQuery objects
    this.$form = $form;
    this.$ajaxLoader = $('.js.epc-ajax-loader', this.$form);
    this.$message = $('.js.epc-form-message', this.$form);

    // Scalar
    this.validator = null;
  }

  initialize() {
    this.bindEvents();
    this.initializeValidator();
  }

  bindEvents() {
    this.$form.on('submit', this.submitFormAsAjax.bind(this));
  }

  initializeValidator() {
    this.validator = this.$form.validate({
      validClass: 'epc-form__valid',
      errorClass: 'epc-form__invalid'
    });
  }

  submitFormAsAjax(event) {
    event.preventDefault();

    this.resetMessage();

    if (!this.$form.valid()) {
      this.printMessage('Een of meer velden bevatten een fout. Controleer en probeer het opnieuw.', 'error');
      return false;
    }

    this.$ajaxLoader.addClass('is-active');

    const formData = this.$form.serializeArray();
    const formAction = this.$form.attr('action');

    $.ajax({
      url: formAction,
      type: 'POST',
      data: formData,
      dataType: 'JSON'
    }).done(response => {
      if (response.success) {
        this.printMessage(response.message);
        this.resetForm();
      }
    }).fail((jqXHR, textStatus, errorThrown) => {
      this.printMessage(errorThrown, textStatus);
    }).always(() => {
      this.$ajaxLoader.removeClass('is-active');
    });
  }

  resetMessage() {
    this.$message.hide();
    this.$message.html('');
  }

  printMessage(message = '', state = 'success') {
    this.$message.show();
    this
      .$message
      .removeClass('epc-form-message--success epc-form-message--error')
      .addClass(`epc-form-message--${state}`)
      .html(message);
  }

  resetForm() {
    this.$form[0].reset();
  }
}
