$(document).ready(function(){
  /***header***/
  
  //show fix header
  if($(window).width() >= 768){
    $(window).on('scroll', function(){
      var headerHeight = $('#js-header').height();
        if($(window).scrollTop() > headerHeight){
          $('#js-fix-header').addClass('show');
        } else{
          $('#js-fix-header').removeClass('show');
        }
    })
  } else{
    //mob menu button
    $('.js-mob-menu-btn').on('click', function(){
      $('#js-mob-menu').toggleClass('open');
    });    
  }
  //open search
  $('.js-search-btn').on('click', function(){
    $('#js-search').toggleClass('open');
  });
  
  /*** diagramm ***/
  if($(window).width() >= 1100){
    var diagrammVrap = $('#js-diagramm');
//    $( ".js-d-camera" ).hover(
//      function() {diagrammVrap.addClass('camera')}, 
//      function() {diagrammVrap.removeClass('camera')}
//    );
//    $( ".js-d-other" ).hover(
//      function() {diagrammVrap.addClass('other')}, 
//      function() {diagrammVrap.removeClass('other')}
//    );
//    $( ".js-d-laptop" ).hover(
//      function() {diagrammVrap.addClass('laptop')}, 
//      function() {diagrammVrap.removeClass('laptop')}
//    );
//    $( ".js-d-tv" ).hover(
//      function() {diagrammVrap.addClass('tv')}, 
//      function() {diagrammVrap.removeClass('tv')}
//    );
//    $( ".js-d-phone" ).hover(
//      function() {diagrammVrap.addClass('phone')}, 
//      function() {diagrammVrap.removeClass('phone')}
//    );
    $( ".js-d-camera" ).hover( function() {
        diagrammVrap.removeClass('camera other laptop tv phone');
        diagrammVrap.addClass('camera');
    });
    $( ".js-d-other" ).hover( function() {
        diagrammVrap.removeClass('camera other laptop tv phone');
        diagrammVrap.addClass('other');
    });
    $( ".js-d-laptop" ).hover( function() {
        diagrammVrap.removeClass('camera other laptop tv phone');
        diagrammVrap.addClass('laptop');
    });
    $( ".js-d-tv" ).hover( function() {
        diagrammVrap.removeClass('camera other laptop tv phone');
        diagrammVrap.addClass('tv');
    });
    $( ".js-d-phone" ).hover( function() {
        diagrammVrap.removeClass('camera other laptop tv phone');
        diagrammVrap.addClass('phone');
    });
  }
  
  /*** examples filter ***/
  if($(window).width() < 768){
    $('.js-filter-btn').on('click', function(){
      $('#js-filter').toggleClass('open');
    })
  }
  
  /*** Запрет ввода не чисел ***/    
  function Ftest (obj){
      if (this.ST) return; var ov = obj.value;
      var ovrl = ov.replace (/\d*\.?\d*/, '').length; 
      this.ST = true;
      if (ovrl > 0) {
          obj.value = obj.lang; 
          Fshowerror (obj); 
          return
      }
      obj.lang = obj.value; 
      this.ST = null;
  }
  function Fshowerror (obj){
      if (!this.OBJ){
          this.OBJ = obj; 
          obj.style.backgroundColor = 'pink'; 
          this.TIM = setTimeout (Fshowerror, 50);
      } else {
          this.OBJ.style.backgroundColor = ''; 
          clearTimeout (this.TIM); 
          this.ST = null; 
          Ftest (this.OBJ); 
          this.OBJ = null;
      }
  }
  $('.js-numb-only').on('input', function(){
      Ftest (this);
  });
  
  /*** order popup ***/
  $('.js-order-btn').on('click', function(){
    $('#js-order').fadeToggle(250);
  });
  
  //video-popup
  if($('#js-video-vrapper').length){
    var iframe = $('#js-video-container iframe');
    $('.js-blind').on('click', function(){
      var winHeight = $(window).height() / 2,
          blinPos = $(this).offset().top + ($(this).height() / 2),
          scrollPos = blinPos - winHeight;
      $('#js-video-vrapper').fadeIn(250).addClass('show');
      $('html, body').animate({ scrollTop: scrollPos}, 250);
      //$('html').add('body').addClass('no-scroll');          
          
      var srcAttr = $(this).attr('data-href');
      iframe.attr("src", srcAttr + "?autohide=1&amp;autoplay=1");
    });
      
    $('.js-video-close').on('click', function(){
      $('#js-video-vrapper').fadeOut(250).removeClass('show');
      //$('html').add('body').removeClass('no-scroll');
      iframe.removeAttr("src");
    });
  }
 
});

