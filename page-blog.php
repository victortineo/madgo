<?php get_header(); ?>
<!-- HERO -->
<!-- FUNDO + LOGO -->
<?php
	$args = array(
	'post_type' => 'page',
	'post_name' => 'blog'
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) : $the_query->the_post();
	$logoBlog = get_field('logo');
?>
<div class="container-fluid hero text-center" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
	<!-- LOGO -->
	<img src="
	<?php if(!$logoBlog) : ?>
		<?php echo get_template_directory_uri() ?>/src/assets/img/madknow.png
	<?php else:
		echo $logoBlog; endif; ?>
	" alt="<?php the_title(); ?>">
</div>
<!-- HERO CONTENT -->
<div class="container-fluid hero-content">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h2><?php echo get_the_content(); ?></h2>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<section id="blog" class="container-fluid blog">
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
			<div class="row">
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
					'post_type' => 'post',
					'paged' => $paged
					);
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<article class="post-preview col-xs-12">
				<div class="row no-gutter">
					<div class="col-xs-3 col-sm-2 no-gutter">
						<div class="post-excerpt">
							<span class="day"><?php the_time('d') ?></span><br>
							<span class="date"><?php the_time("M 'y") ?></span><br>
							<span>por <b>MadGO</b></span>
						</div>
					</div>
					<div class="col-xs-9 col-sm-10">
						<div class="post-content">
						<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
					<a href="<?php echo get_permalink(); ?>">
					<div class="post-thumbnail" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
					</a>
					
				</article>
				<?php endwhile; ?>
				<?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>