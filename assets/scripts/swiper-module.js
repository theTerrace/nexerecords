var mySwiper = new Swiper ('.swiper-container', {
   
    effect: 'slide',      
    
    centeredSlides: true,
    
    slidesPerView: 1,

    speed: 1500,      

    autoplay: {
        
        delay: 3000,
        
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',      
      clickable: true
    }  
  
  });



      
       