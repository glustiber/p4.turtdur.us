$(document).ready(function () {
  $('#nav-list > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav-list li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav-list li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});