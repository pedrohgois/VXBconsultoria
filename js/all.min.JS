window.onscroll = function() {
    whatsappFlutuante()
    if (window.innerWidth > 920) {
        headerInteration(nav, 'nav-content', 'nav-content-scroll')
    } else {
        return;
    }

};

var nav = document.querySelector('nav');

function headerInteration(elemento, antiga, nova) {

    if ((document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) && (window.innerWidth > 920)) {
        elemento.classList.remove(antiga);
        elemento.classList.add(nova);
        document.querySelector(".nav-elements-content").style.fontSize = "22px";
        scrollUpDown();

    } else {
        elemento.classList.remove(nova);
        elemento.classList.add(antiga);
    }
    if ((document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) && (window.innerWidth > 920)) {
        document.querySelector(".sobre-nos").style.marginTop = "68px";
    } else {
        document.querySelector(".sobre-nos").style.marginTop = "0px";
    }
}




function whatsappFlutuante() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("whatsapp-flutuante").style.width = "50px";
        document.getElementById("whatsapp-flutuante").style.height = "50px";
    } else {
        document.getElementById("whatsapp-flutuante").style.width = "0px";
        document.getElementById("whatsapp-flutuante").style.height = "0px";
    }
};

var prevScrollpos = window.pageYOffset;

function scrollUpDown() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos && (document.body.scrollTop > 390 || document.documentElement.scrollTop > 390)) {
        document.querySelector(".nav-content-scroll").style.top = "0";
    } else {
        document.querySelector(".nav-content-scroll").style.top = "-150px";
    }
    prevScrollpos = currentScrollPos;
}


window.addEventListener("resize", function() {
  this.headerInteration(nav, 'nav-content', 'nav-content-scroll');
});


