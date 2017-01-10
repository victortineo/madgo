<?php get_header(); ?>
<section class="container-fluid blog single">

	<div class="row">
		
		<?php if (have_posts()): the_post();?>
			<div class="ol-xs-12 col-sm-7 col-md-6 col-md-offset-1">
				<div class="page-header">
					<h1><?php the_title(); ?></h1>
				<?php 
					$share = '[ssba url='. get_permalink() . 'title="Share"]';
					echo do_shortcode($share);
					?>
				</div>
				<div class="conteudo-blog">
					<?php the_content(); ?>
				</div>
				<a class="btn btn-custom1" href="<?php bloginfo('url'); ?>/blog">Voltar ao blog</a>
				<div class="row form-single no-gutter">
					<strong>Assine nossa newsletter</strong>
					<form action="//intrustweb.us13.list-manage.com/subscribe/post?u=a2a672fef6910f5f7276a880f&amp;id=3a32fe030f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a87686e44179880f1e95c6c84_ee643cbcd8" tabindex="-1" value=""></div>
						<div class="clearfix"></div>
					</div>
				</form>
				<div class="fb-comments" data-href="<?= the_permalink();?>" data-width="650" data-numposts="5"></div>

				<?php if(comments_open()): ?>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
				
			</div>
		<?php endif; ?>
		<?php endif; ?>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>