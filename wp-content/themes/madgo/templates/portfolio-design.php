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
    <?php if ($tipo == 'design'): ?>
    <div data-index="1" class="item <?php echo $tipo; ?>" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
        <div class="wrapper">
            <article class="content">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">PROJETO DETALHADO</a>
            </article>
        </div>
    </div>
    <?php endif ?>
    <?php endwhile;
    endif; ?>
</div>
<script>
jQuery(document).ready(function($) { 
    var owl = $('#owl');
    var options = {
        loop: true,
        margin: 0,
        nav: false,
        owl2row: true, // enable plugin
        owl2rowTarget: 'item',    // class for items in carousel div
        owl2rowContainer: 'owl2row-item', // class for items container
        owl2rowDirection: 'utd', // ltr : directions
        items: 4,
        dots: false
    };
    owl.owlCarousel(options);

    $('.owl-button.next').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.owl-button.prev').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    });
});
</script>