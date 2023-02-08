/**
 * requestAnimationFrame polyfill
 * -------------------------------- */
window.requestAnimationFrame =
    window.requestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(f) { return setTimeout(f, 1000 / 60); };


/**
 * NodeList.forEach polyfill
 *
 * @see https://mzl.la/2JRMnmh
 * -------------------------------- */
if (window.NodeList && !window.NodeList.prototype.forEach) {
  window.NodeList.prototype.forEach = function(callback, thisArg) {
    thisArg = thisArg || window;
    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
}
