var mySwiper = new Swiper ('.swiper-container', {
    
    spaceBetween: 30,

    // Optional parameters
    direction: 'horizontal',
    
    loop: true,
    
    speed: 300,

    slidesPerView: 3,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });



      
       