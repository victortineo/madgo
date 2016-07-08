<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true); echo " - "; bloginfo('description');
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" />
  <meta name="author" content="MadGO" />
  <meta name="contact" content="contato@madgo.com.br" />
  
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#ff6b59">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#ff6b59">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,200,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/animate.css/animate.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/src/assets/font/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/src/assets/font/caecilia/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/src/assets/css/main.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php get_template_part('analyticstracking'); ?>
  <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#menu-wrapper" data-offset="78">
<header id="top">
<nav id="mod_navbar2" class="navbar navbar-default navbar-shrink">
  <div class="container navbar-wrapper">
    <div class="branding col-xs-8 col-sm-2 text-right">
      <a href="<?php bloginfo('url');?>" title="<?php wp_title('-', true, 'right'); bloginfo() ?>">
        <img src="<?php echo get_template_directory_uri() ?>/src/assets/img/madgo.png" alt="<?php wp_title('-', true, 'left'); bloginfo() ?>">
      </a>
    </div><!-- fim branding -->
    <div class="menu-collapse pull-right">
      <span class="glyphicon glyphicon-th"></span>
    </div>
    <div class="menu col-xs-9 col-sm-10">
      <div class="row">
        <div class="col-xs-12 <?php if(is_home()) :?>link-animation<?php endif; ?>">
          <div id="menu-wrapper" class="menu__wrapper">
            <ul id="menu-list" class="nav navbar-nav menu__list">
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#top">Home</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#essencia">Essência</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#quemsomos">Quem somos</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#oquefazemos">O que fazemos</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#clientes">Clientes</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#portfolio">Portfólio</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#contato">Contato</a></li>
              <li class="<?php if(is_page("blog")){echo "active";} ?>"><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
            </ul>
          </div> <!-- /#menu-wrapper -->
        </div> <!-- /.col-xs-12 -->
      </div><!-- fim row -->
    </div><!-- fim menu -->
  </div><!-- /.container-fluid -->
</nav>
</header>

<!-- CABEÇALHO -->
<section id="mod_header">
  <div class="absolute">
    <figure class="col-xs-12">
      <img src="<?php echo get_template_directory_uri() ?>/src/assets/img/madgo-big.png" alt="">
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
      <article class="col-xs-12 col-sm-6">
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
        <figure><img src="<?php echo get_template_directory_uri() ?>/src/assets/img/mad.png" alt=""></figure>
        <div>
          <h1>MAD</h1>
          <p>Ensandecidos de paixão pelo que fazemos, tanto como estilo de vida, quanto pela profissão</p>
        </div>
      </article>
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/src/assets/img/good.png" alt=""></figure>
        <div>
          <h1>GOOD</h1>
          <p>Somos bons na execução do job, em busca de resultados almejados que agreguem ao cliente</p>
        </div>
      </article>
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/src/assets/img/ones.png" alt=""></figure>
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
      <div class="col-xs-12">
        <p>DESIGN,<br>
        WEBDESIGN <span>&</span><br>
        MARKETING DIGITAL</p>
      </div>
    </div>
  </div>
</section>
<!-- ./ O QUE FAZEMOS -->

<!-- LISTA MADGO 2 -->
<section class="list-madgoodones list-madgoodones-2">
  <div class="container text-center">
    <div class="row">
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/src/assets/img/design-icon-1.png" alt=""></figure>
        <div>
          <p>
            Marca – Logotipo<br>
            Namming<br>
            Identidade Visual<br>
            Papelaria<br>
            Apresentações<br>Institucional<br>
            Apresentação Comercial<br>
            Folder<br>
            Design Gráfico<br>
            Conceito Criativo<br>
          </p>
        </div>
      </article>
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/src/assets/img/webdesign-icon-1.png" alt=""></figure>
        <div>
          <p>Site – Website<br>
          Layout Mobile<br>
          Wireframing<br>
          Desenvolvimento<br>
          Responsivo – Mobile<br>
          UX/UI Design<br>
          One Page Site<br>
          App – Aplicativo<br>
          Wordpress e HTML<br>
          Front-end<br></p>
        </div>
      </article>
      <article class="col-xs-12 col-sm-4">
        <figure><img src="<?php echo get_template_directory_uri() ?>/src/assets/img/marketing-digital-icon.png" alt=""></figure>
        <div>
          <p>Adwords<br>
          Links Patrocinados<br>
          Facebook Ads<br>
          E-mail Marketing<br>
          Landing Page<br>
          Inbound<br>
          Geração de Leads<br>
          Conteúdo para Blog<br>
          Social Mídia<br>
          SEO<br></p>
        </div>
      </article>
    </div>
  </div>
</section>
<!-- ./ LISTA MADGO 2 -->

<!-- FRASE 2 -->
<section class="frase2 text-center">
  <p><strong>Seu negócio</strong> será <strong>nosso negócio.</strong></p>
  <p>Só assim atingiremos nossos objetivos.</p>
</section>
<!-- ./ FRASE 2 -->

<!-- CONTATO -->
<section id="contato" class="mod_contato">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-header">
          <h1>Quero um orçamento!</h1>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8">
        <div class="form">
          <p>Conte-nos o que você precisa, apresentaremos uma solução e um orçamento!</p>
          <form action="#" method="post">
            <label for="nome">Seu nome</label>
            <div class="input-group">
              <input type="text" name="Nome" id="nome">
            </div>
            <label for="email">Seu e-mail</label>
            <div class="input-group">
              <input type="email" name="E-mail" id="email">
            </div>
            <label for="tel">Telefone</label>
            <div class="input-group">
              <input type="tel" name="Telefone" id="tel">
            </div>
            <label for="mensagem">Conte o que você precisa</label>
            <div class="input-group">
              <textarea name="Mensagem" id="mensagem"></textarea>
            </div>
            <div class="col-xs-12 col-md-8">
              <div class="input-group-checkbox">
                <input type="checkbox" name="PDF" id="pdf" value="Desejo receber a apresentação da MadGO.">
                <label for="pdf">Desejo receber a apresentação da MadGO em PDF </label>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <input type="submit" value="Orçamento" class="btn btn-custom1">
            </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="absolute">
          O café é por nossa conta :)<br>
          <span class="glyphicon glyphicon-envelope"></span> <span>contato@madgo.com.br</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./ CONTATO -->

<!-- FOOTER -->
<section id="footer" class="footer">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-10">
      <img src="<?php echo get_template_directory_uri() ?>/src/assets/img/madgo-footer.jpg" alt="">
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
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/src/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/src/assets/js/main.jquery.js"></script>

  <?php wp_footer(); ?>
</body>
</html>