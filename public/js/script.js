/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
var sideBarLink = document.getElementsByClassName('sideBarLink');
var searchBtn = document.getElementById('searchBtn');
var theDayAnswerModal = document.getElementById('theDayAnswerModal');
var closetheDayAnswerModal = document.getElementById('closetheDayAnswerModal');
var changeResult = document.getElementById('changeResult');
var closeChangeResult = document.getElementById('closeChangeResult');
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
function viewDrawFn() {
  theDayAnswerModal.style.display = "flex";
}
closetheDayAnswerModal.addEventListener('click', function () {
  theDayAnswerModal.style.display = "none";
});
window.addEventListener('openChangeResultModal', function () {
  changeResult.style.display = "flex";
});
closeChangeResult.addEventListener('click', function () {
  changeResult.style.display = "none";
});
cancelChangeResult.addEventListener('click', function () {
  changeResult.style.display = "none";
});
/******/ })()
;