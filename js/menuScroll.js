$(function(){
	//Scroll top:
	var link = $(".desktop li a");
	var link2 = $(".mobile li a");
	var subir = $(".btn2");

	$(window).scroll(function () {
		var minhaposicao = $(this).scrollTop();
		if (minhaposicao >= 500) {
			subir.fadeIn();
		}else{
			subir.fadeOut(500);
		} 
	})

	link.on("click", function(){
		var seletor = $(this).attr("href");
		var posicao = $(seletor).offset().top;
		$("html, body").animate({scrollTop: posicao-100},1000);
	});

	link2.on("click", function(){
		var seletor = $(this).attr("href");
		var posicao = $(seletor).offset().top;
		$("html, body").animate({scrollTop: posicao-100},1000);
	});

	subir.on("click", function () {
		$("html, body").animate({ scrollTop: 0}, 300);
	});

});