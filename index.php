<?php get_header(); ?>

<div class="broker-content">

	<div class="texto-carousel">
        <div class="row">
          <div class="col-x-12">
            <h1>Financial Broker Services</h1>
            <div class="lineab"></div>           	
            <div class="lineab2"></div>
            	<ul>
            		<li>Créditos</li><p>♦</p>
            		<li>Arrendamiento</li><p>♦</p>
            		<li>Factoraje</li><p>♦</p>
            		<li>Seguros</li>
            	</ul> 
            	<div class="ubicacion">
            		DF y área Metropolitana
            	</div>          
          </div>
        </div>
    </div>

	<?php include('carousel.php'); ?>

	<div class="broker-services">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="linea">
						<h2>Servicios</h2>
					</div>	
				</div><!--col-xs-12 end-->
			</div><!--row end-->
			<div class="row">

			<?php $the_query = new WP_Query('pagename=creditos') ?>
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
						<p><?php the_excerpt(); ?></p>
						<footer class="btn-vm">
							<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</footer>
					</article><!--info-block end-->
				</div><!--col-xs-4 end-->

					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<?php $the_query2 = new WP_Query('pagename=arrendamiento') ?>
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
						</div>
						<p><?php the_excerpt(); ?></p>
						<footer class="btn-vm">
							<a href="<?phpthe_permalink(); ?>">VER MÁS</a>
						</footer>
					</article><!--info-block end-->
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
						<header>
							<h3><?php the_title(); ?></h3>
						</header>
						<div class="info-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<p><?php the_excerpt(); ?></p>
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
	</div><!--broker-services end-->

	<div class="broker-div">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="linea">
						<h3>Cotización de Divisas</h3>
					</div>
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