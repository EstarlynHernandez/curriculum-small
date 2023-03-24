/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
// loader checker
function loaded() {
  if (document.readyState == "complete") {
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
  // get config
  if (!localStorage.getItem("estarlyn.com")) {
    localStorage.setItem("estarlyn.com", JSON.stringify({
      theme: 1,
      fontSize: 2
    }));
  }
  localConfig();
  var config = document.querySelector(".options");
  var shadow = document.querySelector(".shadow");
  var textSize = document.querySelectorAll(".config--size button");
  var works = document.querySelectorAll(".work");
  var back = document.querySelector(".back_end");
  var front = document.querySelector(".front_end");
  var lang = document.querySelector(".language--lang");
  var contact = document.querySelector(".info__link--open");
  shadow.addEventListener("click", function () {
    menuFull();
  });
  contact.addEventListener("click", function () {
    menuFull("contact--shadow");
  });
  front.addEventListener("click", function () {
    menuFull("front");
  });
  back.addEventListener("click", function () {
    menuFull("back");
  });
  lang.addEventListener("click", function () {
    menuFull("lang");
  });
  works.forEach(function (working) {
    working.addEventListener("click", function () {
      menuFull("working");
    });
  });
  config.addEventListener("click", function () {
    menuFull("config");
  });
  textSize.forEach(function (item) {
    item.addEventListener("click", size);
  });
}

// full screen function
function menuFull(name) {
  var shadow = document.querySelector(".shadow");
  var body = document.querySelector("body");
  var container = document.querySelector(".shadow--menu");
  var shadowChildren = document.querySelectorAll(".shadow--menu > div");
  container.setAttribute("style", "transform: scale(0.001)");
  body.classList.remove("hidden");
  if (name) {
    var item = document.querySelector("." + name);
    body.classList.add("hidden");
    container.classList.remove("dnone");
    item.classList.remove("dnone");
    shadow.classList.remove("dnone");
    setTimeout(function () {
      container.setAttribute("style", "transform: scale(1)");
    }, 50);
    return;
  }
  setTimeout(function () {
    container.classList.add("dnone");
  }, 250);
  shadow.classList.add("dnone");
  shadowChildren.forEach(function (element) {
    element.classList.add("dnone");
  });
}

// text size

function size(item) {
  var childs = item.srcElement.parentNode.querySelectorAll("button");
  var ht = document.querySelector(":root");
  if (item.srcElement.id == "text__small") {
    ht.setAttribute("style", "font-size: 60%");
    SetConfig("fontSize", 1);
  }
  if (item.srcElement.id == "text__medium") {
    ht.setAttribute("style", "font-size: 90%");
    SetConfig("fontSize", 2);
  }
  if (item.srcElement.id == "text__big") {
    ht.setAttribute("style", "font-size: 130%");
    SetConfig("fontSize", 3);
  }
  childs.forEach(function (child) {
    child.classList.remove("button--active");
  });
  item.srcElement.classList.add("button--active");
}

// add the loacal config
function localConfig() {
  var root = document.querySelector(":root");
  var userConfig = localStorage.getItem("estarlyn.com");
  userConfig = JSON.parse(userConfig);
  switch (userConfig["fontSize"]) {
    case 1:
      document.querySelector(".config--size button:nth-child(1)").classList.add("button--active");
      root.setAttribute("style", "font-size: 60%");
      break;
    case 2:
      document.querySelector(".config--size button:nth-child(2)").classList.add("button--active");
      root.setAttribute("style", "font-size: 90%");
      break;
    case 3:
      document.querySelector(".config--size button:nth-child(3)").classList.add("button--active");
      root.setAttribute("style", "font-size: 130%");
      break;
  }
}

// set the local config
function SetConfig(item, value) {
  var userConfig = JSON.parse(localStorage.getItem("estarlyn.com"));
  userConfig[item] = value;
  localStorage.setItem("estarlyn.com", JSON.stringify(userConfig));
}
/******/ })()
;