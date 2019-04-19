$(document).ready(function(){
  //main slider
  var swiperMainSlider = new Swiper('#js-main-slider', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
    });
  
  //banner slider
  var swiperMainSlider = new Swiper('#js-banner-slider', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
  });
  
  //main page serveses slider
  var swiperServ = new Swiper('#js-serv-slider', {
      slidesPerView: 3,
      slidesPerColumn: 2,
      slidesPerGroup: 3,
      spaceBetween: 15,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1024: {
          slidesPerView: 2,
          slidesPerColumn: 2,
          slidesPerGroup: 2,
          spaceBetween: 0,
        },
        767: {
          slidesPerView: 2,
          slidesPerColumn: 1,
        },
        640: {
          slidesPerView: 1,
          slidesPerColumn: 1,
          slidesPerGroup: 1,
        }
      }
    });
  
  //main documents slider
  var swiperServ = new Swiper('#js-documents-slider', {
      slidesPerView: 3,
      centeredSlides: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        767: {
          slidesPerView: 1,
          spaceBetween: 30,
        }
      }
    });
  
  //formstyller
  $('select').styler();
  
  //input masks
  $("input[type='tel']").mask("+7 (999) 999-99-99", {
    placeholder: "+7 (___) ___-__-__" 
  });
  $(".js-card-number").mask("9999 9999 9999 9999", {
    placeholder: "____ ____ ____ ____" 
  });
  $(".js-card-expiry-date").mask("99/99", {
    placeholder: "__/__" 
  });
  $(".js-card-cvc-cvv").mask("999", {
    placeholder: "___" 
  });
  
  //scrol bar
  if($(window).width() >= 768){
    $('.js-scroll-bar').jScrollPane({
      showArrows: false
    });
  }

  
 
});
