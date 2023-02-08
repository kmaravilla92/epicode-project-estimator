import $ from 'jquery';

// Helper functions
export const answerInputsFilter = (i, elem) => {
  const $elem = $(elem);
  return $elem.is(':checked') && $elem.parents('.js.epc-expander').hasClass('is-active');
};

export const formatPrice = (price = 0, interval = '') => {
  const suffix = interval === 'monthly' ? 'p/m' : '';
  price = price.toLocaleString('nl-NL');
  price = price.indexOf(',') < 0 ? `${price},-` : price;
  return `&euro; ${price} ${suffix}`;
};
