/**
 * Breakpoints
 * -------------------------------- */
export const breakpoints = {
  xSmall: 480,
  small: 640,
  medium: 960,
  large: 1280
};


/**
 * Debounce and throttle functions
 *
 * @see https://bit.ly/2IYpGfV
 * -------------------------------- */
export const debounce = (callback, delay = 200) => {
  let inDebounce;

  return function(...args) {
    const context = this;
    clearTimeout(inDebounce);
    inDebounce = setTimeout(callback.bind(context, ...args), delay);
  };
};

export const throttle = (callback, limit = 40) => {
  let inThrottle;

  return function(...args) {
    const context = this;
    if (inThrottle) return;

    setTimeout(args => {
      callback.apply(context, args);
      inThrottle = false;
    }, limit);
    inThrottle = true;
  };
};
