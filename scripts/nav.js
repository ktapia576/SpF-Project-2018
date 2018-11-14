// Menu-toggle button
$(document).ready(function() {
  $(".menu-icon").click(function() {
    $("nav ul").toggleClass("showing");
  });
});

// Scrolling Effect
$(window).scroll(function() {
  if ($(window).scrollTop()) {
    $('nav').addClass('black');
  } else {
    $('nav').removeClass('black');
  }
})
