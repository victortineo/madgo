<section id="portfolio" class="mod-portfolio-1">
    <div class="header-section">
        <h1>Portfólio</h1>
        <h2>Entre projetos <span>Online e Offline</span>, veja alguns dos trabalhos da MadGO.</h2>
        <div class="filter-owl">
            <strong data-action="design">DESIGN</strong>
            <strong data-action="webdesign">WEB DESIGN</strong>
        </div>
    </div>
</section>
<div class="owl-wrapper">
<section id="owl-load" class="mod-portfolio-1">
<div class="owl-button prev">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
</div>
<div class="owl-button next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
</div>
<div id="owl" class="owl-carousel">
    <?php 
    $args = array(
    'post_type' => 'portfolio'
    );
    // the query
    $the_query = new WP_Query( $args );
    if($the_query->have_posts()):
    while ($the_query->have_posts()): $the_query->the_post();
    $tipo = get_field('tipo-do-job');
    ?>
    <div data-index="1" class="item <?php echo $tipo; ?>" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
        <div class="wrapper">
            <article class="content">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">PROJETO DETALHADO</a>
            </article>
        </div>
    </div>
    <?php endwhile;
    endif; ?>
</div>

</section><!-- portfolio -->
</div><!-- wrapper -->
