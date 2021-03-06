<section class="mod-servicos">
	<div class="mod-servicos-toggle">
		<a href="#" id="closeModServicos"><i class="fa fa-times" aria-hidden="true"></i> <span>Fechar</span></a>
	</div>
	<div class="servicos-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 title active" data-title="1">
					<h1>Design</h1>
				</div>
				<div class="col-xs-12 col-sm-4 title" data-title="2">
					<h1>Web Design</h1>
				</div>
				<div class="col-xs-12 col-sm-4 title" data-title="3">
					<h1>Marketing Digital</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="servicos-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 list" data-list="1">
					<ul>
						<?php 
					    $args = array('post_type' => 'servicos', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'asc');
					    $the_query = new WP_Query( $args ); // the query
					    while ($the_query->have_posts()): $the_query->the_post();
					    	$categoria = get_field('categoria');
					    ?>
						<?php if ($categoria == "design"): ?>
							<li> 
							<?php if (get_field('mostrar_link') == 'não'): ?> 
								<span><?php the_title(); ?></span>
							<?php  else: ?> 
								<a title="<?php the_title(); ?>" <?php if(get_field('mostrar_link') != 'não'): ?> href="<?php the_permalink(); ?>"<?php endif; ?>><?php the_title(); ?></a> 
							<?php endif; ?>
							</li>
						<?php endif; ?>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 list" data-list="2">
					<ul>
						<?php 
					    $args = array('post_type' => 'servicos', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'asc');
					    $the_query2 = new WP_Query( $args ); // the query
					    while ($the_query2->have_posts()): $the_query2->the_post();
					    	$categoria = get_field('categoria');
					    ?>
						<?php if ($categoria == "webdesign"): ?>
							<li>
							<?php if (get_field('mostrar_link') == 'não'): ?> 
								<span><?php the_title(); ?></span>
							<?php  else: ?> 
								<a title="<?php the_title(); ?>" <?php if(get_field('mostrar_link') != 'não'): ?> href="<?php the_permalink(); ?>"<?php endif; ?>><?php the_title(); ?></a> 
							<?php endif; ?>
							</li>
						<?php endif; ?>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 list" data-list="3">
					<ul>
						<?php 
					    $args = array('post_type' => 'servicos', 'posts_per_page' => 30, 'orderby' => 'title', 'order' => 'asc');
					    $the_query3 = new WP_Query( $args ); // the query
					    while ($the_query3->have_posts()): $the_query3->the_post();
					    	$categoria = get_field('categoria');
					    ?>
						<?php if ($categoria == "marketing"): ?>
							<li> 
							<?php if (get_field('mostrar_link') == 'não'): ?> 
								<span><?php the_title(); ?></span>
							<?php  else: ?> 
								<a title="<?php the_title(); ?>" <?php if(get_field('mostrar_link') != 'não'): ?> href="<?php the_permalink(); ?>"<?php endif; ?>><?php the_title(); ?></a> 
							<?php endif; ?>
							</li>
						<?php endif; ?>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>