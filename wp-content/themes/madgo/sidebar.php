<aside class="col-xs-12 col-sm-5 col-md-3 col-md-offset-1">
	<div class="sidebar newsletter">
		<header><h1>NEWSLETTER</h1></header>
		<!-- <span>Assine nossa newsletter</span> -->
		<div class="content">
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
            <input type="hidden" name="_subject" value="Newsletter Sidebar MadGO" />
			<!-- <div class="input-group">
				<input type="text" placeholder="Seu nome" name="FNAME" id="mce-FNAME">
			</div> -->
			<div class="input-group">
				<input type="email" placeholder="Digite seu e-mail" name="EMAIL" id="mce-EMAIL">
			</div>
			<input value="INSCREVA-SE" type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-custom2">
		</form>
		<?php endif; ?>
		</div>
	</div>
	<div class="sidebar views">
		<header><h1>POSTS MAIS LIDOS</h1></header>
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
			<div class="col-xs-8 col-sm-12 col-md-8 title">
				<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
			</div>
			<div class="col-xs-4 col-sm-12 col-md-4 no-gutter bg-view pull-right" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
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
			$categoria = get_the_category();
			$nomeCategoria = $categoria[0];
		?>
		<?php 
			if($nomeCategoria->slug == "design" ||
			   $nomeCategoria->slug == "webdesign" ||	
			   $nomeCategoria->slug == "marketing-digital" ||
			   $nomeCategoria->slug == "adwords"
			):
		?>
		<li class="row <?php echo $nomeCategoria->slug; ?>" style="background-image: url('<?php echo $nomeCategoria->description; ?>');">
			<a href="<?php echo get_category_link( $nomeCategoria->cat_ID ) ?>">
				<strong><?php echo $nomeCategoria->cat_name; ?></strong>
			</a>
		</li>
		<?php endif; ?>
		<?php endwhile; ?>
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