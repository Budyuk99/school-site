const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    autoHeight: false,

    // autoplay: {
    //   delay: 5000,
    // },
  });

  const swiper_internal_pages = new Swiper('.swiper__internal-pages', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: '1',
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      enabled: false,
    },
  
    // Navigation arrows
    navigation: {
      enabled: false,
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    autoHeight: false,

    // autoplay: {
    //   delay: 5000,
    // },
  });

