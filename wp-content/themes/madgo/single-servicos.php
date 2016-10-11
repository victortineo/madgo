<?php get_header(); ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<?php 
$subtipo = get_field('subtipo');
$mostrar_portfolio = get_field('mostrar_portfolio');
?>
<main class="mod-page-servicos">

<section class="content">
  <header class="page-header">
  <div class="container">
    <?php $next_post = get_next_post(); ?>
    <?php $prev_post = get_previous_post(); ?>
    <h1>
    <?php if (!empty( $prev_post )): ?><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php _e(do_shortcode($prev_post->post_title));  ?> |</a><?php endif ?> 
    <span><?php the_title(); ?></span> 
    <?php if (!empty( $next_post )): ?><a href="<?php echo get_permalink( $next_post->ID ); ?>">| <?php _e(do_shortcode($next_post->post_title)); ?></a><?php endif ?> 
    </h1>

    <?=get_field('resumo')?>
  </div>
  </header>
  <div class="content-text">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<div class="owl-wrapper">
<section class="mod-portfolio-1">
  <?php get_template_part( 'templates/portfolio', $mostrar_portfolio ); ?>
</section>
</div>

<!-- Contato -->
<section id="contato" class="mod-contato page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8">
        <div class="page-header">
          <h1>Faça um orçamento: <?=$subtipo?></h1>
          <h2>Entre em contato conosco, teremos o maior prazer em atende-lo da melhor maneira possivel e ajudá-lo a encontrar a solução ideal para sua necessidade.</h2>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8">
        <div class="form">
          <p>Conte-nos o que você precisa, apresentaremos uma solução e um orçamento!</p>
          <form action="#" method="post">
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
<!-- Contato -->

<div class="mod-servicos-estatico">
 <?php get_template_part( 'templates/template', 'servicos' ); ?>
</div>

</main>

<?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>
