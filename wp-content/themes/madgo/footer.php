<!-- FOOTER -->
<section id="footer" class="footer">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-10">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/madgo-footer.jpg" alt="design by MadGO">
      <span>Todos os direitos reservados a MadGO.<br>
      © 2013 - 2016</span>
    </div>
    <div class="col-xs-12 col-sm-2">
      <span class="dashicons dashicons-smiley"></span>
    </div>
  </div>
</div>
</section>
<!-- ./ FOOTER -->

<!-- Load scripts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://www.owlcarousel.owlgraphic.com/assets/owlcarousel/owl.carousel.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/OwlCarousel/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/assets/js/all.js"></script>
<!-- <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script> -->
<!-- <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; /**
 * Translated default messages for the $ validation plugin.
 * Locale: PT_PT
 */
$.extend($.validator.messages, {
  required: "Campo de preenchimento obrigat&oacute;rio.",
  remote: "Por favor, corrija este campo.",
  email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
  url: "Por favor, introduza um URL v&aacute;lido.",
  date: "Por favor, introduza uma data v&aacute;lida.",
  dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
  number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
  digits: "Por favor, introduza apenas d&iacute;gitos.",
  creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
  equalTo: "Por favor, introduza de novo o mesmo valor.",
  accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
  maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
  minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
  rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
  range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
  max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
  min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script> -->
<!-- <script type='text/javascript' src='http://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script> -->

<?php wp_footer(); ?>
</body>
</html>