<?php get_header(); ?>
<section id="blog" class="container-fluid blog">
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
			<div class="page-header">
				<h1><?php echo single_cat_title("", false); ?></h1>
				<hr>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
			<div class="row">
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
					'category_name' => single_cat_title("", false),
					'post_type' => 'post',
					'paged' => $paged
					);
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<article class="post-preview col-xs-12">
				<div class="row no-gutter">
					<div class="col-xs-2 col-sm-2 no-gutter">
						<div class="post-excerpt">
							<span class="day"><?php the_time('d') ?></span><br>
							<span class="date"><?php the_time("M 'y") ?></span>
						</div>
					</div>
					<div class="col-xs-10 col-sm-10">
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