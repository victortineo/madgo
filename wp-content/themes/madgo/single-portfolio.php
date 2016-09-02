<?php get_header(); ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<?php 
$capaDaPagina = get_field('capa-da-pagina');
$subtipo = get_field('subtipo');
?>
<main class="mod-page-job-1">
	
	<div class="navigation-cases container-fluid no-gutter">
		<div class="col-xs-12 col-sm-6">
			<strong>PORTFÓLIO MADGO</strong>
		</div>
		<div class="col-xs-12 col-sm-6">
			Case: <span><?php the_title(); ?></span> <?php
			$next_post = get_next_post();
			if (!empty( $next_post )): ?>
			  <a href="<?php echo $next_post->guid ?>">Próximo case</a>
			<?php endif ?> <?php $prev_post = get_previous_post();
			if (!empty( $prev_post )): ?>
			  <a href="<?php echo $prev_post->guid ?>">Case anterior</a>
			<?php endif ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#portfolio">Ver todos</a>
		</div>
	</div>

	<div class="fullpage" style="background-image: url('<?php echo $capaDaPagina; ?>');">
	</div>

	<section class="content container">
		<div class="row">
			<article class="col-xs-12 col-sm-8">
				<?php the_content(); ?>
			</article>
			<aside class="col-xs-12 col-sm-4 tecnologias">
				<header class="aside-title">
					<h1>TECNOLOGIAS USADA</h1>
				</header>
				<?php if( have_rows('tecnologias-usadas') ): ?>
				<ul>
					<?php while ( have_rows('tecnologias-usadas') ) : the_row(); ?>
					<li><?php the_sub_field('nome') ?></li>
					<?php endwhile; ?>
				</ul>
				<?php endif ?>
			</aside>
		</div>
	</section>
<?php
if( have_rows('conteudo') ):
    while ( have_rows('conteudo') ) : the_row();?>

	<?php if( get_row_layout() == 'texto' ):  ?>
	<section class="content container">
		<div class="row">
			<article class="col-xs-12">
				<?php the_sub_field('texto'); ?>
			</article>
		</div>
	</section>
    <?php elseif( get_row_layout() == 'imagem' ): ?>
    <figure>
    	<img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_title(); ?>">
    </figure>
	<?php endif; ?>

<?php
    endwhile;
endif;
?>
<!-- Contato -->
<section id="contato" class="mod-contato page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8">
        <div class="page-header">
          <h1>Faça um orçamento: <?php echo $subtipo; ?></h1>
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
</main>
<?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>