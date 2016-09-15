$(document).ready(function(){
  $('.funding-current .site-width').slick({
    draggable: false,
    arrows: false,
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