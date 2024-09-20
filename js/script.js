let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop:true,
  spaceBetween:20,
  speed: 4000,
    autoplay:{
    delay: 2000,
  },
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  
});

var swiper = new Swiper(".service-slider", {
  loop:true,
  speed: 7000,
    autoplay:{
    delay: 2000,
  },
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".card_slider", {
   
      spaceBetween: 50,
      loop: true,
      speed: 3000,
      autoplay:{
         delay: 2000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
        780: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });

    var swiper = new Swiper(".card_slider", {
   
      spaceBetween: 50,
      loop: true,
      speed: 3000,
      autoplay:{
         delay: 2000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
        780: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });

