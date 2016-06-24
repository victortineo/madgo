$(document).ready(function(){
setTimeout(function(){
	// Scroll effect ancor
	$('.link-animation').find('a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname ==      this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: (target.offset().top) - 64
        }, 1000);
        return false;
      }
    }
  });
	// Multiples carousel bootstrap
	$('.carousel.bootstrap').each(function(){
        $(this).carousel({
            interval: 5000
        });
    });
	// CAROUSEL PARALLAX
	$('.container--parallax').each(function(){
		var $obj = $(this);
		$('#top').css('margin-bottom', $obj.height()+'px');
	 	$(window).resize(function() {
			$('#top').css('margin-bottom', $obj.height()+'px');
	 	}); 
	});
	// ZIGZAG HEIGHT FIX
	for (var i=1;i <= 4; i++){
		var $zigHeight = $('.zig__n'+i+' .zig__content-n2');
		var $height = $zigHeight.innerHeight();
		$zigContent2 = $('.zig__n'+i+' .zig__content-n1').css('height', $height+'px');
	}
	$(window).resize(function() {
		for (var i=1;i <= 4; i++){
			var $zigHeight = $('.zig__n'+i+' .zig__content-n2');
			var $height = $zigHeight.innerHeight();
			$zigContent2 = $('.zig__n'+i+' .zig__content-n1').css('height', $height+'px');
		}
	});
	// Fecha o menu ao clicar no link
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});
	// Aparecer postit ao rolar a pagina
	$( window ).scroll(function() {
		var $objt = $( ".postit" );
		$objt.each(function(index, el) {
			$objt.css( "opacity", "1" );
		});
	});
}, 500);//SET TIME OUT
// READY 
});