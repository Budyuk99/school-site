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

  document.querySelector('.lines-for-mobile-menu-flex-container').onclick = function() {
    document.querySelector('#mobile-menu').style.display = 'flex';
    document.querySelector('#mobile-menu').style.overflow = 'auto';
    document.querySelector('body').style.overflow = 'hidden';
  }

  document.querySelector('.close').onclick = function() {
    document.querySelector('#mobile-menu').style.display = 'none';
    document.querySelector('body').style.overflow = 'visible';
  }

  let prevScrollpos = window.pageYOffset;
  window.onscroll = function () {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
          document.querySelector(".header.header_height").style.top = "0";
      } else {
          document.querySelector(".header.header_height").style.top = "-70px";
      }
      prevScrollpos = currentScrollPos;
  }

