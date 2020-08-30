'use strict';

// Loader 
const placeholder = () => {
  console.log('loader');
  setTimeout(function(){
    setTimeout(function(){
      let spinner = document.querySelector('#placeholder');
      spinner.style.display = 'none';
    }, 1000); 
    let fadeTarget = document.getElementById('placeholder');
    let fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
          fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
          fadeTarget.style.opacity -= 0.1;
        } else {
          clearInterval(fadeEffect);
        }
      }, 50);
    }, 1000);
  };

$(function() {
  // Loader 
  placeholder();

  // Menú
  $('#botton-menu').on('click', function(){
    document.querySelector('.navbar').classList.toggle('nav-open');
    document.querySelector('#header-item-group').classList.toggle('active');
  })
  
  // Main Slider
  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    dots: true,
    nextArrow: '<img class="slider-arrow arrow--right" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
    prevArrow: '<img class="slider-arrow arrow--left" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
  });

  // Slider Vestido a Medida
  $('.slider-vestido-a-medida-1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    nextArrow: '<img class="slider-arrow arrow--right" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
    prevArrow: '<img class="slider-arrow arrow--left" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
  });
  $('.slider-vestido-a-medida-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    nextArrow: '<img class="slider-arrow arrow--right" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
    prevArrow: '<img class="slider-arrow arrow--left" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
  });
  $('.slider-vestido-a-medida-3').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    nextArrow: '<img class="slider-arrow arrow--right" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
    prevArrow: '<img class="slider-arrow arrow--left" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
  });
  
  // $('.slider-vestido-a-medida-1').css('display', 'block');

  $('.slider-vestidos').css('opacity', '0');
  $('.slider-vestido-a-medida-1').css('opacity', '1');

  $('.activar-slider-1').on('click' , function(){
    console.log('activar-slider-1');
    $('.slider-vestidos').css('opacity', '0');
    $('.slider-vestidos').css('z-index', '1');
    $('.slider-vestido-a-medida-1').css('z-index', '1020');
    $('.slider-vestido-a-medida-1').css('opacity', '1');
  });

  $('.activar-slider-2').on('click' , function(){
    console.log('activar-slider-2');
    $('.slider-vestidos').css('opacity', '0');
    $('.slider-vestidos').css('z-index', '1');
    $('.slider-vestido-a-medida-2').css('z-index', '1020');
    $('.slider-vestido-a-medida-2').css('opacity', '1');
  });

  $('.activar-slider-3').on('click' , function(){
    console.log('activar-slider-3');
    $('.slider-vestidos').css('opacity', '0');
    $('.slider-vestidos').css('z-index', '1');
    $('.slider-vestido-a-medida-3').css('z-index', '1020');
    $('.slider-vestido-a-medida-3').css('opacity', '1');
  });

  $('.goTo-1').on('click', function(){
    $('.slider-vestido-a-medida-1').slick('slickGoTo', 0);
  })
  $('.goTo-2').on('click', function(){
    $('.slider-vestido-a-medida-1').slick('slickGoTo', 1);
  })
  $('.goTo-3').on('click', function(){
    $('.slider-vestido-a-medida-1').slick('slickGoTo', 2);
  })

  // Gallery 
  $('.gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Cargando #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">La imagene #%curr%</a> no se puede cargar.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      }
    }
  });

});