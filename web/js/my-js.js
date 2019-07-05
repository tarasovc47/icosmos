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


/*$(".navbar-toggle").click(function(){
	$(".navbar-header").css("opacity", function(i,val)){
		if($(".navbar-toggle").hasClass("collapsed") == true) {
			alert "alert";
		}
		else alert "norm";
	}
}*/