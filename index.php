<?php get_header(); ?>

<div class="broker-content">
	<?php include 'carousel.php' ?>

	<div class="broker-services">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><h2>Servicios</h2></div><!--col-xs-12 end-->
			</div><!--row end-->
			<div class="row">

			<?php $the_query = new WP_Query('pagename=creditos') ?>
				<?php if($the_query->have_posts()): ?>
					<?php while($the_query->have_posts()):$the_query->the_post(); ?>

				<div class="col-xs-4">
					<div class="info-block">
						<h3><?php the_title(); ?></h3>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div><!--info-img end-->
						<p><?php the_excerpt(); ?></p>
						<div class="btn-vm">
						<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</div>
					</div><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<?php $the_query2 = new WP_Query('pagename=arrendamiento') ?>
				<?php if($the_query2->have_posts()): ?>
					<?php while($the_query2->have_posts()):$the_query2->the_post(); ?>

				<div class="col-xs-4">
					<div class="info-block">
						<h3><?php the_title(); ?></h3>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<p><?php the_excerpt(); ?></p>
						<div class="btn-vm">
						<a href="<?phpthe_permalink(); ?>">VER MÁS</a>
						</div>
					</div><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<?php $the_query3=new WP_Query('pagename=factoraje') ?>
				<?php if($the_query3->have_posts()): ?>
					<?php while($the_query3->have_posts()):$the_query3->the_post(); ?>

				<div class="col-xs-4">
					<div class="info-block">
						<h3><?php the_title(); ?></h3>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<p><?php the_excerpt(); ?></p>
						<div class="btn-vm">
						<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</div>
					</div><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			</div><!--row end-->
		</div><!--container end-->
	</div><!--broker-services end-->

	<div class="broker-div">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Cotización de Divisas</h2>
					<div><img src="<?php bloginfo( 'template_url' ); ?>/img/index/divisas.png" ></div><br>
					<p>Cambios de Divisas entregados por <a href="#">Investing.com Mexico</a></p>
				</div><!--col-xs-12 end-->
			</div><!--row end-->
		</div><!--container end-->
	</div><!--broker-div end-->

	<div class="broker-part">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Nuestros Partners Financieros</h2>							
				</div><!--col-xs-12 end-->
			</div><!--row end-->
			<div class="row">
				<div class="col-xs-4"><div class="part-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/index/logos-clientes/ficrea.png" ></div></div>
				<div class="col-xs-4"></div>
				<div class="col-xs-4"><div class="part-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/index/logos-clientes/unifin.png" ></div></div>
			</div>
		</div><!--container end-->
	</div><!--broker-part end-->
</div><!--broker-content end-->

			<?php get_footer(); ?>