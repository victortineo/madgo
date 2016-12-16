<aside class="col-xs-12 col-sm-5 col-md-3 col-md-offset-1">
	<div class="sidebar newsletter">
		<header><h1>NEWSLETTER</h1></header>
		<!-- <span>Assine nossa newsletter</span> -->
		<div class="content">
		<style type="text/css">
			.mce-responses {font-size: 12px;}
		</style>
		<form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate action="//madgo.us11.list-manage.com/subscribe/post?u=a87686e44179880f1e95c6c84&amp;id=be93b8247b" method="POST">
			<input type="hidden" name="Lugar" value="Newsletter Sidebar MadGO" />
			<div class="input-group">
				<input type="email" placeholder="Digite seu e-mail" name="EMAIL" id="mce-EMAIL" required>
			</div>
			<div id="mce-responses" class="mce-responses clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a87686e44179880f1e95c6c84_be93b8247b" tabindex="-1" value=""></div>
			<input value="INSCREVA-SE" type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-custom2">
		</form>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		</div>
	</div>
	<div class="sidebar views">
		<header><h1>ARTIGOS MAIS LIDOS</h1></header>
		<ul>
		<?php 
		$args = array(
		'order' => 'DESC',
		'post_type' => 'post',
		'posts_per_page' => 5,
		'meta_key' => 'views',
  		'orderby' => 'meta_value_num'
		);
		// the query
		$the_query = new WP_Query( $args ); ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<li class="row">
			<div class="recent-blog-title col-xs-8 col-sm-12 col-md-8 title">
				<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
			</div>
			<div class="thumbs-blog col-xs-4 col-sm-12 col-md-3 no-gutter bg-view pull-right" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
			<div class="views-count">
				<span class="glyphicon glyphicon-eye-open"></span><span class="counts pull-right"><?php echo the_views();  ?></span>
			</div>
			</div>
		</li>
		<br>
		<?php endwhile; ?>
		</ul>
	</div>
	
	<div class="sidebar services">
		<header><h1>O QUE FAZEMOS</h1></header>
		<ul>
			<li class="row design" style="background-image: url('http://madknow.com.br/madgo/wp-content/themes/madgo/dist/assets/img/adwords.jpg');">
			<a href="http://madknow.com.br/madgo/servicos/adwords/">
			<strong>ADWORDS</strong>
			</a>
			</li>
			<li class="row design" style="background-image: url('http://madknow.com.br/madgo/wp-content/themes/madgo/dist/assets/img/design.jpg');">
			<a href="http://madknow.com.br/madgo/">
			<strong>DESIGN</strong>
			</a>
			</li>
			<li class="row design" style="background-image: url('http://madknow.com.br/madgo/wp-content/themes/madgo/dist/assets/img/marketing-digital.jpg');">
			<a href="http://madknow.com.br/madgo/">
			<strong>MARKETING DIGITAL</strong>
			</a>
			</li>
			<li class="row design" style="background-image: url('http://madknow.com.br/madgo/wp-content/themes/madgo/dist/assets/img/webdesign.jpg');">
			<a href="http://madknow.com.br/madgo/">
			<strong>WEBDESIGN</strong>
			</a>
			</li>
		</ul>
	</div>
	<div class="sidebar">
		<header><h1>POSTS RECENTES</h1></header>
		<ul>
		<?php 
		$args = array(
		'order' => 'DESC',
		'post_type' => 'post',
		'posts_per_page' => 5
		);
		// the query
		$the_query = new WP_Query( $args ); ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
	</div>

	<div class="sidebar newsletter newsletter2">
		<header><h1 class="titulo-quero-venda">Quer saber como atrair clientes e vender mais?</h1></header>
		<strong class="sub-title-venda">Insira o seu endereço de email abaixo e aprenda conosco!</strong>
		<form action="<?php echo get_template_directory_uri(); ?>/functions/sendEmail.php"" method="POST" class="formContato form-quero-venda">
            <input type="hidden" value="Saber sobre atrair cliente e vender na internet" name="Assunto">
           	<div class="input-group">
				<input type="text" placeholder="Nome" name="Nome" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="E-mail" name="E-mail" required>
			</div>
			<input value="QUERO APRENDER" type="submit" class="btn btn-custom1">
			<div class="response">
              <p style="display:none;" class="success">Mensagem enviada com sucesso!</p>
              <p style="display:none;" class="error">Erro ao enviar mensagem.</p>
              <p style="display:none;" class="waiting">Estamos enviando, aguarde!</p>
            </div>
		</form>
	</div>
	<div class="sidebar tags">
		<header><h1>TAGS</h1></header>
		<?php 
		$args = array(
		'post_type' => 'post'
		);
		// the query
		$the_query = new WP_Query( $args ); ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
		<?php endwhile; ?>
	</div>
</aside>