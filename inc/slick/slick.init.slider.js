$(document).ready(function(){
  $('.image-slider').slick({
    prevArrow: '<a href="#" class="prev"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>',
    nextArrow: '<a href="#" class="next"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});