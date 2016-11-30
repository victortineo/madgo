<?php get_header(); ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<?php 
$capaDaPagina = get_field('capa-da-pagina');
$subtipo = get_field('subtipo');
?>
<main class="mod-page-job-1 <?php if(get_field('header')): ?>webdesign<?php endif;?>">
	
	<div class="navigation-cases container-fluid no-gutter">
		<div class="col-xs-12 col-sm-6">
			<strong>PORTFÓLIO MADGO</strong>
		</div>
		<div class="col-xs-12 col-sm-6">
			Case: <span><?php the_title(); ?></span>
		</div>
	</div>
	<?php if(get_field('header')): ?>
	<section class="fullpage-webdesign" style="background-image: url('<?php echo $capaDaPagina; ?>');">
		<img class="visible-xs pull-right" src="<?php echo $capaDaPagina; ?>" alt="<?php the_title(); ?>">
		<div class="content container">
			<div class="col-xs-12 col-sm-6">

				<?php the_content(); ?>
			</div>
		</div>
	</section>

	<?php if (get_field('o_que_foi_feito')): ?>
	<section class="content-webdesign">
		<div class="container">
			<?=get_field('o_que_foi_feito')?>
		</div>
	</section>
	<?php endif ?>
	
	<?php if (get_field('wireframe')): ?>
		<section class="wireframe-webdesign">
			<div class="container">
				<div class="col-xs-12 col-sm-5">
					<?=get_field('wireframe')?>
				</div>
				<div class="col-xs-12 col-sm-6 text-center pull-right">
					<img src="<?=get_field('imagem_wireframe')?>" alt="Wireframes">
				</div>
			</div>
		</section>
	<?php endif ?>
	
	<?php if (get_field('site')): ?>
	<section class="site-webdesign">
		<div class="container">
			<figure class="col-xs-12 col-sm-9">
				<img src="<?=get_field('imagem_site')?>" alt="Site completo">
			</figure>
			<div class="col-xs-12 col-sm-3">
				<div class="lista">
					<div class="lista-header">
						<strong>DESCRITIVO DAS ÁREAS</strong>
					</div>
					<ol>
						<?php while ( have_rows('site') ) : the_row(); ?>
						<li><span><?=get_sub_field('descricao')?></span></li>
						<?php endwhile; ?>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<?php endif ?>

	<?php if (get_field('texto_explicativo')): ?>
	<section class="content">
		<div class="container">
			<div class="col-xs-12">
				<?=get_field('texto_explicativo')?>
			</div>
		</div>
	</section>
	<?php endif ?>

	<?php else : ?>
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
	<?php endif ?>
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
<?php get_template_part( 'templates/template', 'contato' ); ?>
<!-- Contato -->
</main>

<div class="mod-servicos-estatico">
 <?php get_template_part( 'templates/template', 'servicos' ); ?>
</div>

<div class="controls-mod-job">
  <?php $next_post = get_next_post(); ?>
  <?php $prev_post = get_previous_post(); ?>
  <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="controls-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
  <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="controls-left"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
</div>
<?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>
