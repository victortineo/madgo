<!-- FOOTER -->
<section id="footer" class="footer" <?php if (!is_page('contato')): ?>style="padding-bottom: 80px;"<?php endif ?>>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/madgo-footer.jpg" alt="design by MadGO">
      <span>Todos os direitos reservados a MadGO.<br>
      © 2013 - 2016</span>
    </div>
    <div class="col-xs-12 col-sm-6">
      <ul class="social">
        <li class="behance">
          <a href="http://www.behance.net/madgo" target="_blank">Behance</a>
        </li>
        <li class="facebook">
          <a href="https://www.facebook.com/MadGoodOnes" target="_blank">Facebook</a>
        </li>
        <li class="google">
          <a href="https://plus.google.com/b/101364115676192305215/" target="_blank">Google</a>
        </li>
        <li class="linkedin">
          <a href="http://www.linkedin.com/company/MadGO" target="_blank">LinkedIn</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</section>
<!-- ./ FOOTER -->

<div class="postit postit-fixed1 link-animation">
<a href="#contato">
  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/quero_orcamento.png" alt="Quero um orçamento">
  </a>
</div>
<div id="cat-onepagelove" class="postit postit-fixed2">
     <a href="http://onepagelove.com/madgo" target="_blank"><img src="https://s3.amazonaws.com/onepagelove/one-page-love-award-left.png"></a>
</div>

<!-- Serviços -->
<?php get_template_part( "templates/template", "servicos" ); ?>
<!-- Serviços -->

<?php if (!is_page('contato')): ?>
<section class="newsletter-bar">
  <div class="container">
    <div class="row-fluid">
      <div class="col-xs-6">
        <p>Receba nossa proposta comercial</p>
      </div>
      <div class="col-xs-6">
        <form action="<?php bloginfo('url') ?>/contato" method="post">
          <div class="form-group">
            <input required type="email" name="email" class="form-control" placeholder="Insira aqui seu e-mail">
            <input class="form-button" type="submit" value="ENVIAR">
          </div>
        </form>
        <!-- <button class="newsletter-bar-button"><i class="glyphicon glyphicon-remove"></i></button> -->
      </div>
    </div>
  </div>
</section>
<?php endif ?>

<!-- Load scripts -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/jquery/dist/jquery.min.js">
</script>

<script>var $ = jQuery.noConflict();</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/OwlCarousel/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/assets/js/all.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/jquery-1.6.1.min.js"></script>
<script>var jQuery = jQuery.noConflict();</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/jquery.prettyPhoto.js"></script>
<?php wp_footer(); ?>

<script>
  $(document).ready(function(){
  // Efeito de rolagem suave
  $('.link-animation').find('a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
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
});// READY 
</script>
</body>
</html>