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
			<div class="row form-single no-gutter">
			<strong>Assine nossa newsletter</strong>
			<?php 
	        $args = array(
	        'order' => 'DESC',
	        'post_type' => 'contato',
	        'posts_per_page' => 1
	        );
	        // the query
	        $the_query = new WP_Query( $args ); ?>
	        <?php if ( $the_query->have_posts() ) : $the_query->the_post();
	        	$email = get_field('email');
	        ?>
			<form action="https://formspree.io/<?php echo $email; ?>" method="POST">
				<input type="hidden" name="Lugar" value="MadGO" />
	            <input type="hidden" name="_next" value="<?php echo get_template_directory_uri() ?>/obrigado.html" />
	            <input type="hidden" name="_subject" value="Newsletter Post MadGO" />
				<div class="col-xs-12 col-sm-4 no-gutter">
	              <div class="input-group">
	                <input placeholder="NOME" name="FNAME" id="mce-FNAME" type="text">
	              </div>
	            </div>
	            <div class="col-xs-12 col-sm-5 no-gutter">
	              <div class="input-group">
	                <input placeholder="SEU E-MAIL" name="EMAIL" type="email" id="mce-EMAIL">
	              </div>
	            </div>
	            <div class="col-xs-12 col-sm-3">
	              <input type="submit" value="ASSINAR" name="subscribe" id="mc-embedded-subscribe" class="btn btn-custom2 btn-block">
	            </div>
		      <div class="clearfix"></div>
		      </div>
          	</form>
          	<?php endif; ?>
          	<?php comments_template(); ?>
		</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>

	</div>
</section>
<?php get_footer(); ?>