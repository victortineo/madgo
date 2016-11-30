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
  <link rel="stylesheet" type="text/css" href="http://www.owlcarousel.owlgraphic.com/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="http://www.owlcarousel.owlgraphic.com/assets/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/font/caecilia/fonts.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php get_template_part('analyticstracking'); ?>
  <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#menu-wrapper" data-offset="78">
<header id="top">
<nav id="mod_navbar2" class="navbar navbar-default <?php if (is_home()) {
  echo 'navbar-shrink';
} ?>">
  <div class="container navbar-wrapper">
    <div class="branding col-xs-8 col-sm-2">
      <a href="<?php bloginfo('url');?>" title="<?php wp_title('-', true, 'right'); bloginfo() ?>">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/madgo.png" alt="<?php wp_title('-', true, 'left'); bloginfo() ?>">
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
              <li><a id="abrirOquefazemos" href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#">O que fazemos</a></li>
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