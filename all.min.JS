window.onscroll = function(oEvent) {scrollFunction()};

				function scrollFunction() {

				if (document.documentElement.scrollTop > 80  ) {
					document.getElementById("whatsapp-flutuante").style.display = "inline-block";
         
					
				}
		

				else {
          document.getElementById("whatsapp-flutuante").style.display = "none";
			}
			
			}
      scrollFunction()


