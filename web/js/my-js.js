window.onscroll = function() {
  var scrolled = window.pageYOffset || document.documentElement.scrollTop; // Получаем положение скролла
  if(scrolled !== 0){
    // Если прокрутка есть, то делаем блок прозрачным
    document.querySelector('.navbar').style.opacity = '0.7';
  }else{
    // Если нет, то делаем его полностью видимым
    document.querySelector('.navbar').style.opacity = '1';
  };
};

$("#w16 > li:nth-child(1) > a:nth-child(1)").click(function () {
  $('html, body').animate({
    scrollTop: $(".my-internet").offset().top
  }, 1000);
})
$("#w16 > li:nth-child(2) > a:nth-child(1)").click(function () {
  $('html, body').animate({
    scrollTop: $(".my-tv").offset().top
  }, 1000);
})
$("#w16 > li:nth-child(3) > a:nth-child(1)").click(function () {
  $('html, body').animate({
    scrollTop: $(".my-packet").offset().top
  }, 1000);
})