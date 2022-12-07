/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/sidebar.js ***!
  \*********************************/
var sideBarLink = document.getElementsByClassName('sideBarLink');
var gameManagementBtn = document.getElementById('gameManagementBtn');
var gameManagementUl = document.getElementById('gameManagementUl');
var gameManagementOpen = false;
if (window.location.pathname.includes('gameManagement') || window.location.pathname.includes('gameStatus') || window.location.pathname.includes('userStatus')) {
  sideBarLink[4].classList.add('selected');
  gameManagementUl.classList.add('focus');
  if (window.location.pathname.includes('gameStatus')) {
    gameManagementUl.getElementsByClassName('li-btn')[0].classList.add('focus');
  }
  if (window.location.pathname.includes('userStatus')) {
    gameManagementUl.getElementsByClassName('li-btn')[1].classList.add('focus');
  }
  if (window.location.pathname.includes('gameManagement')) {
    gameManagementUl.getElementsByClassName('li-btn')[2].classList.add('focus');
  }
}
gameManagementBtn.addEventListener('click', function () {
  gameManagementOpen = !gameManagementOpen;
  if (gameManagementOpen) {
    gameManagementBtn.classList.add('selected');
    gameManagementUl.classList.add('focus');
  } else {
    gameManagementBtn.classList.remove('selected');
    gameManagementUl.classList.remove('focus');
  }
});
/******/ })()
;