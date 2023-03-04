
// loader checker
function loaded() {
    if (document.readyState == 'complete') {
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
    let config = document.querySelector('.options');
    let shadow = document.querySelector('.shadow');
    let textSize = document.querySelectorAll('.config--size button');
    let works = document.querySelectorAll('.work');
    let back = document.querySelector('.back_end');
    let front = document.querySelector('.front_end');
    let lang = document.querySelector('.language--lang');
    let contact = document.querySelector('.info__link--open');

    shadow.addEventListener('click', () => {
        menuFull();
    })
    
    contact.addEventListener('click', () => {
        menuFull('contact--shadow');
    })

    front.addEventListener('click', () => {
        menuFull('front');
    })

    back.addEventListener('click', () => {
        menuFull('back');
    })

    lang.addEventListener('click', () => {
        menuFull('lang');
    })

    works.forEach(working => {
        working.addEventListener('click', () => {
            menuFull('working');
        });
    });

    config.addEventListener('click', () => {
        menuFull('config')
    });

    textSize.forEach(item => {
        item.addEventListener('click', size);
    });

}


// full screen function
function menuFull(name) {
    let shadow = document.querySelector('.shadow');
    let body = document.querySelector('body');
    let container = document.querySelector('.shadow--menu');
    let shadowChildren = document.querySelectorAll('.shadow--menu > div');


    container.setAttribute('style', 'transform: scale(0.001)')



    body.classList.remove('hidden');

    if (name) {
        let item = document.querySelector('.' + name);

        body.classList.add('hidden');
        container.classList.remove('dnone');
        item.classList.remove('dnone');
        shadow.classList.remove('dnone');

        setTimeout(() => {
            container.setAttribute('style', 'transform: scale(1)')
        }, 50);

        return;
    }

    setTimeout(() => {
        container.classList.add('dnone');
    }, 250);

    shadow.classList.add('dnone');
    shadowChildren.forEach(element => {
        element.classList.add('dnone');
    });
}

// text size

function size(item) {
    let childs = item.srcElement.parentNode.querySelectorAll('button');
    let ht = document.querySelector(':root');

    if(item.srcElement.id == 'text__small'){
        ht.setAttribute('style', 'font-size: 60%');
    }

    if(item.srcElement.id == 'text__medium'){
        ht.setAttribute('style', 'font-size: 90%');
    }

    if(item.srcElement.id == 'text__big'){
        ht.setAttribute('style', 'font-size: 130%');
    }


    childs.forEach(child => {
        child.classList.remove('button--active');
    });
    item.srcElement.classList.add('button--active');
}