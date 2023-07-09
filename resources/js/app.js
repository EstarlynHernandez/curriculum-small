// loader checker
function loaded() {
    if (document.readyState == "complete") {
        main();
    } else {
        setTimeout(() => {
            loaded();
        }, 100);
    }
}

loaded();

// main fuction
function main() {
    // get local config and set
    if (!localStorage.getItem("options")) {
        localStorage.setItem("options", JSON.stringify({ theme: 1, fontSize: 2, }));
    }
    localConfig();

    let config = document.querySelector(".options");
    let shadow = document.querySelector(".shadow");
    let textSize = document.querySelectorAll("#text__size button");
    let works = document.querySelectorAll(".work");
    let back = document.querySelector("#back_end");
    let front = document.querySelector("#front_end");
    let lang = document.querySelector("#language");
    let contact = document.querySelector("#contact");

    shadow.addEventListener("click", () => {
        menuFull();
    });

    contact.addEventListener("click", () => {
        menuFull("contact__popup");
    });

    front.addEventListener("click", () => {
        menuFull("front");
    });

    back.addEventListener("click", () => {
        menuFull("back");
    });

    lang.addEventListener("click", () => {
        menuFull("lang");
    });

    works.forEach((working) => {
        working.addEventListener("click", () => {
            menuFull("working");
        });
    });

    config.addEventListener("click", () => {
        menuFull("config");
    });

    textSize.forEach((item) => {
        item.addEventListener("click", size);
    });
}

// full screen function
function menuFull(name) {
    let shadow = document.querySelector(".shadow");
    let body = document.querySelector("body");
    let shadowChildren = document.querySelectorAll(".popup");
    let popupChildren = document.querySelectorAll(".popup > div");
    let container = document.querySelector(name == 'config' ? '.popup.conf' : '.popup.all');
    shadowChildren.forEach((element) => {
        element.setAttribute("style", "transform: scale(0.001)");
    });
    
    body.classList.remove("hidden");
    
    if (name) {
        let item = document.querySelector("." + name);

        body.classList.add("hidden");
        container.classList.remove("dnone");
        item.classList.remove("dnone");
        shadow.classList.remove("dnone");

        setTimeout(() => {
            container.setAttribute("style", "transform: scale(1)");
        }, 50);

    } else {

        setTimeout(() => {
            // container.classList.add("dnone");
            shadowChildren.forEach((element) => {
                element.classList.add("dnone");
            });
            popupChildren.forEach((element) => {
                element.classList.add("dnone");
            });
        }, 250);

        shadow.classList.add("dnone");

    }
}

// text size

function size(item) {
    let childs = item.srcElement.parentNode.querySelectorAll("button");
    let root = document.querySelector(":root");

    if (item.srcElement.id == "text__small") {
        root.setAttribute("style", "font-size: 60%");
        SetConfig("fontSize", 1);
    }

    if (item.srcElement.id == "text__medium") {
        root.setAttribute("style", "font-size: 90%");
        SetConfig("fontSize", 2);
    }

    if (item.srcElement.id == "text__big") {
        root.setAttribute("style", "font-size: 130%");
        SetConfig("fontSize", 3);
    }

    childs.forEach((child) => {
        child.classList.remove("active");
    });
    item.srcElement.classList.add("active");
}

// add the loacal config
function localConfig() {
    let root = document.querySelector(":root");
    let userConfig = JSON.parse(localStorage.getItem("estarlyn.com"));

    switch (userConfig["fontSize"]) {
        case 1:
            document.querySelector("#text__small").classList.add("active");
            root.setAttribute("style", "font-size: 60%");
            break;
        case 3:
            document.querySelector("#text__big").classList.add("active");
            root.setAttribute("style", "font-size: 130%");
            break;

        default:
            document.querySelector("#text__medium").classList.add("active");
            root.setAttribute("style", "font-size: 90%");
            break;
    }
}

// set the local config
function SetConfig(item, value) {
    let userConfig = JSON.parse(localStorage.getItem("estarlyn.com"));
    userConfig[item] = value;
    localStorage.setItem("estarlyn.com", JSON.stringify(userConfig));
}
