<?php $carousel_query = new WP_Query( 'category_name=carousel' ); ?>

<?php if( $carousel_query->have_posts() ): ?>

<div id="main-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <?php if( sizeof($carousel_query->posts)!=1 ): ?>

    <ol class="carousel-indicators">

    	<?php $i=0; ?>
  	<?php while( $carousel_query->have_posts() ) : $carousel_query->the_post(); ?>
  		<?php if( $i==0 ): ?>			
  		    <li data-target="#main-carousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
  		<?php else: ?>
  		    <li data-target="#main-carousel" data-slide-to="<?php echo $i; ?>"></li>
  		<?php endif; ?>
  	<?php $i++; endwhile; ?>

    </ol>

  <?php endif; ?>

  <div class="carousel-inner">
  	<?php $i=0; ?>
  <?php while( $carousel_query->have_posts() ) : $carousel_query->the_post(); ?>
  		<?php $thumb_img_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'slide-1920-460'); ?>
		<?php $thumb_url_src = $thumb_img_src[0]; ?>

		<?php if( $i==0 ): ?>			
    <div class="item active">
    	
    	<?php if( has_post_thumbnail() ): ?>
    		<style type="text/css">
		  		.carousel-slide-<?php echo $i; ?>{ background-image: url(<?php echo $thumb_url_src; ?>); }
		  	</style>

    		<div class="carousel-slide-<?php echo $i; ?>"></div>
	    <?php endif; ?>

    </div><!-- end .item -->
		<?php else: ?>
	<div class="item">
    	
    	<?php if( has_post_thumbnail() ): ?>
    		<style type="text/css">
		  		.carousel-slide-<?php echo $i; ?>{ background-image: url(<?php echo $thumb_url_src; ?>); }
		  	</style>

    		<div class="carousel-slide-<?php echo $i; ?>"></div>
	    <?php endif; ?>

    </div><!-- end .item -->
		<?php endif; ?>

    <?php wp_reset_postdata(); ?>
	<?php $i++; endwhile; ?>
  </div><!-- end .carousel-inner -->

  <?php if( sizeof($carousel_query->posts)!=1 ): ?>
    <!-- Controls -->
    <a class="left carousel-control" href="#main-carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#main-carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  <?php endif; ?>

</div><!-- end #main-carousel -->

<?php else: ?>
	<?php // No existen post con category Carousel ?>
<?php endif; ?>