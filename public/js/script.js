/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
// loader checker
function loaded() {
  if (document.readyState == 'complete') {
    main();
  } else {
    setTimeout(function () {
      loaded();
    }, 100);
  }
}
loaded();

// main fuction
function main() {
  var config = document.querySelector('.options');
  var shadow = document.querySelector('.shadow');
  var textSize = document.querySelectorAll('.config--size button');
  shadow.addEventListener('click', function () {
    menuFull();
  });
  config.addEventListener('click', function () {
    menuFull('config');
  });
  textSize.forEach(function (item) {
    item.addEventListener('click', size);
  });
}

// full screen function
function menuFull(name) {
  var shadow = document.querySelector('.shadow');
  var body = document.querySelector('body');
  var container = document.querySelector('.shadow--menu');
  var shadowChildren = document.querySelectorAll('.shadow--menu > div');
  container.setAttribute('style', 'transform: scale(0.001)');
  body.classList.remove('hidden');
  if (name) {
    var item = document.querySelector('.' + name);
    body.classList.add('hidden');
    container.classList.remove('dnone');
    item.classList.remove('dnone');
    shadow.classList.remove('dnone');
    setTimeout(function () {
      container.setAttribute('style', 'transform: scale(1)');
    }, 50);
    return;
  }
  setTimeout(function () {
    container.classList.add('dnone');
  }, 500);
  shadow.classList.add('dnone');
  shadowChildren.forEach(function (element) {
    element.classList.add('dnone');
  });
}

// text size

function size(item) {
  var childs = item.srcElement.parentNode.querySelectorAll('button');
  var ht = document.querySelector(':root');
  if (item.srcElement.id == 'text__small') {
    ht.setAttribute('style', 'font-size: 60%');
  }
  if (item.srcElement.id == 'text__medium') {
    ht.setAttribute('style', 'font-size: 90%');
  }
  if (item.srcElement.id == 'text__big') {
    ht.setAttribute('style', 'font-size: 130%');
  }
  childs.forEach(function (child) {
    child.classList.remove('button--active');
  });
  item.srcElement.classList.add('button--active');
}
/******/ })()
;