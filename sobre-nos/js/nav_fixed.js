window.onscroll = function() {
  whatsappFlutuante()
  if (window.innerWidth > 920) {
  scrollUpDown()
  }else {
    return;
  }
  
};




  
var prevScrollpos = window.pageYOffset;
function scrollUpDown() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".nav-content-fixed").style.top = "0";
  } 
  
  else  {
    document.querySelector(".nav-content-fixed").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;
}




function whatsappFlutuante() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementById("whatsapp-flutuante").style.width = "50px";
    document.getElementById("whatsapp-flutuante").style.height = "50px";
  }else {
      document.getElementById("whatsapp-flutuante").style.width = "0px";
      document.getElementById("whatsapp-flutuante").style.height = "0px";
  }
}; 


window.addEventListener("resize", function() {
  this.headerInteration(nav, 'nav-content-fixed', 'nav-content');
});


var nav = document.querySelector('nav');

  function headerInteration(elemento, antiga, nova) {
    
    if (window.innerWidth < 920) {
      elemento.classList.remove(antiga);
      elemento.classList.add(nova);
      document.querySelector(".nav-element").style.fontSize = "22px";
       
    }else {
      elemento.classList.remove(nova);
      elemento.classList.add(antiga);
    } 

  } 

  headerInteration(nav, 'nav-content-fixed', 'nav-content')
 