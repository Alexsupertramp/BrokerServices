<?php get_header(); ?>

<div class="broker-content">
	
	<?php include('carousel.php'); ?>

	<section class="broker-services">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="linea">
						<h2>Servicios</h2>
					</div>	
				</div><!--col-xs-12 end-->
			</div><!--row end-->
			<div class="row">

			<?php $the_query = new WP_Query('pagename=creditos'); ?>
				<?php if($the_query->have_posts()): ?>
					<?php while($the_query->have_posts()):$the_query->the_post(); ?>

				<div class="col-xs-4">
					<article class="info-block">
						<header>
							<h3><?php the_title(); ?></h3>
						</header>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div><!--info-img end-->
						<?php
						  $excerpt = get_the_excerpt();
						  echo string_limit_words($excerpt,35);
						?>
						<footer class="btn-vm">
							<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</footer>
					</article><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<?php $the_query2 = new WP_Query('pagename=arrendamiento'); ?>
				<?php if($the_query2->have_posts()): ?>
					<?php while($the_query2->have_posts()):$the_query2->the_post(); ?>

				<div class="col-xs-4">
					<article class="info-block">
						<header>
							<h3><?php the_title(); ?></h3>
						</header>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div><!--info-block end-->
						<?php
						  $excerpt = get_the_excerpt();
						  echo string_limit_words($excerpt,40);
						?>
						<footer class="btn-vm">
							<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</footer>
					</article><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<?php $the_query3 = new WP_Query('pagename=factoraje'); ?>
				<?php if($the_query3->have_posts()): ?>
					<?php while($the_query3->have_posts()):$the_query3->the_post(); ?>

				<div class="col-xs-4">
					<div class="info-block">
						<header>
							<h3><?php the_title(); ?></h3>
						</header>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<?php
						  $excerpt = get_the_excerpt();
						  echo string_limit_words($excerpt,41);
						?>
						<footer class="btn-vm">
							<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</footer>
					</div><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			</div><!--row end-->
		</div><!--container end-->
	</section><!--broker-services end-->

	<div class="broker-div">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="linea">
						<h3>Índices Bursátiles</h3>
					</div>
					<iframe frameborder="0" scrolling="no" height="192" width="484" allowtransparency="true" marginwidth="0" marginheight="0" src="http://indrates.mx.forexprostools.com/index.php?pairs_ids=169;166;20;170;24441;17920;172;&header-text-color=%23FFFFFF&curr-name-color=%230059b0&inner-text-color=%23000000&green-text-color=%232A8215&green-background=%23B7F4C2&green-background=%23B7F4C2&red-text-color=%23DC0001&red-background=%23FFE2E2&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&open=show&last_update=hide"></iframe>
					<br />
					<span style="font-size: 11px;color: #333333;text-decoration: none;">
						Índices por <a href="http://mx.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com México</a>.
					</span><br>
				</div><!--col-xs-12 end-->
			</div><!--row end-->
		</div><!--container end-->
	</div><!--broker-div end-->

	<div class="broker-part">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3>Nuestros Partners Financieros</h3>							
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