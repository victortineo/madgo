<section class="isotope" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="page-header">
        <h1>Portfólio</h1>
        <h2>Entre projetos <strong>Online e Offline</strong>, veja alguns dos trabalhos da MadGO.</h2>
      </div>
      <div id="filters" class="button-group">  
        <button class="button is-checked" data-filter="*">All</button>
        <button class="button" data-filter=".branding">branding</button>
        <button class="button" data-filter=".impresso">impresso</button>
        <button class="button" data-filter=".marca">marca</button>
        <button class="button" data-filter=".mobile">mobile</button>
        <button class="button" data-filter=".produto">produto</button>
        <button class="button" data-filter=".web">web</button>
        <button class="button" data-filter=".wordpress">wordpress</button>
      </div>
      
  
      <div class="grid">
        <?php 
          $args = array('post_type' => 'galeria', 'posts_per_page' => -1);
          $the_query = new WP_Query( $args ); // the query
          while ($the_query->have_posts()): $the_query->the_post();
          $categoria = get_field('categoria');
        ?>
        <figure class="element-item <?php if(is_array($categoria)) {
         echo implode(' ', $categoria);
        } else {
          echo $categoria;
        } ?>" data-category="<?php if(is_array($categoria)) {
         echo implode(' ', $categoria);
          } else {
            echo $categoria;
            } ?>" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
          <a href="<?php the_post_thumbnail_url('full'); ?>" rel="prettyPhoto[gallery]" title="<?php the_title(); ?>">
            <img class="sr-only" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
            <figcaption>
              <strong><?php the_title(); ?></strong><br>
              <strong><?= get_the_content(); ?></strong>
            </figcaption>
          </a>
        </figure>
        <?php endwhile; ?>

      </div><!-- grid -->
    </div><!-- row -->
  </div><!-- container -->
</section>