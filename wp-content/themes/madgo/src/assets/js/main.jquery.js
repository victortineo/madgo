$( document ).ready(function() {

  var $Contato = $('.formContato');
  var $message = $('#form-text-send');

  $Contato.on('submit', function(event) {
    event.preventDefault();
    var $waiting =  $(this).find('.waiting');
    var $success =  $(this).find('.success'); 
    var $error =  $(this).find('.error');
    var $this = $(this);

    $waiting.css('display', 'block');
    $(this).ajaxSubmit({
      success: function(response) {
        $Contato[0].reset();
        $waiting.css('display', 'none');
        $success.css('display', 'block');

        if ($this.hasClass('formNewsletter')) {
          $this.css('display', 'none');
          $message.removeClass('sr-only');
          sessionStorage.setItem('newsletterBar', 'true');
        }

      },
      error: function(response) {
        console.log(response);
        $waiting.css('display', 'none');
        $error.css('display', 'block');
      }
    });
    setTimeout(function(){
      $success.css('display', 'none');
      $error.css('display', 'none');
      if ($this.hasClass('formNewsletter')) {
        $newsletterBar.css('display', 'none');
        $('.footer').css('padding-bottom','35px');
      }
    }, 10000);
  });
  


  var documentHeight = $(document).outerHeight() - 100,
  $window = $(window),
  $newsletterBar = $('.newsletter-bar'),
  $newsletterButton = $('.newsletter-bar-button'),
  $closeBar = false;;
  var $windowHeight = $window.height();
  $newsletterButton.on('click', function(event) {
    event.preventDefault();
    $closeBar = true;
    $newsletterBar.removeClass('active');
  });
  $window.on('scroll', function(event) {
    var $scrollTop = ($(this).scrollTop() + $windowHeight);
    if ($scrollTop >= documentHeight && $closeBar == false || $scrollTop >= 1200  && $closeBar == false ) {
      $newsletterBar.addClass('active');
    }
  });

  $('#comercial').modal('show');
  
  if (sessionStorage.newsletterBar == 'true') {
      $newsletterBar.css('display', 'none');
      $('.footer').css('padding-bottom','35px');
  }
});
 