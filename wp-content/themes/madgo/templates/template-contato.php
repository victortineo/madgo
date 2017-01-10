<section id="contato" class="mod-contato <?php if (!is_home()): ?>
  page
<?php endif ?>">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if (is_home()): ?>
        <div class="page-header">
          <h1>Quero um orçamento!</h1>
        </div>
        <?php elseif (is_single('servicos') || is_singular('portfolio')): ?>
        <div class="page-header">
          <?php $subtipo = get_field('subtipo'); ?>
          <h1>Faça um orçamento: <?=$subtipo?></h1>
          <h2>Entre em contato conosco, teremos o maior prazer em atende-lo da melhor maneira possivel e ajudá-lo a encontrar a solução ideal para sua necessidade.</h2>
        </div>
        <?php endif ?>
      </div>
      <div class="col-xs-12 col-sm-8">
        <div class="form">
          <p>Conte-nos o que você precisa, apresentaremos uma solução e um orçamento!</p>
          <form class="formContato" method="post" action="<?php echo get_template_directory_uri(); ?>/functions/sendEmail.php">
            <?php if (is_single('servicos') || is_singular('portfolio')): ?>
            <input type="hidden" value="<?=$subtipo?>" name="Categoria">
            <?php endif ?>
            <input type="hidden" value="MadGo - Quero um orçamento" name="Assunto">
            <label for="nome">Seu nome</label>
            <div class="input-group">
              <input type="text" name="Nome" id="nome" required>
            </div>
            <label for="email">Seu e-mail</label>
            <div class="input-group">
              <input type="email" name="E-mail" id="email" required>
            </div>
            <label for="tel">Telefone</label>
            <div class="input-group">
              <input type="tel" name="Telefone" id="tel" required>
            </div>
            <label for="mensagem">Conte o que você precisa</label>
            <div class="input-group">
              <textarea name="Mensagem" id="mensagem" required></textarea>
            </div>
            <div class="col-xs-12 col-md-8">
              <div class="input-group-checkbox">
                <input type="checkbox" name="PDF" id="pdf" value="Desejo receber a apresentação da MadGO.">
                <label for="pdf">Desejo receber a apresentação da MadGO em PDF </label>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
            <div class="g-recaptcha" data-sitekey="6LcFPxEUAAAAAFHtG5sYtiS0UW4tOPBacNzGTrru" data-callback="YourOnSubmitFn"></div>
              <input type="submit" value="Orçamento" class="btn btn-custom1">
            </div>
             <div class="response">
              <p style="display:none;" class="success">Mensagem enviada com sucesso!</p>
              <p style="display:none;" class="error">Erro ao enviar mensagem.</p>
              <p style="display:none;" class="waiting">Estamos enviando, aguarde!</p>
            </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="absolute">
          <p>O café é por nossa conta :)</p>
          <ul>
            <li><i class="glyphicon glyphicon-envelope"></i> <span>contato@madgo.com.br</span></li>
            <li><i class="glyphicon glyphicon-phone"></i> <span>+55 11 3436.8132</span></li>
            <li><i class="glyphicon glyphicon-map-marker"></i> <span>Av. General Ataliba Leonel, 1223<br>Santana – Cep 02033-000<br>São Paulo, SP</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>