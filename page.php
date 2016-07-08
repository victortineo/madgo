<?php get_header(); ?>
<section class="container-fluid blog">
	<div class="row">
		<?php
		$args = array(
		'post_type' => 'post'
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
			<div class="page-header">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php the_content(); ?>
			<a class="btn btn-custom2" href="<?php bloginfo('url'); ?>/blog">Voltar ao blog</a>
		</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>