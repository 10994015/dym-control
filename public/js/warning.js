/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/warning.js ***!
  \*********************************/
var loginWarningText = document.getElementById('loginWarningText');
window.Livewire.emit('watchFail');
window.addEventListener('showWarning', function (e) {
  loginWarningText.style.display = 'block';
});
window.addEventListener('closeWarning', function (e) {
  loginWarningText.style.display = 'none';
});
/******/ })()
;