$(document).ready(function(){
setTimeout(function() {

  // Efeito de rolagem suave
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




}, 500);//SET TIME OUT
});// READY 