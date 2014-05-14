<div id="main-carousel" class="carousel slide">

          <ol class="carousel-indicators">

            <?php $temp_query = $wp_query; ?>
            <!-- Do stuff... -->
            <?php query_posts('category_name=carousel&posts_per_page=3'); ?>
            <?php $i=0; ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- Do special_cat stuff... -->
              <?php if($i==0): ?>
                <li data-target="#marzu-carrusel" data-slide-to ="<?php echo $i; ?>" class="active"></li>
              <?php else: ?>
                <li data-target="#marzu-carrusel" data-slide-to ="<?php echo $i; ?>"></li>              
              <?php endif; ?>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php $wp_query = $temp_query; ?>

          </ol>

          <div class="carousel-inner">

            <?php $temp_query = $wp_query; ?>
            <!-- Do stuff... -->
            <?php query_posts('category_name=carousel&posts_per_page=3'); ?>
            <?php $i=1; ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if($i==1) : ?>
                  <div class="item active">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <?php else: ?>
                    <div class="item">
                      <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <?php $i++; ?>
              <?php endwhile; ?>
            <?php $wp_query = $temp_query; ?>

          </div>

      <a class="carousel-control left" href="#marzu-carrusel" data-slide="prev"><div class="carousel-control-left">&lsaquo;</div></a>
      <a class="carousel-control right" href="#marzu-carrusel" data-slide="next"><div class="carousel-control-right">&rsaquo;</div></a>

    </div><!--marzu-carrusel end-->