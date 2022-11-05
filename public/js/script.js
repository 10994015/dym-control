/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
var sideBarLink = document.getElementsByClassName('sideBarLink');
var searchBtn = document.getElementById('searchBtn');
if (window.location.pathname.includes('home')) {
  sideBarLink[0].classList.add('focus');
}
if (window.location.pathname.includes('gameManagement')) {
  sideBarLink[4].classList.add('focus');
}
window.addEventListener('openSearch', function (e) {
  if (e.detail.password == '1') {
    searchBtn.classList.add('open');
    searchBtn.disabled = false;
  } else {
    searchBtn.classList.remove('open');
    searchBtn.disabled = true;
  }
});
/******/ })()
;