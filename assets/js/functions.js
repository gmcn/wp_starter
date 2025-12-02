( function($) {

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);



var mySwiper = new Swiper('.swiper-container', {
   // Optional parameters
   direction: 'vertical',
   loop: true,

   // If we need pagination
   pagination: {
     el: '.swiper-pagination',
   },

   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
     el: '.swiper-scrollbar',
   },
 })


 window.cookieconsent.initialise({
   "palette": {
     "popup": {
       "background": "#31404E",
       "text": "#AAAEB2"
     },
     "button": {
       "background": "#14191F"
     }
   },
   "theme": "edgeless",
   "position": "bottom",
   "static": true,
   "content": {
     "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
     "dismiss": "Close This",
     "link": "Find out more",
     "href": "data-policy"
   }
 });
