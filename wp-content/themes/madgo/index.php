<?php get_header(); ?>

<!-- CABEÇALHO -->
<section id="mod_header">
  <div class="absolute">
    <figure class="col-xs-12">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/madgo-big.png" alt="">
    </figure>
    <article>
      <p><strong>Bem vindo ao habitat online da MadGO</strong></p><br>
      <p><strong>Uma agência focada em Design, Webdesign & Marketing Digital</strong></p>
    </article>
    <div class="link-animation">
       <a href="#essencia" class="btn btn-custom1">CONHEÇA</a>
    </div>
  </div>
</section>
<!-- ./ CABEÇALHO -->

<!-- ESSENCIA -->
<section id="essencia" class="mod_essencia">
  <div class="container">
    <div class="row">
      <article class="col-xs-12 col-sm-7">
        <div class="page-header">
          <h1>Essência</h1>
          <h2>A MadGO nasceu da vontade dos sócios de aplicarem o conceito Mad Good Ones de vida ao ambiente de trabalho. Entenda o conceito:</h2>
        </div>
        <p><em>“Buscar a horizontalidade em <strong>curtir o caminho da vida</strong>, interligando o <strong>prazer do trabalho</strong>, crescimento e aprendizado contínuo, em busca de <strong>satisfação pessoal</strong>, que, consequentemente, <strong>reflete em valor agregado</strong> ao próximo”.</em></p>
      </article>
    </div>
  </div>
</section>
<!-- ./ ESSENCIA -->

<!-- FRASE 1 -->
<section class="frase1 text-center">
  <p>“Quando sua realidade muda, seus sonhos não precisam mudar”</p>
  <p><strong>Marc Herramans</strong></p>
</section>
<!-- ./ FRASE 1 -->

<!-- LISTA MADGO 1 -->
<section class="list-madgoodones">
  <div class="container text-center">
    <div class="row">
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/mad.png" alt=""></figure>
        <div>
          <h1>MAD</h1>
          <p>Ensandecidos de paixão pelo que fazemos, tanto como estilo de vida, quanto pela profissão</p>
        </div>
      </article>
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/good.png" alt=""></figure>
        <div>
          <h1>GOOD</h1>
          <p>Somos bons na execução do job, em busca de resultados almejados que agreguem ao cliente</p>
        </div>
      </article>
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/ones.png" alt=""></figure>
        <div>
          <h1>ONES</h1>
          <p>Únicos e poucos, mas com habilidades múltiplas e que representam uma multidão</p>
        </div>
      </article>
    </div>
  </div>
</section>
<!-- ./ LISTA MADGO 1 -->

<!-- QUEM É A MADGO -->
<section id="quemsomos" class="mod_quemsomos">
  <div class="container">
    <div class="row">
      <article class="col-xs-12 col-sm-6 col-sm-offset-6">
        <div class="page-header">
          <h1>Quem é a MadGO</h1>
        </div>
        <p><strong>Mad Good Ones é a alma</strong>, nossa essência, o que nos inspira, nosso slogan, nosso espírito.</p>
        <p><strong>MadGO é a Agência de Design, Webdesign e Marketing Digital</strong>, que leva nas costas o espírito Mad Good Ones, aplicando o conceito aos negócios, visando a geração de leads e negócios na internet.</p>
        <p>É isso! <strong>Go! Sempre em frente.</strong><br>
        Evoluindo. Sonhando. Criando. Crescendo.</p>
      </article>
    </div>
  </div>
</section>
<!-- ./ QUEM É A MADGO -->

<!-- O QUE FAZEMOS -->
<section id="oquefazemos" class="mod_oquefazemos">
  <div class="container">
    <div class="row">
      <div class="page-header">
        <h1>OK! Mas, o que fazemos?</h1>
      </div>
        <p>DESIGN,<br>
        WEBDESIGN <span>&</span><br>
        MARKETING DIGITAL</p>
    </div>
  </div>
</section>
<!-- ./ O QUE FAZEMOS -->

<section class="planejamento-estrategico">
  <div class="container content">
    <div class="col-xs-12 col-sm-6">
      <figure>
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/planejamento-estrategico.png" alt="Planejamento Estratégico">
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6">
    <header class="page-header">
      <h1>Planejamento Estratégico</h1>
    </header>
      <article>
        <p>Na MadGO queremos agregar ao negócios de nossos clientes por <strong>atender de perto e de maneira personalizada.</strong></p>
        <p>Para isso, o plano é trabalhar a quatro mãos:</p>
      </article>
    </div>
  </div>
  <div class="formula">
    <div class="formula-box formula-box-1">
      <span class="black">CLIENTE <span class="red">+</span> MADGO <span class="red">:)</span></span>
    </div>
    <div class="formula-box formula-box-2">
      <strong>Planejamento estratégico ideal</strong>
    </div>
    <div class="formula-box formula-box-3">
      <span class="black">1.Diagnóstico <span class="red">></span> 2.Estratégia <span class="red">></span> 3.Plano de ação <span class="red">></span> 4.Implantação</span>
    </div>
  </div>
</section>

<!-- Clientes -->
<?php get_template_part( "templates/template", "clientes" ); ?>
<!-- Clientes -->

<!-- Portfólio -->
<?php //get_template_part( "templates/template", "portfolio" ); ?>
<?php get_template_part( "templates/template", "isotope" ); ?>
<!-- Portfólio -->

<!-- FRASE 2 -->
<section class="frase2 text-center">
  <p><strong>Seu negócio</strong> será <strong>nosso negócio.</strong></p>
  <p>Só assim atingiremos nossos objetivos.</p>
</section>
<!-- ./ FRASE 2 -->

<!-- Contato -->
<?php get_template_part( "templates/template", "contato" ); ?>
<!-- Contato -->

<?php get_footer(); ?>