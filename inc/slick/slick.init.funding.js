$(document).ready(function(){
  $('.funding-current .site-width').slick({
    draggable: false,
    // arrows: false,
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>',
    dots: true,
    appendDots: $(".funding-current-menu .right"),
    customPaging: function(slider, i) {
      var mynum = i+1;
      mynum = (mynum < 10) ? "0"+mynum : mynum;
      return $('<button type="button" data-role="none" role="button" tabindex="0" />').text(mynum);
    },
    fade: true,
    cssEase: 'linear',
    adaptiveHeight: true
  });
});